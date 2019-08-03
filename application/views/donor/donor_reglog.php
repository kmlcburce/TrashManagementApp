<!-- <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Overpass:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <title>Donation Form</title>
    </head>

    <style>
        a.nav-link:hover{
            color: #655650;
        }
        a.nav-link{
            color: #ececec;
        }
        /*div.card{
            background-color: transparent; /*303c6c*/
        /*    color: #ececec;
            border: none;
        }*/
        a.btn-light{
            background-color: #b69b90;
            border-color: #b69b90;
            color: #ececec;
        }
        a.btn-light:hover{
            background-color: #837772;
            color: #ececec;
            border: none;
        }
        h4.card-title{
            border-bottom: 1px solid;
        }
        /*a.stretched-link{
            color: #b4dfe5; 
            letter-spacing: 1px;
        }*/
        body{
            background-color:#d9b09c;
            font-family: 'Overpass', sans-serif;
        }
        #tinynav{
            font-family: 'Quicksand', sans-serif;
            background-color: #e5d5cf;
            color: #655650;
        }
        .jumbotron{
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(<?php echo base_url('images/download.jpg'); ?>);
            background-position: center;
            height: 50vh;
        }
        h1.display-4{
            font-family: 'Overpass', sans-serif;
            font-size: 85px;        
        }
        div.bod{
            color: #ececec;
            text-align: center;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        p.lamaoquote{
            font-family: 'Oswald', sans-serif;
            letter-spacing: 2px;
        }
        #bottomnav{
            font-family: 'Quicksand', sans-serif;
            background-color: #e5d5cf;
            color: #655650;
        }
        a.footerlink{
            text-decoration: none;
            color: #655650;
        }
        a.footerlink:hover{
            color: #938884; /* #837772;*/
        }
    </style>
     -->
    <body>
    <nav class="navbar navbar-expand-lg navbar-light" id="tinynav">
        <!-- <table>
            <thead>  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email Us: lamao@fwp.com </thead> 
            <thead>  <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>Contact Us: +666 666 666 </thead>
            <thead>  <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Main Office: Hell </thead>
        </table> -->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav"> 
                <li class="nav-item" style="padding-right:20px"> <i class="far fa-envelope" style="padding-right:5px;"></i> Email Us: lamao@fwp.com </li> 
                <li class="nav-item" style="padding-right:20px" > <i class="fas fa-mobile-alt" style="padding-right:5px;"></i> Contact Us: +666 666 666 </li>
                <li class="nav-item"> <i class="fas fa-home" style="padding-right:5px;"></i> Main Office: Hell </li>
        </div>
    </nav>

    <nav class="navbar navbar-expand-sm" style="background-color: #b69b90; font-size: 18px;letter-spacing: 1px"> <!-- #d4bab0 -->
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li> 

            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT</a>
            </li> 

            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">DONATE</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">BE A BENEFACTOR</a>
            </li>

          </ul>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container bod">
            <h1 class="display-4">L A M A O </h1>
            <p class="lamaoquote">YOU MAKE A DIFFERENCE, WE MAKE IT EASIER</p>
        </div>
    </div>

        <div class="container">
          <div class="card-deck">
            <div class="card border-0">
              <div class="card-body" style="background-color: #b69b90; color:white">
                <h2 style="text-align: center;"> DONOR SIGN UP FORM </h2>
                    <div class="border-bottom"></div>

                        <form method="POST" action="<?php echo site_url('controller_donor/createDonor'); ?>">
                            <div class="form-group">
                                <br>
                                <h5>Email:</h5>
                                <input type="email" class="form-control" name="emailD" placeholder="Enter Email" required>
                            </div>

                            <div class="form-group">
                                <h5>Username:</h5>
                                <input type="text" class="form-control" name="usernameD" placeholder="Enter Username" required>
                            </div>

                            <div class="form-group">
                                <h5>Password:</h5>
                                <input type="password" class="form-control" name="passwordD" placeholder="Enter Password" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn" style="background-color: #837772; color:white">Sign Up</button>
                            </div>
                        </form>
              </div>
            </div>
            
            <div class="card border-0">
              <div class="card-body" style="background-color: #b69b90; color:white">
                <h2 style="text-align: center;"> DONOR LOGIN </h2>
                        <div class="border-bottom"></div>

                        <form>
                        <div class="form-group">
                            <br>
                            <h5>Username:</h5>
                            <input type="text" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="form-group">
                            <h5>Password:</h5>
                            <input type="password" class="form-control" placeholder="Enter Password" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn" style="background-color: #837772; color:white">Log In</button>
                        </div>
                    </form>
              </div>
            </div>
          </div>
        </div>