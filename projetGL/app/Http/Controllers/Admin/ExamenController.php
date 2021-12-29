<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Enseignant;
use App\Models\Examen;
use App\Models\Formation;
use App\Models\Matiere;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class examenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $examens = Examen::where('date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $examens = Examen::latest()->paginate($perPage);
        }

        return view('admin.examen.index', compact('examens'));

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
        $this->validate($request, [
			'date' => 'required',
			'matiere_id' => 'required',
            'formation_id'=>'required'
		]);
      $form=Formation::findOrFail($request->formation_id);
      foreach ($form->matieres as $matiere) {
          if($matiere->id==$request->matiere_id){
          $requestData = $request->all();
          Examen::create($requestData);
          return redirect('admin/examen')->with('flash_message', 'Examen added!');
      }
    }

      return redirect('admin/examen/create')->with('flash_message', 'Examen failed!');

    }

    /**:
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
      $examen = Examen::findOrFail($id);

        return view('admin.examen.show', compact('examen'));
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
        $matieres=Matiere::all();
        $formations=Formation::all();
        return view('admin.examen.edit', compact('examen','matieres','formations'));
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
			'matiere_id' => 'required',
            'formation_id'=>'required'
		]);
            $form=Formation::findOrFail($request->formation_id);
            foreach ($form->matieres as $matiere){
                if($matiere->id==$request->matiere_id){
                $requestData = $request->all();
                $examen = Examen::findOrFail($id);
                $examen->update($requestData);
                return redirect('admin/examen')->with('flash_message', 'Examen added!');
            }
          }

        return redirect('admin/examen/')->with('flash_message', 'Examen Refused!');
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
