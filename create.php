<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter</title>
</head>
<body>
    <h3><center>Ajouter un etudiant</center></h3>
    <div class="container">
    <form  action="store.php" method="POST" accept-charset="utf-8">
             
              <div class="form-group">
                <label for="firstn">First Name:</label>
                <input type="text" class="form-control"  name="firstn">
              </div>
             <div class="form-group">
                    <label for="lastn">Last Name:</label>
                    <input type="text" class="form-control"  name="lastn">
                  </div>
             <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control"  name="email">
                  </div>
             <div class="form-group">
                    <label for="phone">phone:</label>
                    <input type="text" class="form-control"  name="phone">
                  </div>

        <center><button type="submit" class="btn btn-outline-danger">Valider</button></center>

    </form>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    </body>
</html>