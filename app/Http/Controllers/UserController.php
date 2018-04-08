<?php

namespace App\Http\Controllers;

use App\User;
use App\Flight;
use DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Crypt;



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
         //    $encrypted = Crypt::encrypt('Hello world.');

         //    $decrypted = Crypt::decrypt($encrypted);
         //    dump($encrypted);
         //    dump($decrypted);
        // $users = DB::select('select * from users where id > ?', [1]);
        // // $results = DB::select('select * from users where id = :id', ['id' => 1]);
        // foreach ($users as $key => $value) {
        //     dump($value);
        // }
        // dump($users);
        // $users = DB::table('users')->get();
        // 解析成对象
        // foreach ($users as $user) {
        //   echo $user->name;
        // }
        // $user = DB::table('users')->where('name', 'allen.tai1')->first();
        // $user = DB::table('users')->where('name', 'allen.tai')->value('email');
        // echo $user;
        // DB::table('users')->chunk(10, function($users) {
        //         foreach ($users as $user) {
        //             dump($user->name);
        //             if($user->name =='allen.tai')
        //                 return false;
        //         }
        // });
        //count,sum,avg,max,min
        //get 对应 select first 对应 find
        // $users =  DB::table('users')->select(DB::raw('group_concat(id)'))->first();
        // // DB::raw 原生表达式
        // $users = DB::table('users')
        //             ->where('id', '>', 2)
        //             ->orWhere('name', 'Allen.tai')
        //             ->get();
        // DB::table('users')
        //     ->where('name', '=', 'John')
        //     ->orWhere(function ($query) {
        //         $query->where('votes', '>', 100)
        //               ->where('title', '<>', 'Admin');
        //     })
        //     ->get();
        //可以构建一个匿名函数进行修改
        //orderBy 
        //groupBy / having / havingRaw
        // $users =DB::table('users')->skip(5)->take(10)->get();
        //insert()
        //栏位 column array
        //insertGetId 获取自增id
        // $map['name'] = 'test';
        // DB::table('users')->where('id',1)->update($map);
        // 增加 减少 increment decrement
        // 如果你希望清除整张表，也就是删除所有列并将自增ID置为0，可以使用truncate方法：
        // DB::table('users')->truncate();
        // sharedLock方法从而在运行语句时带一把”共享锁“。共享锁可以避免被选择的行被修改直到事务提交：
        // lockForUpdate 锁避免选择行被其它共享锁修改或删除
        // $users = DB::table('users')->where('id', '>', 10)->lockForUpdate()
        // ->get();
        $flights = Flight::findOrFail(1);


        
 
        // dump($flights->name);

        
        
    	// dump(User::findOrFail($id));
        // return view('user.profile', ['user' =>User::findOrFail($id)]);
        // $users=DB::table('users')->paginate(10);
        // return view('user.profile',['users'=>$users]);
    }
}