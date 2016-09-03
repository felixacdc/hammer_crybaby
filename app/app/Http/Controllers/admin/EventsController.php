<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;

use App\Models\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        try {
            Event::create($request->all());
            return redirect('admin/events')->with("message", "Registro creado correctamente.");

        } catch (\Exception $e) {
            return redirect('admin/events')->with("error", "No se pudo realizar la acción.");
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
        $dataEdit = Event::find($id);

        if( empty($dataEdit) )
            abort(404);

        return view('admin.event.edit', compact('dataEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        try {

            $data = Event::findOrFail($id);
            $data->fill($request->all());
            $data->save();

            return redirect('admin/events')->with("message", "Registro actualizado correctamente.");

        } catch (\Exception $e) {

            return redirect('admin/events')->with("error", "No se pudo realizar la acción.");

        }
    }

    public function showDelete($id)
    {
        if ( Event::where('id', "=", $id)->count() != 0 )
            return view('admin.event.delete')->with('id', $id);
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
            Event::findOrFail($id)->delete();
            return redirect('admin/events')->with("message", "Registro eliminado correctamente.");
        } catch (\Exception $e) {
            return redirect('admin/events')->with("error", "No se pudo realizar la acción.");
        }
    }
}
