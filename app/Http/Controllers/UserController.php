<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests\signup;
use App\Http\Requests\login;
class UserController extends Controller
{


    public function index()
    {


        return view('users.index');
    }

    public function signup(signup $request)
    {


        $no = 0;
        $typeOfAccess = Input::get('type');


        $no = ($typeOfAccess == 'student') ? '1' : '2';

        $hashedPassword = bcrypt(Input::get('password'));

        $username = Input::get('username');
        DB::table('users')->insert(['userName' => $username, 'password' => $hashedPassword,
            'email' => Input::get('email'), 'country' => Input::get('country'),
            'typeOfAccess' => $no]);

        //session()->push('user',$username);

        //Session::push('username', $username);
        return view('users.index');
    }

    //


    public function login(login $request)
    {

        // $username = Input::get('username');
        // $password = Input::get('password');
        // session()->push('user',$username);


        $data = $request->only('username', 'password');
        if (\Author::attempt($data)) {
            return redirect()->intended('cs');
        }


        return back() -> withInput();

    }


}
