<div class="container">
  <div class="row">
    <div class="col-xs-4 orbital-input <?php echo $nameClass; ?>">
      <label for="name">Company Name:</label><br>
      <input type="text" name="name" value="<?php echo $nameValue;?>">
    </div>
    <div class="col-xs-4 orbital-input <?php echo $emailClass; ?>">
      <label for="email">Email:</label><br>
      <input type="email" name="email" value="<?php echo $emailValue;?>">
    </div>
    <div class="col-xs-4 orbital-input <?php echo $productnameClass; ?>">
      <label for="product_name">Product Name:</label><br>
      <input type="text" name="product_name" value="<?php echo $productNameValue;?>">
    </div>
  </div>

  <div class="row padding-top">
    <div class="col-xs-4 orbital-input <?php echo $widthClass; ?>">
      <label for="total-width">Total Width(cm):</label><br>
      <input type="number" name="total-width" value="<?php echo $totalWidthValue;?>">
    </div>
    <div class="col-xs-4 orbital-input <?php echo $heightClass; ?>">
      <label for="total-height">Total Height(cm):</label><br>
      <input type="number" name="total-height" value="<?php echo $totalHeightValue;?>">
    </div>
    <div class="col-xs-4 orbital-input <?php echo $depthClass; ?>">
      <label for="total-depth">Total Depth(cm):</label><br>
      <input type="number" name="total-depth" value="<?php echo $totalDepthValue;?>">
    </div>
  </div>
</div>
