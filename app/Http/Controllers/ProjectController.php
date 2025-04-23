<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // SEO Get Data
    public function index()
    {
        return view('pages.projects.index');
    }
    public function create()
    {
        return view('pages.projects.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
    public function show($id) {}
    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}
