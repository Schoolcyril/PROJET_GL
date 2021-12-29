<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Enseignant;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Models\Matiere;
use Illuminate\Support\Facades\DB;
class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $formations = Formation::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('numero_tel', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('adresse', 'LIKE', "%$keyword%")
                ->orWhere('domaine', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formations = Formation::latest()->paginate($perPage);
        }

        return view('admin.formation.index', compact('formations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matieres = Matiere::all();
        $enseignants =Enseignant::all();
        $categories = Category::all();
        return view('admin.formation.create',compact('matieres','categories','enseignants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'code_for' => 'required|max:10',
			'nom_for' => 'required|max:10',
            'date_debut'=>'required',
            'date_fin'=>'required',
            'category_id'=>'required',
		]);
        $requestData = $request->only('code_for', 'nom_for', 'date_debut', 'date_fin','category_id');

        $formation = Formation::create($requestData);
        if($request->matiere_id!=""){
            for ($i=0; $i < count($request->matiere_id); $i++) {
                DB::table('formation_matiere')->insert([
                    'formation_id'=> $formation->id,
                    'matiere_id'=> $request->matiere_id[$i]
                ]);
            }
        }
        if($request->enseignant_id!=""){
            for ($i=0; $i < count($request->enseignant_id); $i++) {
                DB::table('enseignant_formation')->insert([
                    'enseignant_id'=> $request->enseignant_id[$i],
                    'formation_id'=> $formation->id,
                ]);
            }
        }
        return redirect('admin/formation')->with('flash_message', 'Formation added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formation = Formation::findOrFail($id);

        return view('admin.formation.show', compact('formation'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation = Formation::findOrFail($id);

        $matieres = Matiere::all();
        $categories = Category::all();
        $enseignants =Enseignant::all();
        return view('admin.formation.edit', compact('formation','matieres','categories','enseignants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'code_for' => 'required|max:10',
			'nom_for' => 'required|max:10',
            'date_debut'=>'required',
            'date_fin'=>'required'
		]);
        $requestData = $request->all();
        $formation = Formation::findOrFail($id);
        $formation->update($requestData);

        if($request->matiere_id!=""){
            DB::table('formation_matiere')->where([['formation_id','=',$id]])->delete();
                for ($i=0; $i < count($request->matiere_id); $i++) {
                    DB::table('formation_matiere')->insert([
                        'formation_id'=> $formation->id,
                        'matiere_id'=> $request->matiere_id[$i]
                    ]);
                }
        }
        if($request->enseignant_id!=""){
            DB::table('enseignant_formation')->where([['formation_id','=',$id]])->delete();
                for ($i=0; $i < count($request->matiere_id); $i++) {
                    DB::table('enseignant_formation')->insert([
                        'enseignant_id'=> $request->enseignant_id[$i],
                        'formation_id'=> $formation->id
                    ]);
                }
    }
        return redirect('admin/formation')->with('flash_message', 'Formation updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Formation::destroy($id);

        return redirect('admin/formation')->with('flash_message', 'Enseignant deleted!');
    }
}
