
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
            <h2 style="text-align: center;"> BENEFICIARY LOGIN </h2>
                <div class="border-bottom"></div>

                    <form method="POST" action="<?php echo site_url('controller_beneficiary/createBeneficiary') ?>">
                        <div class="form-group">
                            <br>
                            <h5>First Name:</h5>
                            <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                        </div>

                        <div class="form-group">
                            <h5>Last Name:</h5>
                            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                        </div>

                        <div class="form-group">
                            <h5>Email::</h5>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <h5>Password:</h5>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <h5>Register as:</h5>
                            <input type="text" name="type" class="form-control" value="Benefactor" disabled>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn" style="background-color: #837772; color:white">Sign Up</button>
                        </div>
                    </form>
          </div>
        </div>
        
        <div class="card border-0">
          <div class="card-body" style="background-color: #b69b90; color:white">
            <h2 style="text-align: center"> BENEFICIARY LOGIN </h2>
                    <div class="border-bottom"></div>

                    <form method="POST" action="<?php echo base_url(); ?>controller_beneficiary/login_validation">
                    <div class="form-group">
                        <br>
                        <h5>Email:</h5>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                    </div>

                    <div class="form-group">
                        <h5>Password:</h5>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="insert" value="Login" class="btn" style="background-color: #837772; color:white">
                        <?php
                            echo $this->session->flashdata("error");
                        ?>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>