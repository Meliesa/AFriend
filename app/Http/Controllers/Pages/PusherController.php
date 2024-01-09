<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\PusherBroadcast;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Import the Auth class

class PusherController extends Controller
{
    public function index()
    {
        $id = User::find(Auth::id());
        $messengerColor = User::where('id', $id)->get();
        $dark_mode = User::where('id', $id)->get();
        return view('vendor.Chatify.pages.app', compact('id', 'messengerColor', 'dark_mode'));
    }
}
