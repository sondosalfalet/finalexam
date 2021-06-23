<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route :: get ('tasks',function(){
$tasks = DB::table('tasks')->get();
//dd($tasks);

 return view('tasks',compact('tasks'));
});
Route::get('/show/{id}',function($id){
   // $task =DB::table('tasks')->where('id',$id)_>first();
   $task =DB::table('task')->find($id);
  // dd($task);
  return view('show',compact('task'));

});
Route::get ('app' , function(){
    tasks = DB::table('tasks')->get ();
    return view('todo',compact('tasks'));
});
Rout::get('app',function(){
    return view ('layout.app');
});
<?php
public function store(Request$Request)
$data=$request->validate
'first name'=>(required)
'last name'=>(required)
'email'=>(reqired)
dd(auth)::user()->;
$contact=new contact;
$contact->fname=$request->firstname;
$contact->Iname=$request-->lastname;
$contact->email=$request-->email;
$contact->user-id=auth::user()->id;
$contact-->save();
return redirect()->balk()-with('scess,'contact added succfally');
}
public funcyion edite($id)
{
    $contact =contact::find($id);
    return view('edite',compact((contact))
    public function (catogory)
