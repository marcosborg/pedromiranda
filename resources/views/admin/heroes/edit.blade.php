@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.hero.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.heroes.update", [$hero->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.hero.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $hero->title) }}">
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.hero.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subtitle">{{ trans('cruds.hero.fields.subtitle') }}</label>
                <input class="form-control {{ $errors->has('subtitle') ? 'is-invalid' : '' }}" type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $hero->subtitle) }}">
                @if($errors->has('subtitle'))
                    <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.hero.fields.subtitle_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="images">{{ trans('cruds.hero.fields.images') }}</label>
                <div class="needsclick dropzone {{ $errors->has('images') ? 'is-invalid' : '' }}" id="images-dropzone">
                </div>
                @if($errors->has('images'))
                    <span class="text-danger">{{ $errors->first('images') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.hero.fields.images_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="button_text">{{ trans('cruds.hero.fields.button_text') }}</label>
                <input class="form-control {{ $errors->has('button_text') ? 'is-invalid' : '' }}" type="text" name="button_text" id="button_text" value="{{ old('button_text', $hero->button_text) }}">
                @if($errors->has('button_text'))
                    <span class="text-danger">{{ $errors->first('button_text') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.hero.fields.button_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="button_link">{{ trans('cruds.hero.fields.button_link') }}</label>
                <input class="form-control {{ $errors->has('button_link') ? 'is-invalid' : '' }}" type="text" name="button_link" id="button_link" value="{{ old('button_link', $hero->button_link) }}">
                @if($errors->has('button_link'))
                    <span class="text-danger">{{ $errors->first('button_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.hero.fields.button_link_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var uploadedImagesMap = {}
Dropzone.options.imagesDropzone = {
    url: '{{ route('admin.heroes.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
      uploadedImagesMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedImagesMap[file.name]
      }
      $('form').find('input[name="images[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($hero) && $hero->images)
      var files = {!! json_encode($hero->images) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
@endsection