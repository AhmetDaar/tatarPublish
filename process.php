
      <?php
<<<<<<< HEAD
        $host = "giylem.mysql";
        $user = "giylem_mysql";
        $password = "/7=zXFNw";
        $database = "giylem_db";
=======


        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "tatarPublish";
>>>>>>> 77b37d5b6c36ac840d4cf2f6ad746ce29030779a



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
<<<<<<< HEAD
      


      if (mysqli_num_rows($result) > 0) {
          die('<h2>Котлыйбыз! Сез нәшриятебезнең беренче электрон китабын сатып алдыгыз!</h2><span>Җиһазыгызга туры килгән форматны сайлагыз</span><br><br><div class="wrapper"><a href="books/Sughysh.epub"><img class="download" src="img/icons/epub2.png"></a> <a href=""><img class="download" src="img/icons/fb22.png"></a> <a href="https://vk.com/neshriyat"><img class="download" src="img/icons/mobi2.png"></a></div>');
=======



      if (mysqli_num_rows($result) > 0) {


<<<<<<< HEAD
          die('<h2>Котлыйбыз! Сез нәшриятебезнең беренче электрон китабын сатып алдыгыз!</h2><span>Җиһазыгызга туры килгән форматны сайлагыз</span><br><br><div class="wrapper"><a href="books/Sughysh.epub"><img class="download" src="img/icons/epub2.png"></a> <a href=""><img class="download" src="img/icons/fb22.png"></a> <a href="https://vk.com/neshriyat"><img class="download" src="img/icons/mobi2.png"></a></div>');
=======
          die('<h2>Котлыйбыз! Сез нәшриятебезнең беренче электрон китабын сатып алдыгыз!</h2><br><div class="wrapper"><a href="https://vk.com/neshriyat"><img class="download" src="img/icons/epub2.png"></a> <a href=""><img class="download" src="img/icons/fb22.png"></a> <a href="https://vk.com/neshriyat"><img class="download" src="img/icons/mobi2.png"></a></div>');
>>>>>>> 74d7c9e30340f13a657be6a9e826623d30359097
>>>>>>> 77b37d5b6c36ac840d4cf2f6ad746ce29030779a
      } else {


         echo '<center><h2>Сез ялгыштыгыз :(</h2><br><a href="#" title="" class="btn btn-primary" onclick="refresh()">Яңадан тикшерергә</a></center>';
             }
           }


?>


   



