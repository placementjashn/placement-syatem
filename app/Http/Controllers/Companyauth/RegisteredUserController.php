<?php

namespace App\Http\Controllers\Companyauth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
         return view('company.auth.register'); 
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Company::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'contact' => ['required'],
            'location' => ['required'],
            'image' => ['required'],
        ]);

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact' => $request->contact,
            'location' => $request->location,
            /* 'image' => $request->image, */
            $imagename = time().'.'.$request->image->getClientOriginalExtension(),
            $request->image->move('img/company',$imagename),
            'image' => $imagename,
        ]);

        event(new Registered($company));

        Auth::guard('company')->login($company);

        return redirect(RouteServiceProvider::COMPANY_HOME);
    }
}
