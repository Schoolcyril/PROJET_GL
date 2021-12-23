<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Diplome::latest()->get();
        return view('admin.diplome.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apprenant = Apprenant::all();
        return view('admin.diplome.create',compact('apprenant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Diplome::create($data);
        return redirect('admin/diplome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diplome  $diplome
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diplome= Diplome::findOrfail($id);
        return view('admin.diplome.show',compact('diplome'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diplome  $diplome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apprenant = Apprenant::all();
        $diplome = Diplome::findOrFail($id);
        return view('admin.diplome.create',compact('apprenant','diplome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diplome  $diplome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $diplome = Diplome::findOrFail($id);
        $data=$request->all();
        $diplome->update($data);
        return redirect('admin/diplome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diplome  $diplome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diplome= Diplome::findOrfail($id);
        $diplome->destroy($id);
        return redirect('admin/diplome');

    }
}
