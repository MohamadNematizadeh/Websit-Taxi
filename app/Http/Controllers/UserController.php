<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function profile()
    {
        return view("client.profile");

    }

    function login_get()
    {
        return view("client.login");
    }

    function login_post(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
        if(Auth::attempt(["email"=>$request["email"],"password"=>$request["password"]]))
        {
            return redirect("/profile")->with([
                "message" => "شما با موفقیت وارد حساب کاربری شدین"
            ]);

        }
        else
        {
            return redirect("/login")->with([
                "message" => "ایمیل یا گذرواژه خودرا به درستی وارد نکردین"
            ]);

        }

    }

    function register_get()
    {
        $citirs = City::all();

        return view("client.register")->with([
            "citirs" => $citirs
        ]);
    }

    function register_post(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users',
            'user_name' => 'required|unique:users',
            'name' => 'required|max:120',
            'password' => 'required|min:8',
            'password2' => 'same:password'
        ]);
        $new_user = new User();
        $new_user->name = $request["name"];
        $new_user->user_name = $request["user_name"];
        $new_user->mobile_number = $request["mobile_number"];
        $new_user->email = $request["email"];
        $new_user->city_id = $request["city"];
        $new_user->address = $request["address"];
        $new_user->password = bcrypt($request["password"]);
        $new_user->save();
        return redirect("/login");
    }

    function logout()
    {
        Auth::logout();
        return redirect("/");

    }
}
