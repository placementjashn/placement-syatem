<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\PDF;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'contact' => ['required'],
            'location' => ['required'],
            'image' => ['required'],
            'resume'=>['required'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact' => $request->contact,
            'location' => $request->location,
            /* 'image' => $request->image, */
            $imagename = time().'.'.$request->image->getClientOriginalExtension(),
            $request->image->move('img/student',$imagename),
            'image' => $imagename,
            /* $pdf = PDF::loadView('contract.contract-pdf', $data);
            $pdf->save('contract.pdf');
            $s3 =\Storage::disk('s3');
            $s3->put('pdf/contract', new File('contract.pdf'), 'public');*/
            $resume = time().'.'.$request->resume->getClientOriginalExtension(),
            $request->resume->move('img/student',$resume),
            'resume' => $resume,
            'stream'=> $request->stream,
            'university'=>$request->university,
            /* 'resume' => $request->resume, */
        ]);


        event(new Registered($user));


        Auth::login($user);


        return redirect(RouteServiceProvider::HOME);
    }
}
