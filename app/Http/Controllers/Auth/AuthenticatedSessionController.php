<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
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

//        return redirect()->intended(RouteServiceProvider::HOME);
//        protected function redirectTo()
//    {
        if (\Auth::user()->user_type == 'agency' && auth()->user()->is_active == 1)
        {
            return redirect()->route('agency.home');
        }

        if (\Auth::user()->user_type == 'consultant' && auth()->user()->is_active == 1)
        {
            return redirect()->route('consultant.home');
        }
        if (\Auth::user()->user_type == 'user' && auth()->user()->is_active == 1)
        {
            return redirect()->route('user.home');
        }
        if (\Auth::user()->user_type == 'admin')
        {
            return redirect()->route('admin.home');
        }

        else
        {
            return redirect(route('pages.index'));
        }

    }
//    }

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
