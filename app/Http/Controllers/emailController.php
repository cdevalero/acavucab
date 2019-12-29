<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\email;
use Illuminate\Http\Request;

class emailController extends Controller
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
            $email = email::where('direccion', 'LIKE', "%$keyword%")
                ->orWhere('fk_email_proveedor', 'LIKE', "%$keyword%")
                ->orWhere('fk_email_clientejuridico', 'LIKE', "%$keyword%")
                ->orWhere('fk_email_clientenatural', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $email = email:: paginate($perPage);
        }

        return view('email.index', compact('email'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('email.create');
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
        
        email::create($requestData);

        return redirect('email')->with('flash_message', 'email added!');
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
        $email = email::findOrFail($id);

        return view('email.show', compact('email'));
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
        $email = email::findOrFail($id);

        return view('email.edit', compact('email'));
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
        
        $email = email::findOrFail($id);
        $email->update($requestData);

        return redirect('email')->with('flash_message', 'email updated!');
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
        email::destroy($id);

        return redirect('email')->with('flash_message', 'email deleted!');
    }
}
