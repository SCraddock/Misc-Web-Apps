
    <div class="container">

    </div>

    <footer>

      <div class="container">
        <div class="contact">
          <h1>Want to work with us?</h1>
          <a href="http://orbital.vision/contact/" class="orbital-button"><p>Get in touch</p></a>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-xs-8">
            <span>&copy; <?php echo date("Y");?> Orbital Vision&nbsp; &nbsp; The Exchange, West End Mill, Leopold Street, Long Eaton, Derbyshire, NG10 4QD</span>
          </div>
          <div class="col-xs-4">
            <span><a href="https://twitter.com/orbital_agency?lang=en">Twitter</a> / <a href="https://www.instagram.com/orbital_agency/">Instagram</a> / <a href="https://www.linkedin.com/company/orbital-visual-marketing/">LinkedIn</a></span>
          </div>
        </div>
      </div>
    </footer>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready( function(){
      document.getElementById('frontfile').onchange = uploadOnChange;
      document.getElementById('backfile').onchange = uploadOnChange;
      document.getElementById('leftfile').onchange = uploadOnChange;
      document.getElementById('rightfile').onchange = uploadOnChange;
      document.getElementById('detailsfile').onchange = uploadOnChange;


        function uploadOnChange() {
          var inputID = this.id;
          var filename = this.value;
          var lastIndex = filename.lastIndexOf("\\");
          if (lastIndex >= 0) {
              filename = filename.substring(lastIndex + 1);
          }
          var filenameID = inputID+'filename';
          document.getElementById(filenameID).innerHTML = filename;
        };
    });
    </script>
  </body>
</html>
