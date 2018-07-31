<div class="container">
  <p>Upload Photography</p>
  <div class="row ">
    <div class="col-xs-3 <?php echo $frontfileClass; ?>">
      <label for="">Front</label><h6 id="frontfilefilename">No files uploaded</h6>
      <input type="file" class="inputfile" id="frontfile" name="frontfile" value="">
      <label for="frontfile" class="inputfile-label"><span class="	glyphicon glyphicon-open"></span> Upload Front</label>
    </div>
    <div class="col-xs-3 <?php echo $backfileClass; ?>">
      <label for="">Back</label><h6 id="backfilefilename">No files uploaded</h6>
      <input type="file" class="inputfile" id="backfile" name="backfile" value="">
      <label for="backfile" class="inputfile-label"><span class="	glyphicon glyphicon-open"></span> Upload Back</label>
    </div>
    <div class="col-xs-3 <?php echo $leftfileClass; ?>">
      <label for="">Left Side</label><h6 id="leftfilefilename">No files uploaded</h6>
      <input type="file" class="inputfile" id="leftfile" name="leftfile" value="">
      <label for="leftfile" class="inputfile-label"><span class="	glyphicon glyphicon-open"></span> Upload Left</label>
    </div>
    <div class="col-xs-3 <?php echo $rightfileClass; ?>">
      <label for="">Right Side</label><h6 id="rightfilefilename">No files uploaded</h6>
      <input type="file" class="inputfile" id="rightfile" name="rightfile" value="">
      <label for="rightfile" class="inputfile-label"><span class="	glyphicon glyphicon-open"></span> Upload Right</label>
    </div>
  </div>

</div>

<div class="container">
  <div class="row">
    <div class="col-xs-3 <?php echo $detailsfileClass; ?>">
      <label for="">Details</label><h6 id="detailsfilefilename">No files uploaded</h6>
      <input type="file" class="inputfile" id="detailsfile" name="detailsfile" value="">
      <label for="detailsfile" class="inputfile-label"><span class="	glyphicon glyphicon-open"></span> Upload Details</label>
    </div>

    <div class="col-xs-9 <?php echo $commentsfileClass; ?>">
      <label for="comments">Extra Comments</label>
      <textarea name="comments" rows="2" cols="60" style="width:100%;height:100%;" placeholder="Any additional comments?"><?php echo $commentsValue;?></textarea>
    </div>
  </div>
</div>

<div class="container">
<input class="orbital-button orbital-button--submit" type="submit" name="submit" value="Submit">
</div>
