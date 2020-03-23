<?php

namespace App\Http\Controllers;
use App\AdminLogin;

use Illuminate\Http\Request;
use DB;
class Admincontroller extends Controller
{
    public function log(Request $request){
        $username=$request->username;
        $password=$request->password;
        $status="Admin";
        
        DB::table('AdminLogin')->insert([
         ['username'=>$username,'password'=>$password,'status'=>$status]
         
     ]);  
    }
    public function Login(Request $request){
      $username=$request->username;
      $password=$request->password;
      $status="Admin";
      
     $user = DB::table('AdminLogin')->where('Username',$username)->first();
     if(is_null($user)){
        // echo "incorrect username";
        return redirect('viewadminlogin')->with('errorMessage','Incorrect Username');
      }
      elseif(($username==$user->Username)&&($password==$user->Password)){
    //   echo "login success";
    if($status==$user->Status){
      
      $request->session()->put('userid',$user->UserId);
     
      return redirect('home');
    }
      }
      else{
        //   echo "incorrect password";
        return redirect('viewadminlogin')->with('errorMessage','Incorrect Password!');
      }
    }
    public function sessionget(){
      if (session()->has('userid')) {
        $userid=session()->get('userid');
       
        $user = DB::table('AdminLogin')->where('Userid',$userid)->first();
      
        //  print_r($user);
         return view('Admin.adminhome',['userid' => $user]);
      }
      else{
        return redirect('viewadminlogin')->with('error3','Please login first!!');

    }
      }
      public function Logout(){
        $userid=session()->forget('userid');
        return redirect('viewadminlogin');
      }
      public function add(Request $request){
        $department=$request->department;
        DB::table('Department')->insert([
            ['department'=>$department]
            
        ]); 
        return redirect('add'); 
      }
      #select dpt
       public function select(){
        
          $users = DB::table('Department')->get();
           return view('Staff.create', ['users' => $users]);
       }
       #change username
       public function Changeuser(Request $request){
        $userid=session()->get('userid');   
        $user = DB::table('AdminLogin')->where('Userid',$userid)->first();
        
            return view('Admin.changeuser',['userid' => $user]);
       
    }
    public function userupd(Request $request){
     
      $newusername=$request->username;
      
      $userid=session()->get('userid');
       
      $user = DB::table('AdminLogin')->where('Userid',$userid)->first();
     
                  DB::table('AdminLogin')
      ->where('UserId', $userid)
      ->update([
                 'Username'=>$newusername
          ]);
          
                  return redirect('viewadminlogin')->with('msg','Your username has been changed successfully!!!');
      }       
      //change password
      public function changepass(Request $request){
        $userid=session()->get('userid');
       
        $user = DB::table('AdminLogin')->where('Userid',$userid)->first();
              return view('Admin.changepass',['userid' => $user]);
         
      }
      public function passupd(Request $request){
          $currentpass=$request->cpassword;
          $newpass=$request->password;
          $confirmpass=$request->cfpassword;
          $userid=session()->get('userid');
       
          $user = DB::table('AdminLogin')->where('UserId',$userid)->first();
       
          if ($currentpass!="" && $newpass!="" && $confirmpass!="") {
              if ($currentpass==$user->Password) {
                  if ($newpass==$confirmpass) {
                      DB::table('AdminLogin')
          ->where('UserId',  $userid)
          ->update([
          
                  'password'=>$newpass
              ]);
                      return redirect('viewadminlogin')->with('msg','Your password has been changed successfully!!!');
                  } else {
                      return redirect('changepass/'.$request->id)->with('msg','New password and confirm password does not match!!!');
          
                      
                  }
              } else {
                  return redirect('changepass/'.$request->id)->with('msg','Existing password is incorrect!!!');
              }
          }
         
              
          }
          
}
