<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\tarjetacredito;
use Illuminate\Http\Request;

class tarjetacreditoController extends Controller
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
            $tarjetacredito = tarjetacredito::where('numero_tarjetacredito', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->orWhere('fk_tarjetacredito_banco', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $tarjetacredito = tarjetacredito:: paginate($perPage);
        }

        return view('tarjetacredito.index', compact('tarjetacredito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tarjetacredito.create');
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
        
        tarjetacredito::create($requestData);

        return redirect('tarjetacredito')->with('flash_message', 'tarjetacredito added!');
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
        $tarjetacredito = tarjetacredito::findOrFail($id);

        return view('tarjetacredito.show', compact('tarjetacredito'));
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
        $tarjetacredito = tarjetacredito::findOrFail($id);

        return view('tarjetacredito.edit', compact('tarjetacredito'));
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
        
        $tarjetacredito = tarjetacredito::findOrFail($id);
        $tarjetacredito->update($requestData);

        return redirect('tarjetacredito')->with('flash_message', 'tarjetacredito updated!');
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
        tarjetacredito::destroy($id);

        return redirect('tarjetacredito')->with('flash_message', 'tarjetacredito deleted!');
    }
}
