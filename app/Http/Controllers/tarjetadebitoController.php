<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\tarjetadebito;
use Illuminate\Http\Request;

class tarjetadebitoController extends Controller
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
            $tarjetadebito = tarjetadebito::where('numero_tarjetadebito', 'LIKE', "%$keyword%")
                ->orWhere('fk_tarjetadebito_banco', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $tarjetadebito = tarjetadebito:: paginate($perPage);
        }

        return view('tarjetadebito.index', compact('tarjetadebito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tarjetadebito.create');
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
        
        tarjetadebito::create($requestData);

        return redirect('tarjetadebito')->with('flash_message', 'tarjetadebito added!');
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
        $tarjetadebito = tarjetadebito::findOrFail($id);

        return view('tarjetadebito.show', compact('tarjetadebito'));
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
        $tarjetadebito = tarjetadebito::findOrFail($id);

        return view('tarjetadebito.edit', compact('tarjetadebito'));
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
        
        $tarjetadebito = tarjetadebito::findOrFail($id);
        $tarjetadebito->update($requestData);

        return redirect('tarjetadebito')->with('flash_message', 'tarjetadebito updated!');
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
        tarjetadebito::destroy($id);

        return redirect('tarjetadebito')->with('flash_message', 'tarjetadebito deleted!');
    }
}
