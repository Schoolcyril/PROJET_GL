<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatieresController extends Controller
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
            $matieres = Matiere::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('code_matiere', 'LIKE', "%$keyword%")
                ->orWhere('nbre_heures', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $matieres = Matiere::latest()->paginate($perPage);
        }

        return view('admin.matieres.index', compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.matieres.create');
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
			'code_matiere' => 'required|max:10'
		]);
        $requestData = $request->all();
        
        Matiere::create($requestData);

        return redirect('admin/matieres')->with('flash_message', 'Matiere added!');
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
        $matiere = Matiere::findOrFail($id);

        return view('admin.matieres.show', compact('matiere'));
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
        $matiere = Matiere::findOrFail($id);

        return view('admin.matieres.edit', compact('matiere'));
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
			'nom' => 'required|max:10',
			'code_matiere' => 'required|max:10'
		]);
        $requestData = $request->all();
        
        $matiere = Matiere::findOrFail($id);
        $matiere->update($requestData);

        return redirect('admin/matieres')->with('flash_message', 'Matiere updated!');
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
        Matiere::destroy($id);

        return redirect('admin/matieres')->with('flash_message', 'Matiere deleted!');
    }
}
