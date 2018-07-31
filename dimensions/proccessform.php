<?php

// set values
$nameValue = '';
$emailValue = '';
$productNameValue = '';

// Defaults set for Zach
$nameValue = 'Zach-Orbital';
$emailValue = 'Zach@orbital.vision';

$totalWidthValue = '';
$totalHeightValue = '';
$totalDepthValue = '';

$commentsValue = '';

$dimensionAValue = '';
$dimensionBValue = '';
$dimensionCValue = '';
$dimensionDValue = '';
$dimensionEValue = '';
$dimensionFValue = '';
$dimensionGValue = '';
$dimensionHValue = '';
$dimensionIValue = '';
$dimensionJValue = '';
$dimensionKValue = '';
$dimensionLValue = '';
$dimensionMValue = '';
$dimensionNValue = '';
$dimensionOValue = '';
$dimensionPValue = '';
$dimensionQValue = '';
$dimensionRValue = '';
$dimensionSValue = '';
$dimensionTValue = '';
$dimensionUValue = '';
$dimensionVValue = '';
$dimensionWValue = '';
$dimensionXValue = '';
$dimensionYValue = '';
$dimensionZValue = '';



$nameClass = '';
$emailClass = '';
$productnameClass = '';

$widthClass = '';
$heightClass = '';
$depthClass = '';

$dimensionAClass = '';
$dimensionBClass = '';
$dimensionCClass = '';
$dimensionDClass = '';
$dimensionEClass = '';
$dimensionFClass = '';
$dimensionGClass = '';
$dimensionHClass = '';
$dimensionIClass = '';
$dimensionJClass = '';
$dimensionKClass = '';
$dimensionLClass = '';
$dimensionMClass = '';
$dimensionNClass = '';
$dimensionOClass = '';
$dimensionPClass = '';
$dimensionQClass = '';
$dimensionRClass = '';
$dimensionSClass = '';
$dimensionTClass = '';
$dimensionUClass = '';
$dimensionVClass = '';
$dimensionWClass = '';
$dimensionXClass = '';
$dimensionYClass = '';
$dimensionZClass = '';

$frontfileClass = '';
$backfileClass = '';
$leftfileClass = '';
$rightfileClass = '';

