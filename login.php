
<?php
if($_POST){
    if(($_POST["user"]=="Fabian") && ($_POST['password']=="root")){
        echo "ok";
        $_SESSION["user"]="Fabian";
        header("location:index.php");

    }
    else{
        echo "<script>alert('user or password incorrect');</script>";
    }    
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset = "utf-8">
  <meta name    = "viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href  ="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity ="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="row justify-content-center align-items-center g-4">
            </br>
            <div class="col-md-4">
                </br>
                
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-body">

                        <H2>Login</H2>

                        <form action="login.php" method="post">
                            user:<input class="form-control" type ="text" name="user" id ="">
                            </br>
                            password:<input class="form-control" type ="password" name="password" id ="">
                            </br>
                            <button   class="btn btn-success"  type="submit">Entra a la galeria</button>
                        </form>
                    </div>
                </div>

            </div>            
            <div class="col-md-4"> </div>
        </div>
            

    </div>

    
</body>

</html>