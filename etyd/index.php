<!DOCTYPE html>
<html>
<head>

<?php

//require 'dbConnect.php';

?>

	<meta charset="utf-8">
	<link rel="stylesheet" href="/diplom/css/style.css">
  
    
  
	<title>Sillamae Kultuurikeskus</title>
</head>
<body>
 
<header> 
<br><br><br>
<h1 class="text_header">KOREOGRAAFIASTUUDIO ETÜÜD</h1>



 <nav> 
     <ul> 
       <li><a href="../index.php">Üldinfo</a></li> 
       <li><a href="">Kollektiivid</a>
       <ul class="sub-menu">
         <li><a href="..\rusitsi">Folklooriansambel Russitši</a></li>
         <li><a href=".\">Koreograafiastuudio Etüüd</a></li>
         <li><a href="..\kapel\">Vokaalrühm Kapel</a></li>
       </ul>
    </li>
       <li><a href=".\contacts\">Kontaktid</a></li>  
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
 	
  <p class="text">Koreograafiastuudio Etüüd asutati 1988. aastal Sillamäe linna kultuurimajas. Stuudio juhataja on Lilia Hudjakova. Aastas õpib Etüüdis kuni 40 inimest. Repertuaar sisaldab kõige mitmekesisemat koreograafiat: klassikalist, stiliseeritud rahvalikku tantsu, akrobaatikat, tänapäevast koreograafiat. <br><br>
  Kontsertidel on pealtvaatajal võimalus näha tantsunumbreid igale maitsele: kõik õpilased, alates armsatest väikelastest kuni kollektiivi täiskasvanud liikmeteni, armastavad kontsertidel osaleda. Koreograafiastuudio <br><br>
  Etüüd võtab osa kõigist Kultuurikeskuses toimuvatest linna- ja piirkondlike ürituste raames toimuvatest kontsertidest, samuti osaleb regulaarselt Jõhvi rahvusvahelise balletifestivali laste galakontserdil. Aastate jooksul on Etüüd võitnud mitmeid kõrgeid auhindu: ta on rahvusvaheliste võistluste mitmekordne laureaat ja diplomand Eestis, Lätis, Venemaal, Poolas; Grand Prix võitja Bulgaarias, Obzoris toimunud konkursil "Nevskaja Volna" ja pälvinud "Rossotrudnichestvo" karika Sozopolis (samuti Bulgaarias).<br><br>
  Osalejate vanus: 3 kuni 20 aastat.


  <div>
  <img class="foto_rusici" src="../img/etyd.jpg">
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