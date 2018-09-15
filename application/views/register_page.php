<!-- <span>Register page</span>
<?php
//echo form_open('Auth/save_registration');
?>
<?php echo $type ?>
<input placeholder='username' name='username' />
<input type='hidden' name='type' value="<?php echo $type ?>" />
<input type='password' placeholder='password' name='password' />
<input type='password' placeholder='confirm password' name='password2' />
<input placeholder='first_name' name='first_name' />
<input placeholder='middle_name' name='middle_name' />
<input placeholder='last_name' name='last_name' />
<button>Submit</button>
<?php // echo form_close();?> -->

<?php $this->load->view('templates/landing_top'); ?>

  <!-- Page Content -->
  <div class="container">
       <section id="contact" class="gray-bg padding-top-bottom">
    	<div class="container bootstrap snippet">
            <div class="row">
                <div class="col-md-2"></div>
                <div class = "col-md-8">
                    <br>
                    <h3><?php echo 'Create a '.$type.' account' ?></h3>
                <?php echo form_open('Auth/save_registration',array('id'=>"Highlighted-form")); ?>

                     <input type='hidden' name='type' value="<?php echo $type ?>" />

					<div class="form-group">
					  <label class="control-label" for="username">Username</label>
					  <div class="controls">
						<input id="contact-name" name="username" placeholder="Username" class="form-control requiredField Highlighted-label" data-new-placeholder="Username" type="text" data-error-empty="Please enter your name">
						<i class="fa fa-user"></i>
					  </div>
					</div><!-- End name input -->
					
					<div class="form-group">
					  <label class="control-label" for="email">Email</label>
					  <div class=" controls">
						<input id="contact-mail" name="email" placeholder="Email" class="form-control requiredField Highlighted-label" data-new-placeholder="Email" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
						<i class="fa fa-envelope"></i>
					  </div>
                    </div><!-- End email input -->
                    

                    <div class="form-group">
					  <label class="control-label" for="first_name">First Name</label>
					  <div class="controls">
						<input id="contact-name" name="first_name" placeholder="First Name" class="form-control requiredField Highlighted-label" data-new-placeholder="First Name" type="text" data-error-empty="Please enter your name">
						<i class="fa fa-user"></i>
					  </div>
                    </div><!-- End name input -->
                    
                    <div class="form-group">
					  <label class="control-label" for="middle_name">Middle Name</label>
					  <div class="controls">
						<input id="contact-name" name="middle_name" placeholder="Middle Name" class="form-control requiredField Highlighted-label" data-new-placeholder="Middle Name" type="text" data-error-empty="Please enter your name">
						<i class="fa fa-user"></i>
					  </div>
					</div><!-- End name input -->

					<div class="form-group">
					  <label class="control-label" for="last_name">Last Name</label>
					  <div class="controls">
						<input id="contact-name" name="last_name" placeholder="Last Name" class="form-control requiredField Highlighted-label" data-new-placeholder="Last Name" type="text" data-error-empty="Please enter your name">
						<i class="fa fa-user"></i>
					  </div>
                    </div><!-- End name input -->
                    
                    <div class="form-group">
					  <label class="control-label" for="password">Password</label>
					  <div class="controls">
						<input id="contact-name" name="password" placeholder="Password" class="form-control requiredField Highlighted-label" data-new-placeholder="Password" type="password" data-error-empty="Please enter your name">
						<i class="fa fa-user"></i>
					  </div>
                    </div><!-- End name input -->
                    
                    <div class="form-group">
					  <label class="control-label" for="password2">Confirm Password</label>
					  <div class="controls">
						<input id="contact-name" name="password2" placeholder="Confirm Password" class="form-control requiredField Highlighted-label" data-new-placeholder="Confirm Password" type="password" data-error-empty="Please enter your name">
						<i class="fa fa-user"></i>
                      </div>
                      
					</div><!-- End name input -->
					<p><button name="submit" type="submit" class="btn btn-info btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-location-arrow"></i>Register</button></p>
					<input type="hidden" name="submitted" id="submitted" value="true">	
                <?php echo form_close()?><!-- End Highlighted-form -->
                </div>
			</div>	
		</div>	
	</section>
  </div>
  <!-- /.container -->

  <?php $this->load->view('templates/landing_bot'); ?>