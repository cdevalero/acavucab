<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\clientejuridico;
use Illuminate\Http\Request;

class clientejuridicoController extends Controller
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
            $clientejuridico = clientejuridico::where('rif', 'LIKE', "%$keyword%")
                ->orWhere('denominacion_comercial', 'LIKE', "%$keyword%")
                ->orWhere('razon_social', 'LIKE', "%$keyword%")
                ->orWhere('numero_carnet', 'LIKE', "%$keyword%")
                ->orWhere('capital_disponible', 'LIKE', "%$keyword%")
                ->orWhere('fk_clientejuridicofisico_lugar', 'LIKE', "%$keyword%")
                ->orWhere('fk_clientejuridicofiscal_lugar', 'LIKE', "%$keyword%")
                ->orWhere('fk_clientejuridico_usuario', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $clientejuridico = clientejuridico::paginate($perPage);
        }

        return view('clientejuridico.index', compact('clientejuridico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('clientejuridico.create');
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
        
        clientejuridico::create($requestData);

        return redirect('clientejuridico')->with('flash_message', 'clientejuridico added!');
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
        $clientejuridico = clientejuridico::findOrFail($id);

        return view('clientejuridico.show', compact('clientejuridico'));
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
        $clientejuridico = clientejuridico::findOrFail($id);

        return view('clientejuridico.edit', compact('clientejuridico'));
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
        
        $clientejuridico = clientejuridico::findOrFail($id);
        $clientejuridico->update($requestData);

        return redirect('clientejuridico')->with('flash_message', 'clientejuridico updated!');
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
        clientejuridico::destroy($id);

        return redirect('clientejuridico')->with('flash_message', 'clientejuridico deleted!');
    }
}
