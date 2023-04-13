@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.hero.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.heroes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.hero.fields.id') }}
                        </th>
                        <td>
                            {{ $hero->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hero.fields.title') }}
                        </th>
                        <td>
                            {{ $hero->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hero.fields.subtitle') }}
                        </th>
                        <td>
                            {{ $hero->subtitle }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hero.fields.images') }}
                        </th>
                        <td>
                            @foreach($hero->images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hero.fields.button_text') }}
                        </th>
                        <td>
                            {{ $hero->button_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hero.fields.button_link') }}
                        </th>
                        <td>
                            {{ $hero->button_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.heroes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection