<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\createLocalRequest;
use App\Http\Requests\editLocalRequest;

use App\Models\Local;
use App\Models\Category;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals=Local::orderBy('id','desc')->get();
        return view('admin.local.index', compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->fillCombo(Category::all(), 'description');
        return view('admin.local.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createLocalRequest $request)
    {
        try {
            Local::create($request->all());
            return redirect('admin/locals')->with('message','Registro creado correctamente.');
        } catch (Exception $e) {
            return redirect('admin/locals')->with("error", "No se pudo realizar la acción.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataShow=Local::find($id);
        return view('admin.local.show',compact('dataShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataEdit=Local::find($id);

        if(empty($dataEdit))
            abort(404);


          return view('admin.local.edit',compact('dataEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(editLocalRequest $request, $id)
    {
        try {

            $local=Local::findOrFail($id);
            $local->update($request->all());
            return redirect ('admin/locals')->with('message','Registro actualizado correctamente.');

        } catch (Exception $e) {

            return redirect('admin/locals')->with("error", "No se pudo realizar la acción.");

        }
    }

    public function showDelete($id)
    {
        if ( Local::where('id', $id)->count() != 0 )
             return view('admin.local.delete')->with('id', $id);
         else
             abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
              Local::findOrFail($id)->delete();
              return redirect('admin/locals')->with('message','Registro eliminado correctamente.');

        } catch (Exception $e) {
              return redirect('admin/locals')->with("error", "No se pudo realizar la acción.");


        }
    }

    private function fillCombo($data, $field)
    {
        $dataCombo = ['' => 'Seleccione una opción'];

        foreach ($data as $value) {
            $dataCombo[$value->id] = $value->$field;
        }

        return $dataCombo;
    }
}
