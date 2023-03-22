<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;


class CreateUserController extends Controller
{


    public function index()
    {
        $user = DB::table('users')->get();
        foreach ($user as $users) {
        $name = $users->name;
        $email = $users->email;
        $role = $users->role;
    }
    return view('/admin/createuser', compact('name','email','role'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        return view('admin/createuser');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }

}
