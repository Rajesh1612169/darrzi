<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index() {
        $user_id = Auth::user()->id;
//        dd($user_id);
        $user = User::find($user_id);
        return view('backend.users.profile', ['user'=>$user]);
    }

    public function saveAvatar(Request $request) {

        $user_id = Auth::user()->id;
        $user_details = UserDetails::find($user_id);

        if ($user_details->profile_picture != null || $user_details->profile_picture !=0) {
            unlink(public_path('images/user_avatar/'.$user_details->profile_picture));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/user_avatar'), $imageName);
//        dd($imageName);

        $user_details->profile_picture = $imageName;
        $user_details->save();

        return response()->json(1);

    }

}
