<?php

namespace App\Http\Controllers;

use App\Models\category_tbl;
use App\Models\contact_tbl;
use App\Models\enquiry_tbl;
use App\Models\feedback_tbl;
use App\Models\products_tbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontendController extends Controller
{
    function home()
    {
        $category = category_tbl::get();
        return view('frontend/index', compact('category'));
    }

    function aboutus()
    {
        $category = category_tbl::get();
        return view('frontend/aboutus', compact('category'));
    }

    function contact()
    {
        $category = category_tbl::get();
        return view('frontend/contact', compact('category'));
    }

    function contactPost(Request $req)
    {
        $req->validate([
            'number' => 'required|numeric|min:10',
            'email' => 'required|email',
            'name' => 'required',
        ]);
        $data = new contact_tbl([
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'mobile_no' => $req->get('number'),
            'address' => $req->get('address'),
            'message' => $req->get('msg'),
        ]);
        if($data->save())
        return back()->with('success', $data);
    }

    function feedback()
    {
        $category = category_tbl::get();
        return view('frontend/feedback', compact('category'));
    }

    function gallary()
    {
        //$category = category_tbl::get();
        $category = DB::table('category_tbls')->whereBetween('category_tbls.id',[1,3])->get();
        $product = DB::table('products_tbls')
            ->join('category_tbls', 'products_tbls.category_id', '=', 'category_tbls.id')
            ->select('*', 'products_tbls.id as pid', 'category_tbls.id as cid',)
            ->get();
        return view('frontend/gallary', compact('category', 'product'));
    }

    function feedbackPost(Request $req)
    {
        $req->validate([
            'number' => 'required|numeric|min:10',
            'email' => 'required|email',
            'name' => 'required',
        ]);
        $data = new feedback_tbl([
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'subject' => $req->get('subject'),
            'mobile_no' => $req->get('number'),
            'description' => $req->get('description'),
        ]);
        if($data->save())
        return back()->with('success', $data);
    }

    function enquiry()
    {
        $category = category_tbl::get();
        return view('frontend/enquiry', compact('category'));
    }

    function enquiryPost(Request $req)
    {
        $req->validate([
            'number' => 'required|numeric|min:10',
            'email' => 'required|email',
            'name' => 'required',
        ]);
        $data = new enquiry_tbl([
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'subject' => $req->get('subject'),
            'mobile_no' => $req->get('number'),
            'description' => $req->get('description'),
        ]);
        if($data->save())
        return back()->with('success', $data);
    }

    public function product($id){
        $url = str_replace('-',' ',$id);
        $category = category_tbl::get();
        $product = DB::table('products_tbls')
            ->join('category_tbls', 'products_tbls.category_id', '=', 'category_tbls.id')
            ->select('*', 'products_tbls.id as pid', 'category_tbls.id as cid')
            ->where('category_tbls.category_name', '=', $url)
            ->get();
        // print_r($product->category_id);
        return view('frontend/product', compact('category', 'product'));
    }
    public function categories($id){
        $product = DB::table('products_tbls')
            ->join('category_tbls', 'products_tbls.category_id', '=', 'category_tbls.id')
            ->select('*', 'products_tbls.id as pid', 'category_tbls.id as cid')
            ->where('products_tbls.category_id', '=', $id)
            ->get();
        // print_r($product->category_id);
        return response()->json($product);
    }

    public function demo(){
        $name = "mahesh yangandul";
        echo $name."<br>";
        echo str_replace(' ', '2',$name);
    }
}
