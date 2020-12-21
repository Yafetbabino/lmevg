<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // authorization
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadministrator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users= User::orderBy('user_id','asc')->get();
        $users= User::orderBy('user_id','asc')->paginate(10);
        // $users= User::all();

        $lastuser= User::orderBy('user_id','desc')->first();

        // return view('admin.index')->with('users',$users,'lastuser', $lastuser );
        return view('admin.index' , ['users' => $users,'lastuser' => $lastuser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($lang,$id)
    {
        $user = User::find($id);
        return view('admin.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang, $id)
    {
        // dd($request);

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
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        DB::table('users')->where('id', $id)->update([
            "firstName" =>$request->firstName,
            "fatherName" =>$request->fatherName,
            "grandFatherName" =>$request->grandFatherName,
            "sex" =>$request->sex,
            "age" =>$request->age,
            "phone" =>$request->phone,
            "maritalStatus" =>$request->maritalStatus,
            "religion" =>$request->religion,
            "church" =>$request->church,
            "email" =>$request->email,
        ]);
        return back()->with('user_data_update', "User data updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
