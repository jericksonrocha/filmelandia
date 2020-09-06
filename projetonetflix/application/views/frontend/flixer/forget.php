<!-- TOP LANDING SECTION -->
<div style="height:93px;width:100%;background-color: #000">
	
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
			<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 40px; height: 50px;" />
		</a>
	</div>
    <div style="float: right;margin: 18px 40px; height: 50px;">
        <a href="<?php echo base_url();?>index.php?home/signin" class="" style="color: #e50914;font-weight: 700;font-size: 20px;">
        	<?php echo get_phrase('sign_in');?></a>
    </div>
</div>
<div class="container">
	<div action="<?php echo base_url();?>index.php?home/forget" method="post">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4" style="clear: both;">
				<div style="background-color: #f3f3f3; padding: 30px;">
					<h3 class="black_text"><?php echo get_phrase('Retrieve email or password');?></h3>
					<?php echo get_phrase('Contact Us By Telegram And Request A New Password.');?>
					<a href="<?php echo get_phrase('Link_Telegram');?>"><button class="btn btn-primary" style=" width: 100%; margin: 20px 0px;"><?php echo get_phrase('Request_password');?></button></a>
				</div>
			</div>
		</div>
		<hr>
<!-- MIDDLE TAB SECTION -->
	<?php include 'footer.php';?>
</div>
