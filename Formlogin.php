    <!doctype html>
    <html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Login</title>
    </head>
    <body>
        
    	
    		


   
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
        if($_GET['pesan']=="belummasuk"){
            echo "<div class='alert'>Anda belum masuk, harap login terlebih dahulu !</div>";
        }
    }
    ?>
    <div class="container p-2 mb-2 text-white rounded d-flex justify-content-center"style="margin-top :50px">
                <form style="width: 400px" action="ceklogin.php" method="Post"> 
                <h1>LOGIN</h1>
    <div class="form-group">
    <div class="container p-2 mb-2 text-white">
    <label for="Username">Username</label>
    <input type="Username" name="username" class="form-control" id="Username" aria-describedby="Username"  >
    <small id="emailHelp" class="form-text text-muted">Jangan pernah membagikan Sandi anda</small>
    </div>
    </div>
    <div class="form-group">
    <div class="container p-2 mb-2 text-white">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    </div>
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary" href="FormHome.php">Submit</button>
    <a class="btn btn-primary" href="formloginsiswa.php" role="button">masuk sebagai siswa</a>
    </form>
    </div>	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>