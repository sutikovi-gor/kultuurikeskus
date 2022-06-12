<!DOCTYPE html>
<html>
<head>

<?php

//require 'dbConnect.php';

?>

	<meta charset="utf-8">
	<link rel="stylesheet" href="/kultuurikeskus/css/style.css">
  
    
  
	<title>Sillamae Kultuurikeskus</title>
</head>
<body>
 
<header> 
<br><br><br>
<h1 class="text_header">VOKAALRÜHM KAPEL</h1>



 <nav> 
     <ul> 
       <li><a href="../index.php">Üldinfo</a></li> 
       <li><a href="">Kollektiivid</a>
       <ul class="sub-menu">
         <li><a href="..\rusitsi">Folklooriansambel Russitši</a></li>
         <li><a href="..\etyd\">Koreograafiastuudio Etüüd</a></li>
         <li><a href=".\">Vokaalrühm Kapel</a></li>
       </ul>
    </li>
       <li><a href="..\contacts\">Kontaktid</a></li>  
     </ul> 
    </nav> 



</header>



 <div class="global_block">

 	<h1>Meie uudised</h1>

  
<div class="card-photo_block1"> 
  <?php


$db_server='localhost';
$db_database='kultuurnews';
$db_user='root'; 
$db_password='';

//соединение с базой
$connection=mysqli_connect($db_server,$db_user, $db_password, $db_database);
mysqli_select_db($connection, "kultuurnews");
//контроль соединения
if (!$connection){
  die ("Ei saa ühendust andmebaasiga");
}
date_default_timezone_set('Europe/Tallinn');

$connection->set_charset('utf-8');


  

  $query = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC");
  $numrows = mysqli_num_rows($query);
  while ($row = mysqli_fetch_array($query)) {
  
  echo '<h2>'.$row['title'].'</h2>';
  echo '<br><img src="data:image/jpeg;base64,' . base64_encode($row['picture']) . '" width=200 height=150 /><br>';
  echo '<p>' .$row['text']. '</p>';
  
  }

?> 
<br><br><br>
 </div> 

 </div><!--

--><div class="global_block_2">
 	
    <p class="text">Vokaalrühm Kapel loodi 2006. aastal, juhendaja on Aleksandra Ananjeva. Ansambli eesmärk on laulu populariseerimine, kutsudes kokku lapsi ja täiskasvanuid, kes armastavad laulda. Harjutustunnid arendavad loomingulisi võimeid, laiendavad muusikalist silmaringi ja aitavad inimesel avaneda. Osalejad omandavad soolo- ja ansamblilaulmise oskused. <br><br>
    Kapeli repertuaar on väga laialdane ja mitmekesine ning seda täiendatakse pidevalt.  Osalejad esitavad laule erinevates keeltes. Kapel on rahvusvaheliste konkursside "Gintara Sklaida" (Vilnius), "Vana Riia muusika" (Riia), "Tallinn-Fest" (Tallinn), "Kuldne Hääl" ja "Balti Tähed" (Tartu) laureaat ning rahvusvahelise konkursi "Amberstar" (Riia - Stockholm - Riia) diplomand. Samuti ollakse rahvusvahelise festivali "Jürikuu" (Tallinn) kauaaegne ja mitmekordne võitja. Nad on osalenud ka festivalidel "Kammerton" ja "Квiти України".<br><br>

    Kapeli uksed on alati avatud neile, kes tahavad ja armastavad laulda. Rühm võtab vastu lapsi alates 5. eluaastast ja täiskasvanuid.


  <div>
  <img class="foto_rusici" src="../img/kapel.jpg">
  </div>

 </div><!--

 --><div class="global_block_3">

 	<h2>Meedia</h2>
  <nav>
      <a href="https://youtu.be/gTGs_GyHEBE">Kultuurikeskus online</a>
      <br>
      <br>
      <a href="https://www.facebook.com/sillamaekultuur">Facebook f</a>
      </nav>

 </div>

<footer>
  <div class="footer">

    <h3>Meie partnerid</h3>

      <div class="logo">

        <a href="http://www.sillamae.ee"><img class="logo" src="..\img\linnavalitsus.png" alt=""></a>
        <a href="https://www.sillamae.ee/et/web/rus/291"><img class="logo" src="..\img\vestnik.png" alt=""></a>
        <a href="https://www.silport.ee"><img class="logo" src="..\img\silport.jpg" alt=""></a>
      
      </div>
      
      <p class="bottom">Sillamäe 2022</p>
      <p class="bottom">Kõik õigused on kaitstud</p>
    
  </div>

</footer>

</body>




</html>