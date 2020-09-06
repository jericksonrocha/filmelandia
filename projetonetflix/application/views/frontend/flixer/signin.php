<!-- TOP LANDING SECTION -->
<div style="width:100%; height:90px; background-color:#000; border-bottom:solid 1px #dcdde0;">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 40px; height: 50px;" />
		</a>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4" style="clear: both;">
			<div style="background-color: #f3f3f3; padding: 10px;">
				<?php 
					if ($this->session->flashdata('signin_result') == 'failed'):
					?>
				<!-- ERROR MESSAGE -->
				<div class="alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?php echo get_phrase('Login_failed! Please_try_again.');?>
				</div>
				<?php endif;?>
				
				<form method="post" action="<?php echo base_url();?>index.php?home/signin" style="margin: 0px 0px;">
					<h3 class="black_text"><?php echo get_phrase('sign_in');?></h3>
					<div class="black_text">
						<?php echo get_phrase('Email');?> 
					</div>
					<div class="black_text">
						<input type="email" name="email" style="padding: 10px; width:400px;"/>
					</div>
					<div class="black_text" style="margin-top: 20px;">
						<?php echo get_phrase('Password');?>
					</div>
					<div class="black_text">
						<input type="password" name="password" style="padding: 10px; width:400px;" />
					</div>
					<button class="btn btn-danger" style=" width: 400px; margin: 20px 0px;"> <?php echo get_phrase('sign_in');?> </button>
				</form>
				<a href="<?php echo base_url();?>index.php?home/forget"><?php echo get_phrase('Forget_password');?>?</a>
				|
				<a href="<?php echo base_url();?>index.php?home/signup"><?php echo get_phrase('Sign_up');?></a>
			</div>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>
