<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listPengguna() {
        $users = User::all();

        return view('admin.pengguna.index', compact('users'));
    }

    public function tambahPengguna() {
        return view('admin.pengguna.create');
    }

    public function editPengguna($id) {
        $user = User::find($id);
        
        return view('admin.pengguna.edit', compact('user'));
    }
}
