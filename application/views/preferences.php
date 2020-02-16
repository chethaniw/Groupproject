<!DOCTYPE html>
 <html lang="en">

 <head>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" type="image/png" href="<?php echo base_url('assets/dashboard/img/favicon.jpg'); ?>">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Wedlio</title>
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <!-- Bootstrap core CSS -->
     <link href="<?php echo base_url(); ?>assets/homepage/css/bootstrap.min.css" rel="stylesheet">
     <!-- Material Design Bootstrap -->
     <link href="<?php echo base_url(); ?>assets/homepage/css/mdb.min.css" rel="stylesheet">
     <!-- Your custom styles (optional) -->
     <link href="<?php echo base_url(); ?>assets/homepage/css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
         integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
     </script>

 </head>

 <body>
     <?php include_once("navbar.php") ?>

<div class="flex-container">

  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card" style="width: 500px; margin:0 auto;">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
		  	<li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url(); ?>index.php/preferences/" role="tab" aria-controls="description" aria-selected="true">Recommendations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/preferences/photography" role="tab" aria-controls="photography" aria-selected="true">Wedding Photography</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="<?php echo base_url(); ?>index.php/preferences/receptions" role="tab" aria-controls="history" aria-selected="false">Reception Halls</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/preferences/florists" role="tab" aria-controls="deals" aria-selected="false">Florists</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/preferences/photography" role="tab" aria-controls="deals" aria-selected="false">Dj's and Bands</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <h4 class="card-title">Meet Your Wedding Vendor Team</h4>
          <h6 class="card-subtitle mb-2">Find and book the best wedding vendors with help from The Wedlio.</h6>
          
           <div class="tab-content mt-5">
            <div class="tab-pane active" id="description" role="tabpanel">
            </div>
             
            <div class="tab-pane" id="weddingphotography" role="tabpanel" aria-labelledby="history-tab">  
			<form action="<?php echo base_url(); ?>index.php/preferences/photography" method="post">
                     <div class="form-group">
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-money"></i> </span>
                             </div>
                             <input name="price" class="form-control" placeholder="Price" type="text">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-newspaper-o"></i> </span>
                             </div>
                             <input name="description" class="form-control" placeholder="extra notes" type="text">
                         </div>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary btn-block"> Next</button>
                     </div>
					</form>
					<a href="#" class="card-link text-danger">Next</a>
            </div>
             
            <div class="tab-pane" id="receptionhalls" role="tabpanel" aria-labelledby="deals-tab">
			<form action="<?php echo base_url(); ?>index.php/preferences/receptionhalls" method="post">
                     <div class="form-group">
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-money"></i> </span>
                             </div>
                             <input name="price" class="form-control" placeholder="Price" type="text">
                         </div>
					 </div>
					 <div class="form-group">
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-newspaper-o"></i> </span>
                             </div>
                             <input name="capacity" class="form-control" placeholder="capacity" type="text">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"> <i class="fa fa-newspaper-o"></i> </span>
                             </div>
                             <input name="description" class="form-control" placeholder="extra notes" type="text">
                         </div>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary btn-block"> Next</button>
                     </div>
					</form>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>

  <script>
  $('#bologna-list a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
  </script>
  
  <?php include_once("footer.php") ?>

