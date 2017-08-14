
      <?php


        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "tatarPublish";



       // Establish server connection and select database
        $dbh = mysqli_connect($host, $user, $password, $database);

      if (mysqli_connect_errno()) {
          die('Unable to connect to database ' . mysqli_connect_error());
       } else {

      // run query to fetch records
        // $result = mysqli_query($dbh, "SELECT  email_address FROM users ");
       /* fetch associative array */


      $code = $_POST['code'];
      $query = "SELECT * FROM `codes` WHERE `code` = '$code'";
      $result = mysqli_query($dbh, $query); //$link is the connection



      if (mysqli_num_rows($result) > 0) {


          die('<h2>Котлыйбыз! Сез нәшриятебезнең беренче электрон китабын сатып алдыгыз!</h2><span>Җиһазыгызга туры килгән форматны сайлагыз</span><br><br><div class="wrapper"><a href="books/Sughysh.epub"><img class="download" src="img/icons/epub2.png"></a> <a href=""><img class="download" src="img/icons/fb22.png"></a> <a href="https://vk.com/neshriyat"><img class="download" src="img/icons/mobi2.png"></a></div>');
      } else {


         echo '<center><h2>Сез ялгыштыгыз :(</h2><br><a href="#" title="" class="btn btn-primary" onclick="refresh()">Яңадан тикшерергә</a></center>';
             }
           }


?>


   



