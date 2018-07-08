<!--php-->

<!--html content-->
<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>User form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>#formbox{margin-left:auto;margin-right:auto;width:calc(300px);padding:4%;}</style>
</head>

<body>

    <div class="container">
        <div class="row"><div class="col-lg-5 mx-auto" style="margin-top:4%">

            <div class="jumbotron">
                <form action="<?php echo htmlspecialchars('register.php');?>" method="post">
                
                <div id="formbox" class="card bg-success" >
                <div class="alert alert-success" id="alert" style="display:none">
                    <strong>Success!</strong> This alert box could indicate a successful or positive action.
                </div>
                    <div class="form-horizontal">
                    <div class="form-group">
                        <label class="text-light" for="firstname">First Name:</label>
                        <input type="text" name="firstname" class="form-control form-control-sm" placeholder="Enter First name">
                        <label class="text-light" for="surname">Surname:</label>
                        <input type="text" name="surname" class="form-control form-control-sm " placeholder="Enter Surname">
                        <label class="text-light" for="email">Email:</label>
                        <input type="email" name="email" class="form-control form-control-sm" placeholder="email">
                        <label class="text-light" for="birthday">Birth Date:</label>
                        <input type="date" name="birthday" class="form-control form-control-sm">
                    </div>
                    <div class="form-check">
                    <label class="form-check-label text-light">
                        <input type="radio" class="form-check-input" name="gender">Male
                    </label>
                    </div>
                    <div class="form-check">
                    <label class="form-check-label text-light">
                        <input type="radio" class="form-check-input" name="gender">Female
                    </label>
                    </div>

                    <input type="submit" class="form-control btn-primary" class="form-control" value="Register">
                    </div>
                    
                </div>
                
                </form>
            </div>
        


        </div></div>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>