<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNesletterRequest;
use App\Http\Requests\StoreNesletterRequest;
use App\Http\Requests\UpdateNesletterRequest;
use App\Models\Nesletter;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NesletterController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('nesletter_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nesletters = Nesletter::all();

        return view('admin.nesletters.index', compact('nesletters'));
    }

    public function create()
    {
        abort_if(Gate::denies('nesletter_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nesletters.create');
    }

    public function store(StoreNesletterRequest $request)
    {
        $nesletter = Nesletter::create($request->all());

        return redirect()->route('admin.nesletters.index');
    }

    public function edit(Nesletter $nesletter)
    {
        abort_if(Gate::denies('nesletter_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nesletters.edit', compact('nesletter'));
    }

    public function update(UpdateNesletterRequest $request, Nesletter $nesletter)
    {
        $nesletter->update($request->all());

        return redirect()->route('admin.nesletters.index');
    }

    public function show(Nesletter $nesletter)
    {
        abort_if(Gate::denies('nesletter_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nesletters.show', compact('nesletter'));
    }

    public function destroy(Nesletter $nesletter)
    {
        abort_if(Gate::denies('nesletter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nesletter->delete();

        return back();
    }

    public function massDestroy(MassDestroyNesletterRequest $request)
    {
        $nesletters = Nesletter::find(request('ids'));

        foreach ($nesletters as $nesletter) {
            $nesletter->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
