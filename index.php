<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            background-image: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pexels.com%2Fsearch%2Fbookshelf%2F&psig=AOvVaw2SHo9TAhvT0sjFg6nBycln&ust=1707020081880000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCMDO67-njoQDFQAAAAAdAAAAABAE");
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card my-5"><!--card-->
                    <div class="card-body">
                        <h5 class="text-center my-2">::: Book Shop ::: </h5>
                            <form class="form"action="" method="POST">
                                <div class="my-3">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="User Name">
                                </div>
                                <div class="my-3">
                                    <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password">
                                </div>
                                <div class="my-4">
                                    <button id="btnLogin" class="btn btn-danger w-100 text-uppercase">Login</button>
                                </div>
                                <hr class=my-4>
                                <h6>Enter your User name & password</h6>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
      
        $('#btnLogin').click(

            function(){
                inputValidation();
            }
        );

      //input validation
      function inputValidation(callback){

        //username validation
        if($('#username').val().length === 0){
            alert('Username cannot be empty');
            return false;
        }

        //password validation
        if($('#pwd').val().length === 0){
            alert('Password cannot be empty');
            return false;
        }
      }
    </script>
</body>
</html>