
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

                        <form method="POST" action="<?php echo site_url('controller_don/createDonor'); ?>">
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

                    <form method="POST" action="<?php echo base_url(); ?>controller_donor/login_validation">
                        <div class="form-group">
                            <br>
                            <h5>Username:</h5>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                        </div>

                        <div class="form-group">
                            <h5>Password:</h5>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="insert" value="Login" class="btn" style="background-color: #837772; color:white">
                            <!-- <button type="submit" class="btn" style="background-color: #837772; color:white">Log In</button> -->
                             <?php
                                echo $this->session->flashdata("error");
                             ?>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>