@extends('layouts.admin')
@section('content')
@can('box_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.boxes.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.box.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.box.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Box">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.box.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.box.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.box.fields.text') }}
                        </th>
                        <th>
                            {{ trans('cruds.box.fields.icon') }}
                        </th>
                        <th>
                            {{ trans('cruds.box.fields.image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($boxes as $key => $box)
                        <tr data-entry-id="{{ $box->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $box->id ?? '' }}
                            </td>
                            <td>
                                {{ $box->title ?? '' }}
                            </td>
                            <td>
                                {{ $box->text ?? '' }}
                            </td>
                            <td>
                                {{ $box->icon ?? '' }}
                            </td>
                            <td>
                                @if($box->image)
                                    <a href="{{ $box->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $box->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('box_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.boxes.show', $box->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('box_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.boxes.edit', $box->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('box_delete')
                                    <form action="{{ route('admin.boxes.destroy', $box->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('box_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.boxes.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Box:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection