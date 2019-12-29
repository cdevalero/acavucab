<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\anaquel;
use Illuminate\Http\Request;

class anaquelController extends Controller
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
            $anaquel = anaquel::where('producto_disponible', 'LIKE', "%$keyword%")
                ->orWhere('fk_anaquel_pasillo', 'LIKE', "%$keyword%")
                ->orWhere('fk_anaquel_empleado', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $anaquel = anaquel:: paginate($perPage);
        }

        return view('anaquel.index', compact('anaquel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('anaquel.create');
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
        
        anaquel::create($requestData);

        return redirect('anaquel')->with('flash_message', 'anaquel added!');
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
        $anaquel = anaquel::findOrFail($id);

        return view('anaquel.show', compact('anaquel'));
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
        $anaquel = anaquel::findOrFail($id);

        return view('anaquel.edit', compact('anaquel'));
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
        
        $anaquel = anaquel::findOrFail($id);
        $anaquel->update($requestData);

        return redirect('anaquel')->with('flash_message', 'anaquel updated!');
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
        anaquel::destroy($id);

        return redirect('anaquel')->with('flash_message', 'anaquel deleted!');
    }
}
