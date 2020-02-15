<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-light white ">
    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php">
        <img src="<?php echo base_url(); ?>assets/homepage/wedlio_img/WEDLIO5.png" height="50" alt="mdb logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
        aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <?php echo anchor('Welcome/planningTools', 'PLANNING TOOLS', ['class' => 'nav-link']); ?> </li>
            <li class="nav-item">
                <?php echo anchor('Welcome/adminPannel', 'WEDDING VISION', ['class' => 'nav-link']); ?>

            </li>
            <li class="nav-item">
                <?php echo anchor('Welcome/localVendors', 'LOCAL VENDORS', ['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item">
<<<<<<< HEAD
                <?php echo anchor('Welcome/vendorDashboard', 'VENDOR DASHBOARD', ['class' => 'nav-link']); ?> 
=======
                <a class="nav-link" href="#">GALLERY</a>
>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">BUDGETER
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
				<?php echo anchor('Home/CustomerDashboard', 'CUSTOMER DASHBOARD', ['class' => 'nav-link']); ?>
			</li>

        </ul>
        <ul class="navbar-nav ml-auto font-weight-bold">
            <li class="nav-item ">
<<<<<<< HEAD
                <p><?php echo  $this->session->userdata('email'); ?>
=======
                <p><?php echo  $this->session->userdata('id'); ?>
>>>>>>> 0438689a3f0eb88e7634ae0e4a4028e409974674
            </li>
            <?php if ($this->session->userdata('logged_in') == false) : ?>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle pink-text" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">SIGN UP
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item"
                                href="<?php echo base_url(); ?>index.php/customer/customer_registration">Customer</a>
                            <a class="dropdown-item"
                                href="<?php echo base_url(); ?>index.php/vendor/vendor_registration">Vendor</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/admin">Admin</a>
                        </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/login" class="nav-link pink-text" role="button">LOGIN</a>

            </li>
            <?php else : ?>
            <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/login/logout" class="nav-link pink-text"
                    role="button">LOGOUT</a>

            </li>
            <?php endif; ?>

        </ul>
    </div>
</nav>





<!--/.Navbar -->
<!-- <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on bottom
</button> -->
