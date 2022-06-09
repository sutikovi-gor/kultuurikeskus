<!DOCTYPE html>
<html>
<head>

<?php

//require 'dbConnect.php';

?>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
  
    
  
	<title>Sillamae Kultuurikeskus</title>
</head>
<body>
 
<header> 
<br><br><br>
<h1 class="text_header">ÜLDINFO</h1>



 <nav> 
     <ul> 
       <li><a href="">Üldinfo</a></li>  
       <li><a href="">Kollektiivid</a>
       <ul class="sub-menu">
         <li><a href=".\rusitsi\">Folklooriansambel Russitši</a></li>
         <li><a href=".\etyd\">Koreograafiastuudio Etüüd</a></li>
         <li><a href=".\kapel\">Vokaalrühm Kapel</a></li>
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
 	<p class="text">1949. a ehitatud Sillamäe Kultuurikeskuse hoone on tunnistatud arhitektuurimälestiseks, mis on nii seest kui väljast säilitanud eelmise sajandi 40.-50. aastate stalinistliku stiili arhitektuuri. Hoone keldrikorrusel kunagises pommivarjendis paikneb püsiekspositsioon, mis on pühendatud linna Nõukogudeaegsele perioodile.<br><br>

Kokku on Kultuurikeskuses 8 isetegevuskollektiivi, millest paljud on kuulsaks saanud nii Eestis kui ka välismaal. Tänapäeval osalevad meie kollektiivides üle 200 inimese.<br><br>

Lisaks kaunile arhitektuurile on Kultuurikeskus erinevate kontsertide ja ürituste toimumiskohaks, samuti pakutakse rentimiseks nii individuaalseid ruume kui ka kogu hoone.<br><br>

Sillamäe Kultuurikeskuse hoones on loodud tingimused selleks, et külastajatel oleks mugav. Meie jaoks on iga külastaja tähtis, püüame teha ürituste külastamise Kultuurikeskuses kõigile kättesaadavaks ja ligipääsetavaks.<br><br>

Külgukse juures on olemas spetsiaalne kaldtee ratastoolis külastajate jaoks, auto on võimalik parkida kohe külgukse kõrvale. Majas on olemas invatualett. Laialt avanevad kahepoolsed uksed võimaldavad ratastooliga liikuda ka fuajees.<br><br>

Kui külastajad vajavad abi ja juhendamist, siis on meie sõbralik personal alati valmis abi pakkuma.<br><br>

Tere tulemast Sillamäele,<br><br>

Tere tulemast Kultuurikeskusesse!</p>

 </div><!--

 --><div class="global_block_3">

 	<h2>Meedia</h2>
  <nav>
      <a href="https://youtu.be/gTGs_GyHEBE">Kultuurikeskus online</a>
      <br>
      <br>
      <a href="https://www.facebook.com/sillamaekultuur">Facebook f</a>
      </nav>

      <div >
        <h4>Autoriseerimise vorm</h4>
        <form action="./admin/auth.php" method="post">
        <input type="text" class="form-control" name="login" id="login" placeholder="sisestage login"><br>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="sisestage salasona"><br>

        <button class="btn btn-success" type="submit">Autoriseerida</button>
        </form>

      </div>

 </div>

<footer>
  <div class="footer">

    <h3>Meie partnerid</h3>

      <div class="logo">

        <a href="http://www.sillamae.ee"><img class="logo" src="img\linnavalitsus.png" alt=""></a>
        <a href="https://www.sillamae.ee/et/web/rus/291"><img class="logo" src="img\vestnik.png" alt=""></a>
        <a href="https://www.silport.ee"><img class="logo" src="img\silport.jpg" alt=""></a>
      
      </div>
      
      <p class="bottom">Sillamäe 2022</p>
      <p class="bottom">Kõik õigused on kaitstud</p>
    
  </div>

</footer>

</body>




</html>