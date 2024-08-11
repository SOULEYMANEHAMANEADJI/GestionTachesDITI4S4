<?php

namespace App\Http\Controllers;

use App\Models\Tach;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TachRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $taches = Tach::paginate();

        return view('tache.index', compact('taches'))
            ->with('i', ($request->input('page', 1) - 1) * $taches->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tach = new Tach();

        return view('tache.create', compact('tach'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TachRequest $request): RedirectResponse
    {
        Tach::create($request->validated());

        return Redirect::route('tache.index')
            ->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tach = Tach::find($id);

        return view('tache.show', compact('tach'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tach = Tach::find($id);

        return view('tache.edit', compact('tach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TachRequest $request, Tach $tach): RedirectResponse
    {
        $tach->update($request->validated());

        return Redirect::route('tache.index')
            ->with('success', 'Task updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Tach::find($id)->delete();

        return Redirect::route('tache.index')
            ->with('success', 'Task deleted successfully');
    }
}
