<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBoxRequest;
use App\Http\Requests\StoreBoxRequest;
use App\Http\Requests\UpdateBoxRequest;
use App\Models\Box;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class BoxController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('box_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $boxes = Box::with(['media'])->get();

        return view('admin.boxes.index', compact('boxes'));
    }

    public function create()
    {
        abort_if(Gate::denies('box_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.boxes.create');
    }

    public function store(StoreBoxRequest $request)
    {
        $box = Box::create($request->all());

        if ($request->input('image', false)) {
            $box->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $box->id]);
        }

        return redirect()->route('admin.boxes.index');
    }

    public function edit(Box $box)
    {
        abort_if(Gate::denies('box_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.boxes.edit', compact('box'));
    }

    public function update(UpdateBoxRequest $request, Box $box)
    {
        $box->update($request->all());

        if ($request->input('image', false)) {
            if (! $box->image || $request->input('image') !== $box->image->file_name) {
                if ($box->image) {
                    $box->image->delete();
                }
                $box->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($box->image) {
            $box->image->delete();
        }

        return redirect()->route('admin.boxes.index');
    }

    public function show(Box $box)
    {
        abort_if(Gate::denies('box_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.boxes.show', compact('box'));
    }

    public function destroy(Box $box)
    {
        abort_if(Gate::denies('box_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $box->delete();

        return back();
    }

    public function massDestroy(MassDestroyBoxRequest $request)
    {
        $boxes = Box::find(request('ids'));

        foreach ($boxes as $box) {
            $box->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('box_create') && Gate::denies('box_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Box();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
