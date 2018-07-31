<?php require_once('header.php'); ?>
<?php  require_once('proccessform.php'); ?>


            <form class="" action="#" method="post" enctype="multipart/form-data">

              <div class="hidden">
                <input type="text" name="myname" value="">
                <input type="text" name="producttype" value="Bench">
              </div>

              <?php require_once('formGeneralDetails.php'); ?>

              <div class="container">
                <div class="row">
                  <div class="col">
                    <img src="http://zach.orbital.vision/img/dimensional/bench-diagram.png" alt="">
                  </div>
                </div>


                <div class="row padding-top">
                  <div class="col-xs-3 orbital-input dimension <?php echo $dimensionAClass; ?>">
                    <label>A:</label>
                    <input type="number" name="dimensions[a]" value="<?php echo $dimensionAValue; ?>">
                  </div>
                  <div class="col-xs-3 orbital-input dimension <?php echo $dimensionBClass; ?>">
                    <label>B:</label>
                    <input type="number" name="dimensions[b]" value="<?php echo $dimensionBValue; ?>">
                  </div>
                  <div class="col-xs-3 orbital-input dimension <?php echo $dimensionCClass; ?>">
                    <label>C:</label>
                    <input type="number" name="dimensions[c]" value="<?php echo $dimensionCValue; ?>">
                  </div>
                  <div class="col-xs-3 orbital-input dimension <?php echo $dimensionDClass; ?>">
                    <label>D:</label>
                    <input type="number" name="dimensions[d]" value="<?php echo $dimensionDValue; ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-3 orbital-input dimension <?php echo $dimensionEClass; ?>">
                    <label>E:</label>
                    <input type="number" name="dimensions[e]" value="<?php echo $dimensionEValue; ?>">
                  </div>
                  <div class="col-xs-3 orbital-input dimension <?php echo $dimensionFClass; ?>">
                    <label>F:</label>
                    <input type="number" name="dimensions[f]" value="<?php echo $dimensionFValue; ?>">
                  </div>
                  <div class="col-xs-3 orbital-input dimension <?php echo $dimensionGClass; ?>">
                    <label>G:</label>
                    <input type="number" name="dimensions[g]" value="<?php echo $dimensionGValue; ?>">
                  </div>
                  <div class="col-xs-3 orbital-input dimension <?php echo $dimensionHClass; ?>">
                    <label>H:</label>
                    <input type="number" name="dimensions[h]" value="<?php echo $dimensionHValue; ?>">
                  </div>
                </div>

                  <div class="row padding-bottom--half">
                    <div class="col-xs-3 orbital-input dimension <?php echo $dimensionIClass; ?>">
                      <label>I:</label>
                      <input type="number" name="dimensions[i]" value="<?php echo $dimensionIValue; ?>">
                    </div>
                  </div>

                  <div class="row">
                    <p>*All values must be in cm</p>
                  </div>

                </div>

              <?php require_once('formFileUploads.php'); ?>

            </form>


<?php require_once('footer.php'); ?>
