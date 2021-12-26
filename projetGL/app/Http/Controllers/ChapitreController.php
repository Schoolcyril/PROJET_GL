<?php

namespace App\Http\Controllers;

use App\Models\Chapitre;
use App\Models\Matiere;
use Illuminate\Http\Request;

class ChapitreController extends Controller
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
            $chapitres = Chapitre::where('titre', 'LIKE', "%$keyword%")
                ->orWhere('resumé', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $chapitres = Chapitre::latest()->paginate($perPage);
        }

        return view('admin.chapitres.index', compact('chapitres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Chapitres.create');
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
			'titre' => 'required',
			'resumé' => 'required',
            'matiere_nom'=>'required'

		]);

        $matiere = Matiere::where('nom',$request->matiere_nom)->firstOrFail();

        Chapitre::create([
            'titre' =>$request->titre,
			'resumé' => $request->resumé,
            'matiere_id'=>$matiere->id
        ]);

        return redirect('admin/chapitres')->with('flash_message', 'Chapitre ajouté');
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
        $chapitre = Chapitre::findOrFail($id);

        return view('admin.chapitres.show', compact('chapitre'));
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
        $chapitre = Chapitre::findOrFail($id);
        return view('admin.chapitres.edit', compact('chapitre'));
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
			'titre' => 'required',
			'resumé' => 'required',
            'matiere_nom'=>'required'

					]);
        $matiere = Matiere::where('nom',$request->matiere_nom)->firstOrFail();
        $requestData = [
            'titre' =>$request->titre,
			'resumé' => $request->resumé,
            'matiere_id'=>$matiere->id
        ];
        $chapitre = chapitre::findOrFail($id);
        $chapitre->update($requestData);

        return redirect('admin/chapitres')->with('flash_message', 'chapitre updated!');
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
        Chapitre::destroy($id);

        return redirect('admin/chapitres')->with('flash_message', 'chapitre deleted!');
    }
}
