<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\RealEstateEnquiry;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Traits\MailTrait;

class RegisteredUserController extends Controller
{
    use MailTrait;

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $checkEmail = User::where(['email' => $request->email, 'domain' => 'fgrealestate', 'status' => '1'])->first();

        if($checkEmail!=null && $checkEmail['status'] == '1'){
                return $this->sendDuplicateMail($request);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'domain' => 'fgrealestate'
        ]);
        if($user){
            $input['name'] = $request->name;
            $input['email'] = $request->email;
            $input['phone'] = $request->phone;
            $input['route_url'] = $request->url();
            $input['route_name'] = $request->route_name;
            $success = RealEstateEnquiry::create($input);
            $this->customerWelcomeMail($request);
        }
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    protected function sendDuplicateMail(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => [trans("Email already exists.")],
        ]);
    }
}
