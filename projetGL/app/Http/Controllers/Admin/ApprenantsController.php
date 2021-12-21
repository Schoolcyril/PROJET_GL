<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantsController extends Controller
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
            $apprenants = Apprenant::where('nom', 'LIKE', "%$keyword%")
                ->orWhere('numero_tel', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('adresse', 'LIKE', "%$keyword%")
                ->orWhere('matricule', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $apprenants = Apprenant::latest()->paginate($perPage);
        }

        return view('admin.apprenants.index', compact('apprenants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.apprenants.create');
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
			'nom' => 'required'
		]);
        $requestData = $request->all();

        Apprenant::create($requestData);

        return redirect('admin/apprenants')->with('flash_message', 'Apprenant added!');
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
        $apprenant = Apprenant::findOrFail($id);

        return view('admin.apprenants.show', compact('apprenant'));
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
        $apprenant = Apprenant::findOrFail($id);

        return view('admin.apprenants.edit', compact('apprenant'));
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
			'nom' => 'required'
		]);
        $requestData = $request->all();

        $apprenant = Apprenant::findOrFail($id);
        $apprenant->update($requestData);

        return redirect('admin/apprenants')->with('flash_message', 'Apprenant updated!');
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
        Apprenant::destroy($id);

        return redirect('admin/apprenants')->with('flash_message', 'Apprenant deleted!');
    }
}
