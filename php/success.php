<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/853007f87a.js"></script>
    <link rel="stylesheet" href="/css/success.css">
    <title>Success</title>
</head>
<body> 
    <section class="display-success">
        <div class="succes">
                <div class="succesful">
                    <h2>Success!!</h2>
                    <a href="logout.php">Logout</a>
                    <p>Welcome <?php  echo $_SESSION["FIRSTNAME"];?>!  Your account has been logged in</p>
                    <p><i class="fas fa-check-circle fa-4x"></i></p>
                </div>
        </div>
        
    </section>
    
    
</body>
</html>