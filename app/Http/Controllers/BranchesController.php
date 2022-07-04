<?php

namespace App\Http\Controllers;

use App\Models\Branches;
use App\Http\Requests\StoreBranchesRequest;
use App\Http\Requests\UpdateBranchesRequest;

class BranchesController extends Controller
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
     * @param  \App\Http\Requests\StoreBranchesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBranchesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function show(Branches $branches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function edit(Branches $branches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBranchesRequest  $request
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBranchesRequest $request, Branches $branches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branches $branches)
    {
        //
    }
}
