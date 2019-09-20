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
					
        	    	<form method = "POST" action = "<?php echo base_url('controller_donor/donor_input'); ?>" name = "donor_id">
            			<br>
            			<div class="form-group">
            				<h5>Categories:</h5>
							
 							<input type = "checkbox" name = "category[]" value = "Canned Goods,">Canned Goods x <input type="number" placeholder="Qty" min="1" max = "5" style="width: 50px" name = "igQuantity[]" id = "igQuantity"></p>
					                       
            				<input type = "checkbox" name = "category[]" value = "Noodles,">Noodles x <input type="number" placeholder="Qty" min="1" max = "5" style="width: 50px"  name = "igQuantity[]" id = "igQuantity"></p>
							 
            				<input type = "checkbox" name = "category[]" value = "Canned Drinks,"> Canned Drinks x <input type="number" placeholder="Qty" min="1," max = "5" style="width: 50px"  name = "igQuantity[]" id = "igQuantity"></p>
							 
            				<input type = "checkbox" name = "category[]" value = "Milk,">Milk x <input type="number" placeholder="Qty" min="1" max = "5" style="width: 50px" name = "igQuantity[]" id = "igQuantity[]"></p>
							 
            				<input type = "checkbox" name = "category[]" value = "Juice Packs,">Juice Packs x <input type="number" placeholder="Qty"  style="width: 50px"  min = "1" max = "5" name = "igQuantity[]" value = ""></p>
						
            				<input type = "checkbox" name = "category[]" value = "Others"> Others <input type = "text" name = "ig_others" id = "ig_others"> x <input type="number" placeholder="Qty" min="1"  max = "5" style="width: 50px" name = "igQuantity[]" id = "igQuantity"></p>							
							
            				<input type="submit" class="btn btn-info" name = "submit">
					  </div>
    		        </form>
    	        </div>
    	    </div>
    	</div>

