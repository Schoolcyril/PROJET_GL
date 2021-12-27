<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Examen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Examen::select('examens.examen','examens.id as id','enseignants.nom as nom')
            ->join('enseignants','examens.enseignant_id','=','enseignants.id')
            ->get();
        return view('admin\Examen\index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $ens=Enseignant::all();
        return view('admin\Examen\create',compact('ens'));
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
        Examen::create($data);
        return redirect('admin\examen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data=Examen::select('enseignants.nom as nom','examens.created_at as created_at',
        'examens.examen as examen','examens.id as id' )->
        join('enseignants','enseignants.id','=','examens.enseignant_id')->where('examens.id',$id)->get();

       return view('admin\Examen\show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $examen=Examen::findOrFail($id);
         $enseignant=Enseignant::all();
        return view('admin\Examen\edit',compact('examen','enseignant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $examen=Examen::findOrFail($id);
        $data=$request->all();
        $examen->update($data);
        return     redirect('admin/examen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $examen=Examen::findOrFail($id);
    $examen->destroy($id);
    return Redirect('admin\examen');
}
}
