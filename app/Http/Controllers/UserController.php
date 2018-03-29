<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;



class UserController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     * @author LaravelAcademy.org
     */
    public function show(Request $request,$id)
    {   
        // $request->session()->put('key111', 'taixing');
        // $request->session()->put('key222', 'lee.li');
        // $request->session()->keep(['key111', 'taixing']);
        // $request->session()->push('key33.user', 'lee.li');
        // dump($request->user());
        // $data = $request->session()->all();
        // dump(bcrypt('123456'));
        // $this->hasher = $hasher;
        // $a =  $this->hasher->check('123456','$2y$10$ykAdXd8ZETSL3jFqYI/wRO5vJ3J7AJe28kUQzKTKz9DEeZ3c86zsu');
        // dump($a);
        // dump($this->Crypt);
        $encrypted = Crypt::encrypt('Hello world.');

        $decrypted = Crypt::decrypt($encrypted);
        dump($encrypted);
        dump($decrypted);

    	dump(User::findOrFail($id));
        return view('user.profile', ['user' =>User::findOrFail($id)]);
    }
}