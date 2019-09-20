<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Gudea|Poppins:700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    </head>
    
    <body>
      <nav class="navbar navbar-expand-sm" style="background-color: #fbe8a6; font-size: 18px;letter-spacing: 1px">
		  	<ul class="navbar-nav">
			    <li class="nav-item">
			      <a class="nav-link" href="<?php echo base_url('controller_donor/about'); ?>">ABOUT</a>
			    </li>
                
			    <li class="nav-item">
			      <a class="nav-link" href="<?php echo base_url('controller_donor/faq'); ?>">FAQ</a>
			    </li>    
			    <li class="nav-item">
			      <a class="nav-link" href="<?php echo base_url('controller_donor/donor_form'); ?>">DONATE</a>
	        </li>
          
          <li class = "nav-item">
              <a class = "nav-link" href = "<?php echo base_url('controller_donor/logout'); ?>">LOGOUT</a>
          </li>
			</ul>
		</nav>
        <div class = "container">
            <h1> Welcome to the donor page! </h1>
        </div>
    </body>
</html>