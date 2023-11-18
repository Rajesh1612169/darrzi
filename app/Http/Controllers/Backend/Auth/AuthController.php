<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index() {
//        Mail::to('rajeshkumar1612169@gmail.com')->send(new VerificationMail('asd'));

        return view('backend.auth.login');
    }


    public function loginPost(Request $request) {

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            if ($user->is_verified != 1) {
                return redirect()->route('login')->with('error', 'Account Not Verified Kindly Check Your Email');
            }
            else {
                $request->session()->regenerate();
                return redirect()->route('home.index');
            }
        }

        return redirect()->back()->with('error', 'Wrong Email or Password');
    }

    // Generate Random Alpha Numeric Code
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    public function register() {
        return view('backend.auth.register');
    }

    public function registerStore (Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'passport_or_nic' => 'required|unique:users,passport_or_nic',
            'phone' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['role_id'] = 2;
        $validatedData['verification_code'] = $this->generateRandomString(6);
//        dd($validatedData);

        $user = User::create($validatedData);

        $user_detail['user_id'] = $user->id;

        $user_details = UserDetails::create($user_detail);
//        dd($user->id);

        Mail::to($validatedData['email'])->send(new VerificationMail($user->id));


        return redirect()->route('register.success')->with('success', 'Registered Successfully');

//        dd($validatedData);
    }

    public function registerSuccess() {
        return view('backend.auth.register-success');
    }

    public function accountVerification($id) {

        $user = User::find($id);
        $user->is_verified = 1;
        $user->save();

        return redirect()->route('login')->with('success', 'Successfully Verified Account');
    }
    public function logout() {
//        $this->guard()->logout();

        session()->flush();

//        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
//    public function accountVerificationPost(Request $request, $id) {
//        dd($id,$request);
//    }
}
