<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\personacontacto;
use Illuminate\Http\Request;

class personacontactoController extends Controller
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
            $personacontacto = personacontacto::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellido', 'LIKE', "%$keyword%")
                ->orWhere('fk_personacontacto_clientejuridico', 'LIKE', "%$keyword%")
                ->orWhere('fk_personacontacto_proveedor', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $personacontacto = personacontacto:: paginate($perPage);
        }

        return view('personacontacto.index', compact('personacontacto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('personacontacto.create');
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
        
        personacontacto::create($requestData);

        return redirect('personacontacto')->with('flash_message', 'personacontacto added!');
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
        $personacontacto = personacontacto::findOrFail($id);

        return view('personacontacto.show', compact('personacontacto'));
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
        $personacontacto = personacontacto::findOrFail($id);

        return view('personacontacto.edit', compact('personacontacto'));
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
        
        $personacontacto = personacontacto::findOrFail($id);
        $personacontacto->update($requestData);

        return redirect('personacontacto')->with('flash_message', 'personacontacto updated!');
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
        personacontacto::destroy($id);

        return redirect('personacontacto')->with('flash_message', 'personacontacto deleted!');
    }
}
