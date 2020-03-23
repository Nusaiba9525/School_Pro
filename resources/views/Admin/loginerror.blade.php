<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<style>
        #username,
        #password {
            background-color: rgb(243, 205, 155);
        }
    </style>

     <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-4 offset-md-2 offset-sm-1">

            </div>

            <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">

                <form class="form-container"  method="post" action="{{url('adminlogin')}}">
                @csrf  
                <div style="border: 2px; border-style: hidden;margin-top: 50px; padding: 50px;">
                        <div class="form-group">
                            <h5>LOGIN TO YOUR ACCOUNT</h5>
                            <hr><br>
                        </div>
                       
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" id="username" name="username">
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <p>{{errorMessage}}</p>
                        <div class="form-group">
                            <label for="remember-me" class="text-info" style="color: black;"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <center> <input type="submit" name="submit" class="btn btn-success btn-md" value="submit"></center>
                        </div>
                     

                    </div>
                </form>
            </div>
            <div class="offset-lg-4 offset-md-2 offset-sm-1"></div>
        </div>
    </div>

