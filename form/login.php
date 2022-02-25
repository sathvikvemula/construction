<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body style="background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190620/ourmid/pngtree-construction-site-crane-silhouette-site-safety-publicity-poster-background-material-image_165333.jpg'); background-repeat: no-repeat; background-size:1228px 600px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto mt-5 bg-white shadow font-monospace border border-info">
                <p class="text-warning text-center fs-3 fw-bold my-3">User Login</p>
                <form action="login1.php" method='POST' name='f1'>
                    
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="name" placeholder="Enter Username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button name="submit" class="w-100 bg-primary fs-4 text-white">LOGIN</button>
                    </div>
                    <div class="mb-3 text-center">
                        <a href="register.php">Don't have  an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>