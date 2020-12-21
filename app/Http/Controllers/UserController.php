<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PDF;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }

    public function index()
    {
        return view('user.index');
    }

    public function donwloadPDF(){
        $pdf = PDF::loadView('user.certificate')->setPaper('letter', 'landscape');
        return $pdf->download('invoice.pdf');
    }
    public function edituser(Request $request, $id)
    {
        return view('user.edit');
    }

    public function updateuser(Request $request)
    {
        $validated = $request->validate([
            'firstName' => ['required', 'string','min:2', 'max:255'],
            'fatherName' => ['required', 'string','min:2', 'max:255'],
            'grandFatherName' => ['required', 'string','min:2', 'max:255'],
            'sex' => ['required', 'string','min:4','max:6'],
            'age' => ['required', 'numeric','min:1', 'max:150'],
            'phone' => ['required', 'string', 'max:15', 'min:10'],
            'maritalStatus' => ['required', 'string', 'max:7', 'min:3'],
            'religion' => ['required', 'string', 'min:8', 'max:15'],
            'church' => ['required', 'string', 'min:2','max:255'],
        ]);

        DB::table('users')->where('id', Auth::user()->id)->update([
            "firstName" =>$request->firstName,
            "fatherName" =>$request->fatherName,
            "grandFatherName" =>$request->grandFatherName,
            "sex" =>$request->sex,
            "age" =>$request->age,
            "phone" =>$request->phone,
            "maritalStatus" =>$request->maritalStatus,
            "religion" =>$request->religion,
            "church" =>$request->church,
        ]);
        return back()->with('user_data_update', "Your data isupdated successfully!");
    }
}
