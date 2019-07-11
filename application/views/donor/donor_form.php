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

        			<form id = "name" name = "name">
            			<div class="form-group">
            				<br>
            				<h5>Name:</h5>
            				<input type="text" class="form-control" placeholder="Enter Name" required>
            			</div>
            			<br>
                            
            			<div class="form-group" method = "post" action = "controller_donor/donor_form">
            				<h5>Categories:</h5>
            				 <p> <input type="checkbox" name = "cannedGoods"> Canned Goods x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityCG"></p>

            				 <p><input type="checkbox" name = "Noodles"> Noodles x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityN"></p>

            				 <p><input type="checkbox" name = "cannedDrinks"> Canned Drinks x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityCD"></p>

            				 <p><input type="checkbox" name = "Milk"> Milk x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityM"></p>

            				 <p><input type="checkbox" name = "JuicePacks"> Juice Packs x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityJ"></p>

            				 <p><input type="checkbox" name = "others"> Others x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityO"></p>
            		    	</div>
						<br>


            			<div class="form-group">
            				<h5>Drop-Off Location:</h5>
            				<select class="form-control" name = "f_city">
            					<option>Carcar City</option>
            					<option>Cebu City</option>
            					<option>Danao City</option>
            					<option>Lapu-Lapu City</option>
            					<option>Mandaue City</option>
            					<option>Minglanilia Cebu</option>
            					<option>Naga City</option>
            					<option>Talisay City</option>
            					<option>Toledo City</option>
            				</select>
            			</div>

            			<div class="form-group">
            				<input type="submit" class="btn btn-info" name = "submit">
            			</div>
    		        </form>
    	        </div>
    	    </div>
    	</div>
