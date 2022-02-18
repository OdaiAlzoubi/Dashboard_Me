<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        return view('auth.register');
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
        $request->validate([
            'F_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z]+$/u'],
            'L_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:admins,email', $request->id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'digits:10', 'unique:admins,phone', $request->id],
            'role' => 'required',
            'gender' => 'required',
        ]);

        $admin = new User;
        $admin->F_name = $request->input('F_name');
        $admin->L_name = $request->input('L_name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->phone = $request->input('phone');
        $admin->gender = $request->input('gender');
        $admin->role = $request->input('role');

        $admin->save();
        return redirect()->route('admin.show')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $admins = User::where('role', '>=', '1')->where('deleted_at', '=', '0')->latest(
            'id'
        )->paginate(5);
        $count = 0;
        return view('admin.show', compact('admins', 'count'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin = User::where('id', '=', $id)->first();
        return view('admin.edit', compact('admin'));
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
        //
        $request->validate([
            'F_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z]+$/u'],
            'L_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'string', 'email:rfc,dns', 'email', 'max:255', 'unique:admins,email,'.$id],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'phone' => ['required', 'numeric', 'digits:10', 'unique:admins,phone,'.$id],
        ]);

        $admin = User::where('id', '=', $id)->first();
        $admin->F_name = $request->input('F_name');
        $admin->L_name = $request->input('L_name');
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('image/admin/', $filename);
            $admin->image = $filename;
        }

        $admin->update();
        return redirect()->route('admin.profile');
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
        $admin = User::where('id', '=', $id)->first();
        $admin->delete();
        return redirect()->back();
    }

    public function register()
    {
        return view('auth.register');
    }

    // Profile Admin
    public function profile()
    {
        $admins = User::where('role', '>=', '1')->where('deleted_at', '=', '0')->inRandomOrder('id')->limit(5)->get();

        $admin = Auth::user();
        // dd($admin);
        return view('admin.profile', compact('admin', 'admins'));
    }

    // Soft Delete
    public function softDelete($id)
    {
        $admin = User::find($id);
        $admin->deleted_at = 1;
        $admin->update();
        return redirect()->back();
    }

    public function backFromSoftDelete($id)
    {

        $admin = User::where('id', '=', $id)->first();
        $admin->deleted_at = 0;
        $admin->save();
        return redirect()->back();
    }
    public function softDeleteShow()
    {
        $admins = User::where('deleted_at', '=', '1')->latest(
            'id'
        )->paginate(5);
        $count = 0;
        return view('admin.softDelete', compact('admins', 'count'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
}
