<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\transferencium;
use Illuminate\Http\Request;

class transferenciaController extends Controller
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
            $transferencia = transferencium::where('numero_transferencia', 'LIKE', "%$keyword%")
                ->orWhere('fk_transferencia_banco', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $transferencia = transferencium:: paginate($perPage);
        }

        return view('transferencia.index', compact('transferencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('transferencia.create');
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
        
        transferencium::create($requestData);

        return redirect('transferencia')->with('flash_message', 'transferencium added!');
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
        $transferencium = transferencium::findOrFail($id);

        return view('transferencia.show', compact('transferencium'));
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
        $transferencium = transferencium::findOrFail($id);

        return view('transferencia.edit', compact('transferencium'));
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
        
        $transferencium = transferencium::findOrFail($id);
        $transferencium->update($requestData);

        return redirect('transferencia')->with('flash_message', 'transferencium updated!');
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
        transferencium::destroy($id);

        return redirect('transferencia')->with('flash_message', 'transferencium deleted!');
    }
}
