<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\pasillo;
use Illuminate\Http\Request;

class pasilloController extends Controller
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
            $pasillo = pasillo::where('numero_pasillo', 'LIKE', "%$keyword%")
                ->orWhere('letra_pasillo', 'LIKE', "%$keyword%")
                ->orWhere('fk_pasillo_almacen', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $pasillo = pasillo:: paginate($perPage);
        }

        return view('pasillo.index', compact('pasillo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pasillo.create');
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
        
        $requestData = $request->all();
        
        pasillo::create($requestData);

        return redirect('pasillo')->with('flash_message', 'pasillo added!');
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
        $pasillo = pasillo::findOrFail($id);

        return view('pasillo.show', compact('pasillo'));
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
        $pasillo = pasillo::findOrFail($id);

        return view('pasillo.edit', compact('pasillo'));
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
        
        $requestData = $request->all();
        
        $pasillo = pasillo::findOrFail($id);
        $pasillo->update($requestData);

        return redirect('pasillo')->with('flash_message', 'pasillo updated!');
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
        pasillo::destroy($id);

        return redirect('pasillo')->with('flash_message', 'pasillo deleted!');
    }
}
