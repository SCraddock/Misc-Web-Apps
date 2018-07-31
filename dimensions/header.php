<?php require_once('meta.php'); ?>

<div class="container">
 <div class="row">
   <div class="col-xs-3 col-logo">
     <a href="http://orbital.vision">
       <img src="/img/orbital_logo_purple.svg" alt="Orbital Logo">
     </a>
   </div>
   <div class="col-xs-9">

   </div>
 </div>
</div>


<!-- Wrap all page content here -->

    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h1>Orbital 3D CAD Dimension Sheet</h1>
            <ol>
              <li><p>Select your product</p></li>
              <li><p>Fill in selected form by inputting your dimensions and uploading images relating to the different sides of the product.</p></li>
              <li><p>Once this is done submit the form to pass the information onto the team.</p></li>
            </ol>
        </div>
    </div>

    <div class="container">
      <div class="border-bottom">
        <div class="row ">
          <div class="col-xs-3"></div>
          <div class="col-xs-6">
      
            <?php if( $_SERVER['REQUEST_URI'] == "index.php" || $_SERVER['REQUEST_URI'] == "/") { ?>
              <a href="/">
                <h4 class="indicator-link float-left indicator--active clickable">
                  Product
                </h4>
              </a>
                <h4 class="indicator-link float-right">
                  Dimensions
                </h4>
            <?php } else { ?>
              <a href="/">
                <h4 class="indicator-link float-left clickable">
                  Product
                </h4>
              </a>
                <h4 class="indicator-link float-right indicator--active">
                  Dimensions
                </h4>
            <?php } ?>

          </div>
          <div class="col-xs-3"></div>
        </div>
      </div>
    </div>
