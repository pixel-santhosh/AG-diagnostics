<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Auth;
use Yajra\DataTables\Facades\DataTables;


class ProfileController extends Controller
{
    public function index(Request $request)
    {
        // Sentinel::getUser()->name
        $user = Sentinel::getUser();
        $data = User::find($user->id);
    $data['password'] =  $data['password'];

        return view('admin.profile.index',compact('data'));
    }
}
