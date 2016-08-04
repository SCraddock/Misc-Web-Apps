 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Time Calc</title>
   </head>
   <body>

     <form class="" action="" method="post">
       Average Speed : <input type="text" name="speed" value=""> (mph)
       Distance : <input type="text" name="distance" value=""> (miles)
       <input type="submit" name="submit_time" value="Calculate">
     </form>

     <form class="" action="" method="post">
       Time : <input type="text" name="time" value=""> (mins)
       Distance : <input type="text" name="distance" value=""> (miles)
       <input type="submit" name="submit_speed" value="Calculate">
     </form>

     <form class="" action="" method="post">
       Average Speed : <input type="text" name="speed" value=""> (mph)
       Time : <input type="text" name="time" value=""> (mins)
       <input type="submit" name="submit_distance" value="Calculate">
     </form>

     <?php

     // distance  = speed * time
     // speed     = distance / time
     // time      = distance / speed

      if (isset($_POST['submit_time'])){
        $speed = $_POST['speed'];
        $distance = $_POST['distance'];
        $time = $distance / $speed; // hours
        $timem = $time * 60;
        echo $time . 'hrs' . '<br />';
        echo $timem . 'mins' . '<br />';
      };

      if (isset($_POST['submit_speed'])){

        $time = $_POST['time'];
        $distance = $_POST['distance'];
        $time = $time / 60; // because speed is in mph we have to use hours
        $speed = $distance / $time; // hours
        echo $speed . 'mph' . '<br />';
      };

      if (isset($_POST['submit_distance'])){

        $speed = $_POST['speed'];
        $time = $_POST['time'];
        $time = $time / 60; // because speed is in mph we have to use hours
        $distance = $speed * $time;
        echo $distance . 'miles' . '<br />';
      };
      ?>


   </body>
 </html>
