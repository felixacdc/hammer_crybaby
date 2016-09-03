<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Local;
use App\Models\NewClass;

use App\Http\Requests\NewRequest;
use App\Http\Requests\NewsEditRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = Local::all();
        return view('admin.new.index', compact('locals'));
    }

    public function showNews($id)
    {
        $news = NewClass::where('id_local', $id)->get();
        return view('admin.new.show', compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request)
    {
        try {
            NewClass::create($request->all());
            return redirect('admin/news')->with("message", "Registro creado correctamente.");

        } catch (\Exception $e) {
            return redirect('admin/news')->with("error", "No se pudo realizar la acción.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = NewClass::find($id);
        return view('admin.new.edit', compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsEditRequest $request, $id)
    {
        try {

            $grade = NewClass::find($id);
            $grade->fill($request->all());
            $grade->save();

            return redirect('admin/news')->with("message", "Registro actualizado correctamente.");

        } catch (\Exception $e) {

            return redirect('admin/news')->with("error", "No se pudo realizar la acción.");

        }
    }

    public function showDelete($id)
    {
        if ( NewClass::where('id', "=", $id)->count() != 0 )
            return view('admin.new.delete')->with('id', $id);
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
            NewClass::findOrFail($id)->delete();
            return redirect('admin/news')->with("message", "Registro eliminado correctamente.");
        } catch (\Exception $e) {
            return redirect('admin/news')->with("error", "No se pudo realizar la acción.");
        }
    }
}
