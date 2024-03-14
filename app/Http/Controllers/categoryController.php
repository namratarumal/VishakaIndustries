<?php

namespace App\Http\Controllers;

use App\Models\category_tbl;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category_tbl::get();
        return view('dashboard/category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['image', 'mimes:jpeg,jpg,gif,webp,svg,png'],
            'name' => 'required',
            'status' => 'required', 
        ]);
        $image = $request->file('image')->getClientOriginalName();
        $data = new category_tbl([
            'category_name' => $request->get('name'),
            'category_image' => $image,
            'category_status' => $request->get('status'),
        ]);
        $data->save();
        $request->file('image')->move('images/category', $image);
        $msg = $request->get('name');
        return back()->with('add', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $update = category_tbl::find($id);
        return response()->json($update);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $update = category_tbl::find($id);
        // return response()->json($update);
        // return view('dashboard/category', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['image', 'mimes:jpeg,jpg,gif,webp,svg,png'],
        ]);
        if ($request->file('image')) {
            $image = $request->file('image')->getClientOriginalName();
            $data = category_tbl::find($id);
            $data->category_name = $request->get('name');
            $data->category_image = $image;
            $data->category_status = $request->get('status');
            $data->update();
            $request->file('image')->move('images/category', $image);
        } else {
            $data = category_tbl::find($id);
            $data->category_name = $request->get('name');
            $data->category_status = $request->get('status');
            $data->update();
        }
        $msg = $request->get('name');
        return back()->with('updated', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = category_tbl::find($id);
        $check = category_tbl::where([
            ['id', '=', $id]
        ])->first();
        $msg = $check->category_name;
        $data->delete();
        return back()->with('delete', $msg);
    }
}
