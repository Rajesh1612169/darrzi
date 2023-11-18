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
        $user_details = User::find($user_id)->userDetails;
        $user['user_details'] = $user_details;

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

    public function nicFront(Request $request) {

        $user_id = Auth::user()->id;
        $user_details = UserDetails::find($user_id);

        if ($user_details->nic_or_passport_front != null || $user_details->nic_or_passport_front !=0) {
            unlink(public_path('documents/'.$user_details->nic_or_passport_front));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('documents/'), $imageName);
//        dd($imageName);

        $user_details->nic_or_passport_front = $imageName;
        $user_details->save();

        return response()->json(1);

    }
    public function nicBack(Request $request) {

        $user_id = Auth::user()->id;
        $user_details = UserDetails::find($user_id);

        if ($user_details->nic_or_passport_back != null || $user_details->nic_or_passport_back !=0) {
            unlink(public_path('documents/'.$user_details->nic_or_passport_back));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('documents'), $imageName);
//        dd($imageName);

        $user_details->nic_or_passport_back = $imageName;
        $user_details->save();

        return response()->json(1);
    }

    public function matricMarksheet(Request $request) {

        $user_id = Auth::user()->id;
        $user_details = UserDetails::find($user_id);

        if ($user_details->matriculation_marks_sheet != null || $user_details->matriculation_marks_sheet !=0) {
            unlink(public_path('documents/'.$user_details->matriculation_marks_sheet));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('documents'), $imageName);
//        dd($imageName);

        $user_details->matriculation_marks_sheet = $imageName;
        $user_details->save();

        return response()->json(1);
    }
    public function matricCertificate(Request $request) {

        $user_id = Auth::user()->id;
        $user_details = UserDetails::find($user_id);

        if ($user_details->matriculation_certificate != null || $user_details->matriculation_certificate !=0) {
            unlink(public_path('documents/'.$user_details->matriculation_certificate));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('documents'), $imageName);
//        dd($imageName);

        $user_details->matriculation_certificate = $imageName;
        $user_details->save();

        return response()->json(1);
    }
    public function enterMarksheet(Request $request) {
        $user_id = Auth::user()->id;
        $user_details = UserDetails::find($user_id);

        if ($user_details->enter_marks_sheet != null || $user_details->enter_marks_sheet !=0) {
            unlink(public_path('documents/'.$user_details->enter_marks_sheet));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('documents'), $imageName);
//        dd($imageName);

        $user_details->enter_marks_sheet = $imageName;
        $user_details->save();

        return response()->json(1);
    }
    public function enterCertificate(Request $request) {
        $user_id = Auth::user()->id;
        $user_details = UserDetails::find($user_id);

        if ($user_details->enter_certificate != null || $user_details->enter_certificate !=0) {
            unlink(public_path('documents/'.$user_details->enter_certificate));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('documents'), $imageName);
//        dd($imageName);

        $user_details->enter_certificate = $imageName;
        $user_details->save();

        return response()->json(1);
    }
}
