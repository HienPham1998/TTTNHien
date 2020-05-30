<?php

namespace App\Http\Controllers\Auth;

use App\Category;
use App\Http\Controllers\Controller;
use App\Salers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Redirect;
use Validator;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function registerStore()
    {
        $categories = Category::all();
        return view('layouts.registerStore', compact('categories'));
    }

    public function postRegister(Request $request)
    {
        $rules = [
            'username' => 'required|min:8|max:12',
            'password' => 'required|confirmed|min:8',
            'email' => 'required|email',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $newUser = new User();
        $newUser->username = $request->username;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->role_id = 2;
        $newUser->avatar = 'https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png';
        $newUser->save();

        return redirect('/login');

    }

    public function postLogin(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // return redirect()->back()->withErrors($validator)->withInput();
            session()->flash('error', 'Username or password is not correct');
        } else {
            $username = $request->username;
            $password = $request->password;
            if (Auth::attempt(['username' => $username, 'password' => $password])) {
                //  if(Auth::user()->role_id ==1 )
                // {
                //     return redirect()->intended('/manage');
                // }
                return redirect()->intended('/');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Tên hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }

    public function postSaler(Request $request)
    {
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'company' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $currentUser = Auth::user()->id;
        $newSaler = new Salers();
        $newSaler->user_id = Auth::user()->id;
        dd($newSaler);
        $newSaler->save();

        return redirect('/profile');

    }

    public function logout()
    {
        Auth::logout();
        \Cart::destroy();
        return redirect("/");
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
