<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
      #grad {
            background-image: linear-gradient( white, #f2f4f5);
        }
        
</style>
</head>

<body>
    <div class="container-fluid">
    <div class="row" style="background-color:#f54266; height: 80px; padding-top: 20px;">
    <div class="col-lg-6" >
    <h4 style="text-align:left;">Staff</h4>  
    </div>
            <div class="col-lg-6" >
                  <form action="{{url('stafflogout')}}" method="post">
                  @csrf
                     <button class="btn btn-primary" style="text-align:right;">Log Out</button>
                  </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
            
                <div class="row" style="background-image: linear-gradient(white,#0384fc);height:100%;">
                    <div class="col-lg-12">
                        <div class="nav flex-column nav-pills" id="tab" role="tablist" aria-orientation="vertical" style="padding:50px;">
                        <a class="nav-link active"  href="school" role="tab">Home</a>
                            <a class="nav-link"  href="depart" role="tab">Student Registration</a>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>     
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>
                           <p></p>    
                           <p></p>  
                           
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8" id="grad">

            @yield('content')
                         
            </div>
        </div>
    </div>
</body>

</html>