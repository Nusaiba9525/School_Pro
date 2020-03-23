@extends('Admin.adminhome')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<style>
        #username,
        #password {
            background-color: rgb(243, 205, 155);
        }
      
        .form_box {
            height: 250px;
            width: 600px;
            background-color: #d6d4d5;
            margin-top:100px;
            margin-left:50px;
            text-align:justify;
        }
    </style>

     <div class="container-fluid">
        <div class="row">
        <div class="offset-lg-2"></div>
        </div>

            <div class="col-lg-8">
            <center>
             <div class="form_box">

               <div class="row">
                   <div class="col-md-1">

                   </div>
                <div class="col-md-11" style="padding:30px;">
                <form class="form-container"  method="post" action="{{url('add')}}">
                @csrf  
               
                        <div class="form-group">
                            <h5 >Add Department</h5>
                        </div>
                        <hr><br>
                        <div class="form-group">
                            <label for="dpt">Department Name</label>
                            <input type="text" class="form-control" id="dpt" name="department" placeholder="Department">
                            
                        </div>
                       
                        <div class="form-group">
                            <center> <input type="submit" name="submit" class="btn btn-success btn-md" value="submit"></center>
                        </div>
                       
                        
                </form>
                </div>
                </div>
                </div>
            </center>
            </div>
            <div class="offset-lg-2"></div>
        </div>
    </div>

    @endsection