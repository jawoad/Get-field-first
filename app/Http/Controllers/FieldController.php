<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = Field::paginate(10);
        return view('Field.index', compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Field.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'=>'required|after_or_equal:today',
            'start_time'=>'required',
            'end_time'=>'required',
            'note'=>'required|string|min:5|max:255',
        ]);

        $field = new Field();
        $field->user_id = auth()->user()->id;
        $field->date = $request->date;
        $field->start_time = $request->start_time;
        $field->end_time = $request->end_time;
        $field->note = $request->note;
        $field->save();

        return redirect()->route('field.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function show(Field $field)
    {
        return view('Field.show', compact('field'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Field $field)
    {
        return view('Field.edit', compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Field $field)
    {
        $request->validate([
            'date'=>'required|after_or_equal:today',
            'start_time'=>'required',
            'end_time'=>'required',
            'note'=>'required|string|min:5|max:255',
        ]);

        $field->date = $request->date;
        $field->start_time = $request->start_time;
        $field->end_time = $request->end_time;
        $field->note = $request->note;
        $field->save();

        return redirect()->route('field.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy(Field $field)
    {
        $field->delete();

        return redirect()->route('field.index');
    }
}
