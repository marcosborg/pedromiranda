<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyHeroRequest;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;
use App\Models\Hero;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class HeroController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {

        abort_if(Gate::denies('hero_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $heroes = Hero::with(['media'])->get();

        return view('admin.heroes.index', compact('heroes'));
    }

    public function create()
    {
        abort_if(Gate::denies('hero_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.heroes.create');
    }

    public function store(StoreHeroRequest $request)
    {
        $hero = Hero::create($request->all());

        foreach ($request->input('images', []) as $file) {
            $hero->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('images');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $hero->id]);
        }

        return redirect()->route('admin.heroes.index');
    }

    public function edit(Hero $hero)
    {
        abort_if(Gate::denies('hero_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.heroes.edit', compact('hero'));
    }

    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        $hero->update($request->all());

        if (count($hero->images) > 0) {
            foreach ($hero->images as $media) {
                if (! in_array($media->file_name, $request->input('images', []))) {
                    $media->delete();
                }
            }
        }
        $media = $hero->images->pluck('file_name')->toArray();
        foreach ($request->input('images', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $hero->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('images');
            }
        }

        return redirect()->back()->with('message', 'Sucesso');
    }

    public function show(Hero $hero)
    {
        abort_if(Gate::denies('hero_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.heroes.show', compact('hero'));
    }

    public function destroy(Hero $hero)
    {
        abort_if(Gate::denies('hero_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $hero->delete();

        return back();
    }

    public function massDestroy(MassDestroyHeroRequest $request)
    {
        $heroes = Hero::find(request('ids'));

        foreach ($heroes as $hero) {
            $hero->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('hero_create') && Gate::denies('hero_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Hero();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}