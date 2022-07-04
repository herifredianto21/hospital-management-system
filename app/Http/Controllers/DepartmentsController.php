<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Http\Requests\StoreDepartmentsRequest;
use App\Http\Requests\UpdateDepartmentsRequest;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartmentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function show(Departments $departments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function edit(Departments $departments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartmentsRequest  $request
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentsRequest $request, Departments $departments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departments $departments)
    {
        //
    }
}
