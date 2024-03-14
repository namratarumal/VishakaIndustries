<?php

namespace App\Http\Controllers;

use App\Models\category_tbl;
use App\Models\products_tbl;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products_tbl::get();
        $category = category_tbl::get();
        return view('dashboard/products', compact('products', 'category'));
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
        $image = $request->file('image')->getClientOriginalName();
        $data = new products_tbl([
            'category_id' => $request->get('cid'),
            'title' => $request->get('title'),
            'materials' => $request->get('materials'),
            'quality' => $request->get('quality'),
            'use' => $request->get('use'),
            'sizes' => $request->get('size'),
            'gms' => $request->get('gms'),
            'colors' => $request->get('color'),
            'product_image' => $image,
            'product_status' => $request->get('status'),
        ]);
        $data->save();
        $request->file('image')->move('images/products', $image);
        $msg = $request->get('title');
        return back()->with('add', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $update = products_tbl::find($id);
        return response()->json($update);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
            $data = products_tbl::find($id);
            $data->category_id = $request->get('cid');
            $data->title = $request->get('title');
            $data->materials = $request->get('materials');
            $data->quality = $request->get('quality');
            $data->use = $request->get('use');
            $data->sizes = $request->get('size');
            $data->gms = $request->get('gms');
            $data->colors = $request->get('color');
            $data->product_image = $image;
            $data->product_status = $request->get('status');
            $data->update();
            $request->file('image')->move('images/products', $image);
        } else {
            $data = products_tbl::find($id);
            $data->category_id = $request->get('cid');
            $data->title = $request->get('title');
            $data->materials = $request->get('materials');
            $data->quality = $request->get('quality');
            $data->use = $request->get('use');
            $data->sizes = $request->get('size');
            $data->gms = $request->get('gms');
            $data->colors = $request->get('color');
            $data->product_status = $request->get('status');
            $data->update();
        }
        $msg = $request->get('title');
        return back()->with('updated', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = products_tbl::find($id);
        $check = products_tbl::where([
            ['id', '=', $id]
        ])->first();
        $msg = $check->title;
        $data->delete();
        return back()->with('delete', $msg);
    }
}