$detailsfileClass = '';
$commentsfileClass = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST['submit'])){

    if(!empty($_POST['myname'])){
      die();
      echo "Access Denied... End of line";
    } else {

      $errors = array();      // array to hold validation errors

      // echo "<pre>";
      // print_r($_FILES);
      // echo "</pre>";

      // Sanitise Functions ====================================================
      // Cleans out strings, removing illegal characters
      function sanitiseString($dirty){
        $dirty = filter_var($dirty, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $clean = filter_var($dirty, FILTER_SANITIZE_STRING);
        return $clean;
      }
      // sanitises email address
      function sanitiseEmail($dirty){
        $clean = filter_var($dirty, FILTER_SANITIZE_EMAIL);
        return $clean;
      };
      // sanitises an interger
      function sanitiseNumber($dirty){
        $clean = filter_var($dirty, FILTER_SANITIZE_NUMBER_INT);
        return $clean;
      };

      // Calls and sanitises variables ====================================================
      // This makes all variables = a blank array??
      $frontfile = $backfile = $leftfile = $rightfile = $detailsfile = array();
      $allowedTypes = array('jpg', 'jpeg', 'png', 'zip');

      $frontfile = $_FILES['frontfile'];
      $backfile = $_FILES['backfile'];
      $leftfile = $_FILES['leftfile'];
      $rightfile = $_FILES['rightfile'];
      $detailsfile = $_FILES['detailsfile'];

      $dimensions = $_POST['dimensions'];

      // Filter/Sanitise dimension inputs
      foreach ($dimensions as $dimension => $value) {
        $newValue = sanitiseNumber(strip_tags(trim($value)));
        $newValue = str_ireplace("-", "", $newValue);
        $newValue = str_ireplace("+", "", $newValue);
        $dimensions[$dimension] = $newValue;

        $dimensionUpperCase = strtoupper($dimension);
        ${'dimension' . $dimensionUpperCase . 'Value'} = $newValue;

      }

      // getting the values of $_POST
      if(isset($_POST["name"])){
        $name = sanitiseString(strip_tags(trim($_POST["name"])));
      };
      if(isset($_POST["producttype"])){
        $producttype = sanitiseString(strip_tags(trim($_POST["producttype"])));
      };
      if(isset($_POST["product_name"])){
        $productname = sanitiseString(strip_tags(trim($_POST["product_name"])));
      };
      if(isset($_POST["email"])){
        $email = sanitiseEmail(filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL));
      };

      if(isset($_POST["total-width"])){
        $totalWidth = sanitiseNumber(strip_tags(trim($_POST["total-width"])));
      };
      if(isset($_POST["total-height"])){
        $totalHeight = sanitiseNumber(strip_tags(trim($_POST["total-height"])));
      };
      if(isset($_POST["total-depth"])){
        $totalDepth = sanitiseNumber(strip_tags(trim($_POST["total-depth"])));
      };


      if(isset($_POST["comments"])){
        $comments = sanitiseString(strip_tags(trim($_POST["comments"])));
      };



      $nameValue = $name;
      $emailValue = $email;
      $productNameValue = $productname;

      $totalWidthValue = $totalWidth;
      $totalHeightValue = $totalHeight;
      $totalDepthValue = $totalDepth;

      $commentsValue = $comments;
      // Error/validation reporting ====================================================

      // IF EMPTY
      if (empty($name)) {
          $errors['name'] = 'Name is required.';
      }
      if (empty($email)) {
          $errors['email']['email'] = 'Email is required.';
      }
      if (empty($producttype)) {
          $errors['producttype'] = 'Product type is required and should be set by default?';
      }
      if (empty($productname)) {
          $errors['product_name'] = 'Product name is required.';
      }
      // If Email valid format
      if(filter_var($email, FILTER_VALIDATE_EMAIL) != true ){
        $errors['email']['valid'] = 'Email not valid.';
      }

      if (empty($totalWidth)) {
          $errors['total-width'] = 'Total width is required.';
      }
      if (empty($totalHeight)) {
          $errors['total-height'] = 'Total height is required.';
      }
      if (empty($totalDepth)) {
          $errors['total-depth'] = 'Total depth is required.';
      }

      // Check if dimensions are empty (after being sanitised)
      foreach ($dimensions as $dimension => $value) {
        if (empty($value)) {
          $errors['dimensions'][$dimension] = 'Empty Dimension!!';
        }
      }

      // Checks an image has been uploaded
      // Then collected the file type of the images
      // Then checks to see if they are all allowed file types
      if($frontfile['name'] == ''){
          $errors['frontfile']['file'] = 'Please Upload an image';
      } else {
        $frontType = pathinfo($frontfile['name'], PATHINFO_EXTENSION); // 'rtf' NO DOT !!!
        if(!in_array($frontType,$allowedTypes) ) {
          $errors['frontfile']['fileType'] = 'Please upload an appropriate file with an allowed file type.';
        }
      }
      if($backfile['name'] == ''){
          $errors['backfile']['file'] = 'Please Upload an image';
      } else {
        $backType = pathinfo($backfile['name'], PATHINFO_EXTENSION); // 'rtf' NO DOT !!!
        if(!in_array($backType,$allowedTypes) ) {
          $errors['backfile']['fileType'] = 'Please upload an appropriate file with an allowed file type.';
        }
      }
      if($leftfile['name'] == ''){
          $errors['leftfile']['file'] = 'Please Upload an image';
      } else {
        $leftType = pathinfo($leftfile['name'], PATHINFO_EXTENSION); // 'rtf' NO DOT !!!
        if(!in_array($leftType,$allowedTypes) ) {
          $errors['leftfile']['fileType'] = 'Please upload an appropriate file with an allowed file type.';
        }
      }
      if($rightfile['name'] == ''){
          $errors['rightfile']['file'] = 'Please Upload an image';
      } else {
        $rightType = pathinfo($rightfile['name'], PATHINFO_EXTENSION); // 'rtf' NO DOT !!!
        if(!in_array($rightType,$allowedTypes) ) {
          $errors['rightfile']['fileType'] = 'Please upload an appropriate file with an allowed file type.';
        }
      }
      if($detailsfile['name'] == ''){
          $errors['detailsfile']['file'] = 'Please Upload an image';
      } else {
        $detailsType = pathinfo($detailsfile['name'], PATHINFO_EXTENSION); // 'rtf' NO DOT !!!
        if(!in_array($detailsType,$allowedTypes) ) {
          $errors['detailsfile']['fileType'] = 'Please upload an appropriate file with an allowed file type.';
        }
      }

      // echo "<pre>";
      // print_r($errors);
      // echo "</pre>";

      if ( ! empty($errors)) {
        // if there are items in our errors array, return those errors
        // .error-class

        // Sorting Error Messages
        if(array_key_exists('name', $errors) == true){
          $nameClass = "error-class";
        };
        if(array_key_exists('email', $errors) == true){
          $emailClass = "error-class";
        };
        if(array_key_exists('product_name', $errors) === true){
          $productnameClass = "error-class";
        };

        if(array_key_exists('total-width', $errors) === true){
          $widthClass = "error-class";
        };
        if(array_key_exists('total-height', $errors) === true){
          $heightClass = "error-class";
        };
        if(array_key_exists('total-depth', $errors) === true){
          $depthClass = "error-class";
        };

        // Dimension Error Messages
        if(array_key_exists('a', $errors['dimensions'])){
          $dimensionAClass = "error-class";
        };
        if(array_key_exists('b', $errors['dimensions'])){
          $dimensionBClass = "error-class";
        };
        if(array_key_exists('c', $errors['dimensions'])){
          $dimensionCClass = "error-class";
        };
        if(array_key_exists('d', $errors['dimensions'])){
          $dimensionDClass = "error-class";
        };
        if(array_key_exists('e', $errors['dimensions'])){
          $dimensionEClass = "error-class";
        };
        if(array_key_exists('f', $errors['dimensions'])){
          $dimensionFClass = "error-class";
        };
        if(array_key_exists('g', $errors['dimensions'])){
          $dimensionGClass = "error-class";
        };
        if(array_key_exists('h', $errors['dimensions'])){
          $dimensionHClass = "error-class";
        };
        if(array_key_exists('i', $errors['dimensions'])){
          $dimensionIClass = "error-class";
        };
        if(array_key_exists('j', $errors['dimensions'])){
          $dimensionJClass = "error-class";
        };
        if(array_key_exists('k', $errors['dimensions'])){
          $dimensionKClass = "error-class";
        };
        if(array_key_exists('l', $errors['dimensions'])){
          $dimensionLClass = "error-class";
        };
        if(array_key_exists('m', $errors['dimensions'])){
          $dimensionMClass = "error-class";
        };
        if(array_key_exists('n', $errors['dimensions'])){
          $dimensionNClass = "error-class";
        };
        if(array_key_exists('o', $errors['dimensions'])){
          $dimensionOClass = "error-class";
        };
        if(array_key_exists('p', $errors['dimensions'])){
          $dimensionPClass = "error-class";
        };
        if(array_key_exists('q', $errors['dimensions'])){
          $dimensionQClass = "error-class";
        };
        if(array_key_exists('r', $errors['dimensions'])){
          $dimensionRClass = "error-class";
        };
        if(array_key_exists('s', $errors['dimensions'])){
          $dimensionSClass = "error-class";
        };
        if(array_key_exists('t', $errors['dimensions'])){
          $dimensionTClass = "error-class";
        };
        if(array_key_exists('u', $errors['dimensions'])){
          $dimensionUClass = "error-class";
        };
        if(array_key_exists('v', $errors['dimensions'])){
          $dimensionVClass = "error-class";
        };
        if(array_key_exists('w', $errors['dimensions'])){
          $dimensionWClass = "error-class";
        };
        if(array_key_exists('x', $errors['dimensions'])){
          $dimensionXClass = "error-class";
        };
        if(array_key_exists('y', $errors['dimensions'])){
          $dimensionYClass = "error-class";
        };
        if(array_key_exists('z', $errors['dimensions'])){
          $dimensionZClass = "error-class";
        };


        // File Error Messages
        if(array_key_exists('frontfile', $errors)){
          $frontfileClass = "error-class";
        };
        if(array_key_exists('backfile', $errors)){
          $backfileClass = "error-class";
        };
        if(array_key_exists('leftfile', $errors)){
          $leftfileClass = "error-class";
        };
        if(array_key_exists('rightfile', $errors)){
          $rightfileClass = "error-class";
        };

      // Details are extras so aren't mandatory
      //  if(array_key_exists('detailsfile', $errors)){
      //    $detailsfileClass = "error-class";
      //  };

      } else {

        // List of filtered/sanitiesed variables for reference - with no erros
        /*
        *  $name = $_POST['name'];
        *  $email = $_POST['email'];
        *  $producttype = $_POST['producttype'];
        *  $productname = $_POST['product_name'];
        *  $dimensions = $_POST['dimensions']; // Dimensions Array [a-z]
        *
        *  $frontfile = $_FILES['frontfile'];
        *  $backfile = $_FILES['backfile'];
        *  $leftfile = $_FILES['leftfile'];
        *  $rightfile = $_FILES['rightfile'];
        *  $detailsfile = $_FILES['detailsfile'];
        */


        // Make Directories
        if (is_dir('/dimension-projects/') == TRUE) {
              mkdir("dimensional-projects", 0755, true);
        };

        $stamp = date('d-m-Y--H-i-s', time()); // 13-03-2017--13-51
        $fileStamp = $stamp . '--';
        $folderName = $fileStamp . $name;

        if (!file_exists('/dimension-projects/'.$folderName.'/')) {
              mkdir('dimension-projects/'.$folderName.'', 0755, true);
        };

        // Get temp file names
        $frontfileTempName = $frontfile['tmp_name'];
        $backfileTempName = $backfile['tmp_name'];
        $leftfileTempName = $leftfile['tmp_name'];
        $rightfileTempName = $rightfile['tmp_name'];

        if($detailsfile['name'] == ''){
        } else {
          $detailsfileTempName = $detailsfile['tmp_name'];
        };

        // Set out directory bits
        $currentDIR = __DIR__; // Gets full path to current file
        $path = $currentDIR . '/dimension-projects/'.$folderName.'/'; // __DIR__ doesn't have a trailing slash (unless is root) so we add one

        // Get the name of the file being uploaded
        $frontfileName = $frontfile['name'];
        $backfileName = $backfile['name'];
        $leftfileName = $leftfile['name'];
        $rightfileName = $rightfile['name'];

        if($detailsfile['name'] == ''){
        } else {
          $detailsfileName = $detailsfile['name'];
        };

        // Set the destination path for the uploaded files
        $frontfiledestination = $path .'front--'. $frontfileName;
        $backfiledestination = $path .'back--'. $backfileName;
        $leftfiledestination = $path .'left--'. $leftfileName;
        $rightfiledestination = $path .'right--'. $rightfileName;

        if($detailsfile['name'] == ''){
        } else {
          $detailsfiledestination = $path .'details--'. $detailsfileName;
        };

        // Passes on errors for debugging purposses
        // $errors['mail']['filename'] = $filename;
        // $errors['mail']['currentDIR'] = $currentDIR;
        // $errors['mail']['path'] = $path;
        // $errors['mail']['newName'] = $newName;
        // $errors['mail']['destination'] = $destination;

        if (move_uploaded_file( $frontfileTempName , $frontfiledestination ) == false ){
          die("front don't work");
        }
        if (move_uploaded_file( $backfileTempName , $backfiledestination ) == false ){
          die("bakc don't work");
        }
        if (move_uploaded_file( $leftfileTempName , $leftfiledestination ) == false ){
          die("left don't work");
        }
        if (move_uploaded_file( $rightfileTempName , $rightfiledestination ) == false ){
          die("right don't work");
        }

        if($detailsfile['name'] == ''){
        } else {
          if (move_uploaded_file( $detailsfileTempName , $detailsfiledestination ) == false ){
            die("details don't work");
          }
        };

        $to      = 'sam@orbital.vision';
        $subject = 'Dimension Form Submission';
        $emailContent = 'Hello my company name is :   ' . $name . "\n\n";
        $emailContent .= 'My Email is :   ' . $email . "\n\n";
        $emailContent .= 'My product type is :   ' . $producttype . "\n\n";
        $emailContent .= 'My product is called :   ' . $productname . "\n\n";
        $emailContent .= 'My product max dimensions are :   '."\n";
        $emailContent .= 'Width:   '. $totalWidth . "\n";
        $emailContent .= 'Height:   '. $totalHeight . "\n";
        $emailContent .= 'Depth:   '. $totalDepth . "\n\n \n\n";
        $emailContent .= 'Path to uloaded files:   ' . $path . "\n\n \n\n";
        $emailContent .= 'Associated folder name:    '. $folderName. "\n\n";

        $emailContent .= 'Dimensions:   ' ."\n";

        ksort($dimensions);

        foreach ($dimensions as $key => $value) {
          $emailContent .= $key.':   '. $value ."\n";
        };

        if (!empty($comments)) {
          $emailContent .= "\n\n";
          $emailContent .= "Extra Comments:    \n\n" . $comments;
        }

        $headers = 'From: sam@orbital.vision' . "\r\n" .
            'Reply-To: sam@orbital.vision' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

         mail($to, $subject, $emailContent, $headers);

         $_POST = array();
         $_FILES = array();

         // reset values
         $nameValue = '';
         $emailValue = '';
         $productNameValue = '';

         // Defaults set for Zach
         $nameValue = 'Zach-Orbital';
         $emailValue = 'Zach@orbital.vision';

         $totalWidthValue = '';
         $totalHeightValue = '';
         $totalDepthValue = '';

         $commentsValue = '';

         $dimensionAValue = '';
         $dimensionBValue = '';
         $dimensionCValue = '';
         $dimensionDValue = '';
         $dimensionEValue = '';
         $dimensionFValue = '';
         $dimensionGValue = '';
         $dimensionHValue = '';
         $dimensionIValue = '';
         $dimensionJValue = '';
         $dimensionKValue = '';
         $dimensionLValue = '';
         $dimensionMValue = '';
         $dimensionNValue = '';
         $dimensionOValue = '';
         $dimensionPValue = '';
         $dimensionQValue = '';
         $dimensionRValue = '';
         $dimensionSValue = '';
         $dimensionTValue = '';
         $dimensionUValue = '';
         $dimensionVValue = '';
         $dimensionWValue = '';
         $dimensionXValue = '';
         $dimensionYValue = '';
         $dimensionZValue = '';

      }
    }
  }
}

?>
