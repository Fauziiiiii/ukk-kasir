<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::with('outlet')->get();
        return view("user.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $outlet = Outlet::all();
        $role = ['admin', 'kasir', 'owner'];
        return view("user.create", compact("outlet","role"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nama"=> "required",
            "username"=> "required",
            "password"=> "required",
            "id_outlet"=> "required",
            "role"=> "required",
        ],[
            'nama.required' => 'Nama wajib diisi!!',
            'username.required' => 'Username wajib diisi!!',
            'password.required' => 'Password wajib diisi!!',
            'id_outlet.required' => 'Outlet wajib diisi!!',
            'role.required' => 'Role wajib diisi!!',
        ]);
        User::create($request->all());
        return redirect("/user")->with("success","Berhasil menambahkan User baru");
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
    public function edit($id)
    {
        $data = User::find($id);
        $outlet = Outlet::all();
        $role = ['admin','kasir','owner'];
        return view("user.edit", compact('data', 'outlet', 'role'));
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
        $this->validate($request, [
            "nama"=> "required",
            "username"=> "required",
            "email"=> "required",
            "password"=> "required",
            "id_outlet"=> "required",
            "role"=> "required",
        ],[
            "nama.required"=> "Nama wajib diisi!!",
            "username.required"=> "Username wajib diisi!!",
            "email.required"=> "Email wajib diisi!!",
            "id_outlet.required"=> "Outlet wajib diisi!!",
            "role.required"=> "Role wajib diisi!!",
        ]);

        User::find($id)->update($request->all());
        return redirect('/user')->with("success", "Data User berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user')->with('success','Data Paket berhasil dihapus');
    }
}
