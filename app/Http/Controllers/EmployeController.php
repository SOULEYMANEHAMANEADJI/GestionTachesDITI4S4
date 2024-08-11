<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $employes = Employe::paginate();

        return view('employe.index', compact('employes'))
            ->with('i', ($request->input('page', 1) - 1) * $employes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $employe = new Employe();

        return view('employe.create', compact('employe'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeRequest $request): RedirectResponse
    {
        Employe::create($request->validated());

        return Redirect::route('employe.index')
            ->with('success', 'Employe created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $employe = Employe::find($id);

        return view('employe.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $employe = Employe::find($id);

        return view('employe.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeRequest $request, Employe $employe): RedirectResponse
    {
        $employe->update($request->validated());

        return Redirect::route('employe.index')
            ->with('success', 'Employe updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Employe::find($id)->delete();

        return Redirect::route('employe.index')
            ->with('success', 'Employe deleted successfully');
    }
}
