<nav class="navbar navbar-expand-sm" style="background-color: #fbe8a6; font-size: 18px;letter-spacing: 1px">
		  	<ul class="navbar-nav">
			    <li class="nav-item">
			      <a class="nav-link" href="echo base_url()">ABOUT</a>
			    </li>

			    <li class="nav-item">
			      <a class="nav-link" href="#">FAQ</a>
			    </li>
				
			    <li class="nav-item">
			      <a class="nav-link" href="#">DONATE</a>
			    </li>
				
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-left: 1500px">LOGOUT</a>
                </li>
			</ul>
		</nav>
    <br>
    <br>
	
    <br>
    	<div class="d-flex justify-content-center" id="donate">
            <div class="card col-md-4 shadow p-3 mb-5"style="background-color: #303c6c">
             	<div class="card-body">
        			<h2 style="text-align: center; font-family: 'Abril Fatface', cursive;"> DONATION FORM </h2>
        			<div class="border-bottom"></div>
                    
        			<form method = "post" action = "<?php echo base_url('controller_donor/createDonor'); ?>">
            			<br>
            			<div class="form-group">
            				 <h5>Categories:</h5>
                             
                             <p>Username or Email</p> 
            				 <p><input type="text" name = "username"  id = "username"></p>
                             
                             <p>Password</p>
                             <p><input type = "password" name = "password" id = "password"></p>
                             
                             <p>Confirm Password</p>
                             <p><input type = "password" name = "Confpassword" id = "password"></p>
            		    </div>
						<br>
                        
            			<div class="form-group">
            				<input type="submit" class="btn btn-info" name = "submit">
            			</div>
    		        </form>
    	        </div>
    	    </div>
    	</div>
