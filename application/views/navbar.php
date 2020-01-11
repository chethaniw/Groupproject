<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-light white ">
	<a class="navbar-brand" href="<?php echo base_url(); ?>index.php">
		<img src="<?php echo $this->config->item('base_url'); ?>/assets/img/wedlio_logo.png"  height="50" alt="mdb logo">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarColor03">
		<ul class="navbar-nav mr-auto">
			
			<li class="nav-item ">
				<?php echo anchor('Home/PlanningTools', 'PLANNING TOOLS', ['class' => 'nav-link']); ?> 
			</li>

			<li class="nav-item">
				<?php echo anchor('Home/WeddingVision', 'WEDDING VISION', ['class' => 'nav-link']); ?>
			</li>
			
			<li class="nav-item">
				<?php echo anchor('Home/LocalVendors', 'LOCAL VENDORS', ['class' => 'nav-link']); ?>	
			</li>
			
			<li class="nav-item">
				<?php echo anchor('Home/Budgeter', 'BUDGETER', ['class' => 'nav-link']); ?>
			</li>

			<li class="nav-item">
				<?php echo anchor('Home/Gallery', 'GALLERY', ['class' => 'nav-link']); ?>
			</li>

			<li class="nav-item">
				<?php echo anchor('Home/CustomerDashboard', 'CUSTOMER DASHBOARD', ['class' => 'nav-link']); ?>
			</li>
		

		</ul>
		<ul class="navbar-nav ml-auto font-weight-bold">
			<li class="nav-item ">
			<p><?php echo  $this->session->userdata('email'); ?>
			</li>
			<?php if( $this->session->userdata('logged_in')==false): ?>
			<li class="nav-item">
				<div class="dropdown">
					<a class="nav-link dropdown-toggle pink-text" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SIGN UP
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="<?php echo base_url('index.php/Home/customerRegistration');?>">Customer</a>
						<a class="dropdown-item" href="<?php echo base_url('index.php/Home/vendorRegistration');?>">Vendor</a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?php echo base_url('index.php/Home/login');?>" class="nav-link pink-text" role="button">LOGIN</a>
				
			</li>
			<?php else:?>
			<li class="nav-item">
				<a href="<?php echo base_url(); ?>index.php/login/logout" class="nav-link pink-text" role="button">LOGOUT</a>
				
			</li>
			<?php endif;?>

		</ul>
	</div>
</nav>

<!--/.Navbar -->
<!-- <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on bottom
</button> -->
	

