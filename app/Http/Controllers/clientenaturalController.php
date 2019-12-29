<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\clientenatural;
use Illuminate\Http\Request;

class clientenaturalController extends Controller
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
            $clientenatural = clientenatural::where('rif', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellido', 'LIKE', "%$keyword%")
                ->orWhere('cedula', 'LIKE', "%$keyword%")
                ->orWhere('numero_carnet', 'LIKE', "%$keyword%")
                ->orWhere('fk_clientenatural_lugar', 'LIKE', "%$keyword%")
                ->orWhere('fk_clientenatural_usuario', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $clientenatural = clientenatural::paginate($perPage);
        }

        return view('clientenatural.index', compact('clientenatural'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('clientenatural.create');
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
        
        clientenatural::create($requestData);

        return redirect('clientenatural')->with('flash_message', 'clientenatural added!');
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
        $clientenatural = clientenatural::findOrFail($id);

        return view('clientenatural.show', compact('clientenatural'));
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
        $clientenatural = clientenatural::findOrFail($id);

        return view('clientenatural.edit', compact('clientenatural'));
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
        
        $clientenatural = clientenatural::findOrFail($id);
        $clientenatural->update($requestData);

        return redirect('clientenatural')->with('flash_message', 'clientenatural updated!');
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
        clientenatural::destroy($id);

        return redirect('clientenatural')->with('flash_message', 'clientenatural deleted!');
    }
}
