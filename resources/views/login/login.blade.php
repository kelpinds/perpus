<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    body {
      background-image: url(https://mmc.tirto.id/image/otf/1024x535/2019/06/20/ilustrasi-perpustakaan-istock_ratio-16x9.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed; 
      background-size: 100% 100%;
    }
    #uu{

    }
  </style>



</head>

<body>

  <!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
  <div class="container" style="margin-top: 5%;">
   
        <h1 class="text-center text-primary">✮ LOGIN ✮</h1>
        <div class="row">
          <div class="col-sm-4"> </div>
          <div class="col-md-4">
            @if(session('pesan'))
                        <div class="alert alert-success" role="alert">
                           {{session('pesan')}} 
                          </div>
                        @endif
                        
        <form action=""  method="post" class="mt-5">
          @csrf
        <div class="col-sm-12">
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class="form-group">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                  @error('username')
                      <div class="form-text">
                        {{$message}}
                      </div>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  @error('password')
                  <div class="form-text">
                    {{$message}}
                  </div>
              @enderror
                </div>
                <button class="pull-right btn btn-block btn-danger">login</button>
              </form>
            </div>
</body>

</html>