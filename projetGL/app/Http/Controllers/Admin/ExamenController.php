<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Enseignant;
use App\Models\Examen;
use App\Models\Formation;
use App\Models\Matiere;
use Illuminate\Http\Request;

class examenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $examen=Examen::all();
        return view('admin.examen.index', compact('examen'));
    }

    /**
     * Show the form for creating a new resource.

     * @return \Illuminate\View\View
     */
    public function create()
    {   $matieres=Matiere::all();
        $formations=Formation::all();
        return view('admin.examen.create',compact('matieres','formations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
      $form=Formation::findOrFail($request->formation_id);
    

      return redirect('admin/examen/create')->with('flash_message', 'Examen failed!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $exam=Examen::select('enseignants.nom as nom','enseignants.id as id','examens.date',
        'examens.Heure_deb','examens.Heure_fin','examens.id')->
        join('enseignants','enseignants.id','=','examens.enseignant_id')->where('examens.id',$id)->get();


        return view('admin.examen.show', compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $examen = Examen::findOrFail($id);
        $ens=Examen::select('enseignants.nom as nom','enseignants.id as id')->
        join('enseignants','enseignants.id','=','examens.enseignant_id')->get();
        return view('admin.examen.edit', compact('examen','ens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'date' => 'required',
			'Heure_deb' => 'required',
			'Heure_fin' => 'required',
            'enseignant_id'=>'required'
					]);
        $requestData = $request->all();
        $examen = Examen::findOrFail($id);
        $examen->update($requestData);
        return redirect('admin/examen')->with('flash_message', 'Examen updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $Examen = Examen::findOrFail($id);
        Examen::destroy($id);

        return redirect('admin/examen')->with('flash_message', 'Examen deleted!');
    }
}
