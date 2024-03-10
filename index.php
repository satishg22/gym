<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<style type="text/css">
  #inputbtn:hover {
    cursor: pointer;
  }
</style>

<body style="background:url('360_F_558640324_2dTTiseZNbCW0UHlEWulwt4d0DjA8rYo-transformed.jpeg'); background-size: cover;">
  <h1 style="color: #FFFFFF;    background-color: rgba(0, 0, 0, 0.5);border-bottom:2px solid orangered;padding-bottom:5px;"><strong>
      <center>WE 3 GYM</center>
    </strong></h1>
  <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
    <div class="row align-items-center ">
      <div class="col" style="margin-top:30px;margin-bottom:50px;margin-left:120px;margin-right:40px;color:#34495E;">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card" style="height:600px;width:400px;">
            <img src="images/cardback.jpg" class="card-img-top">
            <div class="card-body">
              <center>
                <h5><strong>ADMIN LOGIN</strong></h5><br>
                <form class="form-group" method="POST" action="admin-panel.php">
                  <div class="row">
                    <div class="col-md-4"><label>Username: </label></div>
                    <div class="col-md-8"><input type="text" name="username" class="form-control"
                        placeholder="enter username" required /></div><br><br>
                    <div class="col-md-4"><label>Password: </label></div>
                    <div class="col-md-8"><input type="password" class="form-control" name="password"
                        placeholder="enter password" required /></div><br><br><br>
                  </div>
                  <center><input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary">
                  </center>
                </form>


              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="col-md-7"></div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <div class="card" style="height:600px;width:400px;">
            <img src="includes\images\Fitness-1.webp" class="card-img-top">
            <div class="card-body">
              <center>
                <h5><strong>CUSTOMER LOGIN</strong></h5><br>
                <form class="form-group" method="POST" action="customer.php">
                  <div class="row">
                    <div class="col-md-4"><label>Username: </label></div>
                    <div class="col-md-8"><input type="text" name="username" class="form-control"
                        placeholder="enter username" required /></div><br><br>
                    <div class="col-md-4"><label>Password: </label></div>
                    <div class="col-md-8"><input type="password" class="form-control" name="password"
                        placeholder="enter password" required /></div><br><br><br>
                  </div>
                  <center><input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary">
                  </center>
                </form>


              </center>
            </div>
          </div>
        </div>
        <div class="col-md-7"></div>
      </div>
    </div>
  </div>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
</body>

</html>