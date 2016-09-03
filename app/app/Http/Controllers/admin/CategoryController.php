<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\createCategoryRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::orderBy('id','desc')->get();
        return view('admin.category.index',compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createCategoryRequest $request)
    {
        try {
            Category::create($request->all());
            return redirect('admin/categories')->with('message','Registro creado correctamente.');
        } catch (Exception $e) {
            return redirect('admin/categories')->with("error", "No se pudo realizar la acción.");
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataEdit=Category::find($id);

        if(empty($dataEdit))
            abort(404);


          return view('admin.category.edit',compact('dataEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $local=Category::findOrFail($id);
            $local->update($request->all());
            return redirect ('admin/categories')->with('message','Registro actualizado correctamente.');

        } catch (Exception $e) {

            return redirect('admin/categories')->with("error", "No se pudo realizar la acción.");

        }

    }

    public function showDelete($id)
    {
        if ( Category::where('id', $id)->count() != 0 )
             return view('admin.category.delete')->with('id', $id);
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
              Category::findOrFail($id)->delete();
              return redirect('admin/categories')->with('message','Registro eliminado correctamente.');

        } catch (Exception $e) {
              return redirect('admin/categories')->with("error", "No se pudo realizar la acción.");


        }
    }
}
