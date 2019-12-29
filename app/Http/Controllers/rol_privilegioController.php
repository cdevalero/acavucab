<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\rol_privilegio;
use Illuminate\Http\Request;

class rol_privilegioController extends Controller
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
            $rol_privilegio = rol_privilegio::where('fk_rp_rol', 'LIKE', "%$keyword%")
                ->orWhere('fk_rp_privilegio', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $rol_privilegio = rol_privilegio:: paginate($perPage);
        }

        return view('rol_privilegio.index', compact('rol_privilegio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('rol_privilegio.create');
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
        
        rol_privilegio::create($requestData);

        return redirect('rol_privilegio')->with('flash_message', 'rol_privilegio added!');
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
        $rol_privilegio = rol_privilegio::findOrFail($id);

        return view('rol_privilegio.show', compact('rol_privilegio'));
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
        $rol_privilegio = rol_privilegio::findOrFail($id);

        return view('rol_privilegio.edit', compact('rol_privilegio'));
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
        
        $rol_privilegio = rol_privilegio::findOrFail($id);
        $rol_privilegio->update($requestData);

        return redirect('rol_privilegio')->with('flash_message', 'rol_privilegio updated!');
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
        rol_privilegio::destroy($id);

        return redirect('rol_privilegio')->with('flash_message', 'rol_privilegio deleted!');
    }
}
