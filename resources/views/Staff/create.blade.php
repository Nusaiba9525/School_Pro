@extends('Staff.staff')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="container-fluid">
        <div class="row">
        
            <div class="col-lg-10">


<form action="{{url('create')}}" method="post" >
@csrf
<div style="border: 2px; border-style:hidden; margin-top: 50px; padding: 50px;">
<div class="form-group">
       <h5 >Create New Account</h5>
 </div>
<hr><br><br>
<div class="row">
<div class="col-lg-2" style="text-align:justify;">
<div class="form-group" style="padding: 3px;">
<label for="id" >StaffId</label>
</div>
<div class="form-group" style="padding: 3px;">
<label for="name" >Name</label>
</div>
<div class="form-group" style="padding: 3px;">
<label for="place" >Place</label>
</div>
<div class="form-group" style="padding: 3px;">
<label for="cnt" >Contact</label>
</div>
<div class="form-group" style="padding: 3px;">
<label for="dpt" >Department</label>
</div>
<div class="form-group" style="padding: 3px;">
<label for="username" >Username</label>
</div>
<div class="form-group" style="padding: 3px;">
<label for="password" >Password</label>
</div>
<div class="form-group" style="padding: 3px;">
<label for="cfpassword" >Confirm-Password</label>
</div>
</div>
<div class="col-lg-10">
<div class="form-group">
<input class="form-control" type="text" name="staffid" id="id" placeholder="StaffId">
</div>
<div class="form-group">
<input class="form-control" type="text" name="name" id="name" placeholder="Name">
</div>
<div class="form-group">
<input class="form-control" type="text" name="place" id="place" placeholder="Place">
</div>
<div class="form-group">
<input class="form-control" type="text" name="contact" id="cnt" placeholder="Contact">
</div>
<div class="form-group">

<select class="form-control" name="department" id="dpt">
<option></option>
@foreach($users as $user) 
    <option value="{{$user->Department}}">{{$user->Department}}</option>
@endforeach
</select>
</div>
<div class="form-group">
<input class="form-control" type="text" name="username" id="username" placeholder="Username">
</div>
<div class="form-group">
<input class="form-control" type="password" name="password" id="password" placeholder="Password">
</div>
<div class="form-group">
<input class="form-control" type="password" name="cfpassword" id="cfpassword" placeholder="Confirm Password">
</div>
<div class="form-group">
<button class="btn btn-success">submit</button>
</div>
    </div>
    
</div>


</form>
</div>
            <div class="offset-lg-2"></div>
        </div>
    </div>
@endsection