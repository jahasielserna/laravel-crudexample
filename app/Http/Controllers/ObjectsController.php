<?php

namespace App\Http\Controllers;

use App\Models\TestObject;
use Illuminate\Http\Request;

class ObjectsController
{
    public function get() {

        $objects = TestObject::get();

        return view('objects', ['objects' => $objects]);
    }

    public function create(Request $request) {
        $object = new TestObject();
        $object->name = $request->input('name');
        $object->description = $request->input('description');
        $object->save();

        return to_route('objects');
    }

    public function update(Request $request, TestObject $object) {
        $object->name = $request->input('name');
        $object->description = $request->input('description');
        $object->save();
        
        return to_route('objects');
    }

    public function edit(TestObject $object) {
        return view('edit', ['object' => $object]);
    }
}
