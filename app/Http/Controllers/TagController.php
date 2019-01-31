<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tag;

class TagController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user() {
        $tag = Tag::firstOrCreate(['tagid' => Auth::user()->username]);

        return view('apps.dashboard', compact('tag'));
    }

    public function showProfile() {
        $tag = Tag::firstOrCreate(['tagid' => Auth::user()->username]);

        return view('apps.profile', compact('tag'));
    }

    public function updateProfile(Request $request) {
        $tag = Tag::find(Auth::user()->username);

        $tag->tagname = $request->tagname;
        $tag->phone = $request->phone;
        $tag->gender = $request->gender;
        
        $tag->save();

        return redirect()->route('apps.user.profile');
    }
}
