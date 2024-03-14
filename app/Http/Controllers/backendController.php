<?php

namespace App\Http\Controllers;

use App\Models\category_tbl;
use App\Models\contact_tbl;
use App\Models\enquiry_tbl;
use App\Models\feedback_tbl;
use App\Models\login_tbl;
use App\Models\products_tbl;
use Illuminate\Http\Request;

class backendController extends Controller
{
    function index()
    {
        return view('dashboard/dashboard');
    }

    function login()
    {
        return view('dashboard/login');
    }

    function loginPost(Request $req)
    {
        $name = $req->get('username');

        $check = login_tbl::where([
            ['username', '=', $name],
            ['password', '=', $req->get('password')],
        ])->first();

        if ($check) {
            $req->session()->put('adminlogin', $name);
            $checkSession = $req->session()->get('adminlogin');
            if (isset($checkSession)) {
                return redirect('/admin')->with('success', $name);
            }
        }
        return back()->with('error', 'Invalid Username & Password');
    }

    function logout()
    {
        session()->forget('adminlogin');
        return redirect('login');
    }

    function contact()
    {
        $contact = contact_tbl::get();
        $category = category_tbl::get();
        return view('dashboard/contactdata', compact('contact', 'category'));
    }
    public function deletecontact(string $id)
    {
        $data = contact_tbl::find($id);
        $check = contact_tbl::where([
            ['id', '=', $id]
        ])->first();
        $msg = $check->name;
        $data->delete();
        return back()->with('delete', $msg);
    }

    function feedback()
    {
        $feedback = feedback_tbl::get();
        $category = category_tbl::get();
        return view('dashboard/feedback', compact('feedback', 'category'));
    }
    public function deletefeedback(string $id)
    {
        $data = feedback_tbl::find($id);
        $check = feedback_tbl::where([
            ['id', '=', $id]
        ])->first();
        $msg = $check->name;
        $data->delete();
        return back()->with('delete', $msg);
    }

    function enquiry()
    {
        $enquiry = enquiry_tbl::get();
        $category = category_tbl::get();
        return view('dashboard/enquiry', compact('enquiry', 'category'));
    }
    public function deleteenquiry(string $id)
    {
        $data = enquiry_tbl::find($id);
        $check = enquiry_tbl::where([
            ['id', '=', $id]
        ])->first();
        $msg = $check->name;
        $data->delete();
        return back()->with('delete', $msg);
    }
}
