<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        // if(auth()->user()->roles->pluck('name')[0]){}
        $role = auth()->user()->roles->pluck('name')[0];
            switch ($role) {
                case "member":
                    return redirect()->intended('member/dashboard')->with('success','Berhasil login!');
                case "kasir":
                    return redirect()->intended('kasir/dashboard')->with('success','Berhasil login!');
                case "admin":
                    return redirect()->intended('categories')->with('success','Berhasil login!');
                case "pimpinan":
                    return redirect()->intended('pimpinan/dashboard')->with('success','Berhasil login!');
                    default:
                redirect()->back()->withErrors("Ada yang salah");
            }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
