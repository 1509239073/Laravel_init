<?php

namespace App\Http\Controllers;

use App\User;
use App\Flight;
use DB;
use Gate;
use Cache;

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
        // $users =User::find(1)->makeVisible('password')->toArray();
        // dump($users);
        //数据库面向对象 定义属性更多的是
        //以前是把复杂的东西简单化
        //现在是把简单的东西复杂化
        //Cache 
        //$value = Cache::store('file')->get('foo');
        //Cache::store('redis')->put('bar', 'baz', 10);
        //get has increment decrement remember 不存在赋值  pull 取出删除
        //add 方法只会在缓存项不存在的情况下添加缓存项到缓存，如果缓存项被添加到缓存返回 true，否则，返回 false
        // 缓存标签 tags
        // 监听 要在每次缓存操作时执行代码，你可以监听缓存触发的事件，通常，你可以将这些缓存处理器代码放到 EventServiceProvider
        // forerver forget flush 
        Cache::put('aa', '222', 1);
        Cache::increment('aa',2);

        dump(Cache::get('aa'));
        



        
 
        // dump($flights->name);

        
        
    	// dump(User::findOrFail($id));
        // return view('user.profile', ['user' =>User::findOrFail($id)]);
        // $users=DB::table('users')->paginate(10);
        // return view('user.profile',['users'=>$users]);
    }
    public function create(){
        //回调过滤集合 reject
        $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
                  return strtoupper($name);
              })->reject(function ($name) {
                  return empty($name);
              });
        // all avg
        $collection = collect([
             ['name' => 'JavaScript: The Good Parts', 'pages' => 176],
             ['name' => 'JavaScript: The Definitive Guide', 'pages' => 1096],]);
        $collection = collect([1, 2, 3, 4, 5, 6, 7]);
        $chunks = $collection->chunk(4);
        $collection = collect([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
        $collapsed = $collection->collapse()->all();

        dump($collapsed);
    }
}