<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
  public function formLogin()
  {
    return view("auth.login");
  }

  public function formRegistrasi()
  {
    return view("auth.registrasi");
  }

  public function actionRegistrasi(Request $request)
  {
    $request->validate([
      "name" => "required|min:4|max:225",
      "email" => "required|email|unique:users",
      "password" => "required",
    ]);

    User::create([
      "name" => $request->name,
      "email" => $request->email,
      "role" => "author",
      "password" => $request->password,
    ]);

  

    return redirect()
      ->route("registrasi")
      ->with("pesan", "registrasi silahkan login");
  }

  public function actionLogin(Request $request)
  {
    $request->validate([
      "password" => "required",
      "email" => "required|email",
    ]);

    if (
      Auth::attempt([
        "email" => $request->email,
        "password" => $request->password,
      ])
    ) {
      $request->session()->regenerate();

      return redirect()->route("home");
    }
    return redirect()
      ->route("login")
      ->with("pesan", "email atau password salah");
  }
  
  public function logout(Request $request)
  {
    Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
  }
}
