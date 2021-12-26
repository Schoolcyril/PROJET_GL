<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Enseignant;
use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnseignantsController extends Controller
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
            $enseignants = Enseignant::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('numero_tel', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('adresse', 'LIKE', "%$keyword%")
                ->orWhere('domaine', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $enseignants = Enseignant::latest()->paginate($perPage);
        }

        return view('admin.enseignants.index', compact('enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $matiere = Matiere::all();
        return view('admin.enseignants.create',compact('matiere'));
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
			'nom' => 'required|max:10',
			'email' => 'required'
		]);
        $requestData = $request->only('nom', 'numero_tel', 'email', 'adresse', 'domaine');
        $enseignant = Enseignant::create($requestData);
            for ($i=0; $i < count($request->matiere_id); $i++) {
                DB::table('enseignant_matieres')->insert([
                    'enseignant_id'=> $enseignant->id,
                    'matiere_id'=> $request->matiere_id[$i]
                ]);
            }
        return redirect('admin/enseignants')->with('flash_message', 'Enseignant added!');
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
        $enseignant = Enseignant::findOrFail($id);

        return view('admin.enseignants.show', compact('enseignant'));
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
        $enseignant = Enseignant::findOrFail($id);
        $matiere = Matiere::all();

        return view('admin.enseignants.edit', compact('enseignant','matiere'));
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
			'nom' => 'required',
			'email' => 'required'
		]);
        $requestData = $request->all();

        $enseignant = Enseignant::findOrFail($id);
        $enseignant->update($requestData);

        return redirect('admin/enseignants')->with('flash_message', 'Enseignant updated!');
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
        Enseignant::destroy($id);

        return redirect('admin/enseignants')->with('flash_message', 'Enseignant deleted!');
    }
}
