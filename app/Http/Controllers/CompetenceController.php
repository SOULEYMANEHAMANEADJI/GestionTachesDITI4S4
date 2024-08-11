<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CompetenceRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $competences = Competence::paginate();

        return view('competence.index', compact('competences'))
            ->with('i', ($request->input('page', 1) - 1) * $competences->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $competence = new Competence();

        return view('competence.create', compact('competence'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompetenceRequest $request): RedirectResponse
    {
        Competence::create($request->validated());

        return Redirect::route('competence.index')
            ->with('success', 'Competence created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $competence = Competence::find($id);

        return view('competence.show', compact('competence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $competence = Competence::find($id);

        return view('competence.edit', compact('competence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompetenceRequest $request, Competence $competence): RedirectResponse
    {
        $competence->update($request->validated());

        return Redirect::route('competence.index')
            ->with('success', 'Competence updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Competence::find($id)->delete();

        return Redirect::route('competence.index')
            ->with('success', 'Competence deleted successfully');
    }
}
