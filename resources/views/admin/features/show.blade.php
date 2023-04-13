@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.feature.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.features.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.feature.fields.id') }}
                        </th>
                        <td>
                            {{ $feature->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feature.fields.title') }}
                        </th>
                        <td>
                            {{ $feature->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feature.fields.icon') }}
                        </th>
                        <td>
                            {{ $feature->icon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feature.fields.text') }}
                        </th>
                        <td>
                            {!! $feature->text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feature.fields.image') }}
                        </th>
                        <td>
                            @if($feature->image)
                                <a href="{{ $feature->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $feature->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.features.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection