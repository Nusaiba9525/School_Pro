<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Staffcontroller extends Controller
{
      #Staff create
      public function create(Request $request){
        $staffid=$request->staffid;
        $name=$request->name;
        $place=$request->place;
        $contact=$request->contact;
        $department=$request->department;
        $username=$request->username;
        $password=$request->password;
        $status="Staff";
        
        DB::table('Staff')->insert([
          ['staffid'=>$staffid,'name'=>$name,'place'=>$place,'contact'=>$contact,'department'=>$department]
          
      ]); 
        DB::table('AdminLogin')->insert([
         ['username'=>$username,'password'=>$password,'status'=>$status,'staffid'=>$staffid]
         
     ]); 
     return redirect('dpt');
      }
      #login
      public function Login(Request $request){
        $username=$request->username;
        $password=$request->password;
        $status="Staff";
       
       $user = DB::table('AdminLogin')->where('Username',$username)->first();
       if(is_null($user)){
        //   echo "incorrect username";
          return redirect('viewstafflogin')->with('errorMessage','Incorrect Username');
        }
        elseif(($username==$user->Username)&&($password==$user->Password)){
      //   echo "login success";
      if($status==$user->Status){
        // $request->session()->put('userid',$user->UserId);
        $request->session()->put('staffid',$user->StaffId);
        return redirect('get');
      }
      else{
        return redirect('viewstafflogin')->with('errorMessage','Incorrect Username&Password');
      }
        }
        else{
          //   echo "incorrect password";
          return redirect('viewstafflogin')->with('errorMessage','Incorrect Password!');
        }
      }
      public function sessionget(){
         
          $staffid=session()->get('StaffId');
          $staff = DB::table('Staff')->where('StaffId',$staffid)->first();
  
         
       
           return view('Staff.staffhome',['userid' => $staff]);
        }
        public function Logout(){
          $userid=session()->forget('UserId');
          return redirect('viewstafflogin');
        }
        #for dpt in studreg
        public function select(){
           
            $userid=session()->get('staffid');
            $staff = DB::table('Staff')
            ->select('Staff.Department')
            ->where('StaffId',$userid)->first();
           

              return view('Staff.students', ['staff' => $staff]);
             
            
         }
         #Studen reg
         public function stud(Request $request,$id){
            $name=$request->name;
            $place=$request->place;
            $contact=$request->contact;
            $dept=DB::table('staff')->where('staffid',$id)->first();
            $department=$dept->department;
            echo $department;

            DB::table('Student')->insert([
                ['name'=>$name,'place'=>$place,'contact'=>$contact,'department'=>$department]
                
            ]); 
          
            return redirect('reg');
         }
}


