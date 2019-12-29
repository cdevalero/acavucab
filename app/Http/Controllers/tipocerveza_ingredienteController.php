<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\tipocerveza_ingrediente;
use Illuminate\Http\Request;

class tipocerveza_ingredienteController extends Controller
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
            $tipocerveza_ingrediente = tipocerveza_ingrediente::where('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('peso', 'LIKE', "%$keyword%")
                ->orWhere('tiempo_agregar', 'LIKE', "%$keyword%")
                ->orWhere('fk_ti_tipocerveza', 'LIKE', "%$keyword%")
                ->orWhere('fk_ti_ingrediente', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $tipocerveza_ingrediente = tipocerveza_ingrediente:: paginate($perPage);
        }

        return view('tipocerveza_ingrediente.index', compact('tipocerveza_ingrediente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tipocerveza_ingrediente.create');
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
        
        tipocerveza_ingrediente::create($requestData);

        return redirect('tipocerveza_ingrediente')->with('flash_message', 'tipocerveza_ingrediente added!');
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
        $tipocerveza_ingrediente = tipocerveza_ingrediente::findOrFail($id);

        return view('tipocerveza_ingrediente.show', compact('tipocerveza_ingrediente'));
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
        $tipocerveza_ingrediente = tipocerveza_ingrediente::findOrFail($id);

        return view('tipocerveza_ingrediente.edit', compact('tipocerveza_ingrediente'));
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
        
        $tipocerveza_ingrediente = tipocerveza_ingrediente::findOrFail($id);
        $tipocerveza_ingrediente->update($requestData);

        return redirect('tipocerveza_ingrediente')->with('flash_message', 'tipocerveza_ingrediente updated!');
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
        tipocerveza_ingrediente::destroy($id);

        return redirect('tipocerveza_ingrediente')->with('flash_message', 'tipocerveza_ingrediente deleted!');
    }
}
