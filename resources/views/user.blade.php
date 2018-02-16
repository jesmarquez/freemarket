<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>freemarket</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><h1>freemarket</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Entrar</a>
            </li>
        </ul>
      </nav>

      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-8">
            <h2 align="center">get_user free market</h2>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">campo</th>
                  <th scope="col">value</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>username</td>
                  <td>{{ $username }}</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>nombre</td>
                  <td>{{ $firstname }}</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>apellido</td>
                  <td>{{ $lastname }}</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>email</td>
                  <td>{{ $email }}</td>
                </tr>
                <tr>
									<th scope="row">5</th>
									<td>country</td>
									<td>{{ $country }}</td>
                </tr>
                <tr>
									<th scope="row">6</th>
									<td>permalink</td>
									<td>{{ $permalink }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>  
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>