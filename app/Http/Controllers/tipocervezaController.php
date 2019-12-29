<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\tipocerveza;
use Illuminate\Http\Request;

class tipocervezaController extends Controller
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
            $tipocerveza = tipocerveza::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $tipocerveza = tipocerveza:: paginate($perPage);
        }

        return view('tipocerveza.index', compact('tipocerveza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tipocerveza.create');
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
        
        tipocerveza::create($requestData);

        return redirect('tipocerveza')->with('flash_message', 'tipocerveza added!');
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
        $tipocerveza = tipocerveza::findOrFail($id);

        return view('tipocerveza.show', compact('tipocerveza'));
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
        $tipocerveza = tipocerveza::findOrFail($id);

        return view('tipocerveza.edit', compact('tipocerveza'));
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
        
        $tipocerveza = tipocerveza::findOrFail($id);
        $tipocerveza->update($requestData);

        return redirect('tipocerveza')->with('flash_message', 'tipocerveza updated!');
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
        tipocerveza::destroy($id);

        return redirect('tipocerveza')->with('flash_message', 'tipocerveza deleted!');
    }
}
