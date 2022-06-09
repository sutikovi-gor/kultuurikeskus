<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>
 
<header> 
<br><br><br>
<h1 class="text_header">FOLKLOORIANSAMBEL RUSITŠI</h1>



 <nav> 
     <ul> 
       <li><a href="\kultuurikeskus\">Üldinfo</a></li>  
       <li><a href="">Kollektiivid</a>
       <ul class="sub-menu">
         <li><a href="C:\xampp\htdocs\kultuurikeskus\index_2.html">Folklooriansambel Russitši</a></li>
         <li><a href="">About 2</a></li>
         <li><a href="">About 3</a></li>
       </ul>
    </li>
       <li><a href="">Kontaktid</a></li>  
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




 	<p class="text">Folklooriansambel Russitši asutati Slaavi Kultuuri Seltsi juures 1998. aastal. Alates 2000. aastast kuulub ansambel Russitši Sillamäe Kultuurikeskuse juurde. Alates 2002. aastast on ansamblit juhtinud Irina Dubrova. Ansambli repertuaaris on vene rahvalaule Venemaa erinevatest piirkondadest ja erinevatest folkloorisuundadest: pulmalaule, rahvakalendriga seotud laule, ringmängulaule, rahvamänge, lüürikat, tantsulaule, tšastuškasid jne, aga ka stiliseeritud ja populaarseid autorilugusid. Ansambel osaleb regulaarselt vabariiklikel, maakondlikel ja erinevate linnade folklooripühadel ning muudel üritustel. <br><br>Russitši on esinenud paljudes Eesti linnades. Ühistes programmides koos rahvatantsuansambliga Suveniir osalesid nad Europeade rahvamuusika- ja tantsufestivalil Saksamaal, Taanis, Hispaanias, Šveitsis ja FIFO rahvusvahelisel rahvafestivalil Šveitsis. Folklooriansambel Russitši on osalenud enam kui 200 ühiskontserdil ja andnud üle 50 iseseisva kontserdi.<br><br>
  Armastus rahvaloomingu ja vene laulu vastu köidab ja inspireerib alati ansambli liikmeid. Kaasaegne vaade folkloorile koos hooliva suhtumisega rahvuskultuuri võimaldab meil olla pidevas loomingulises otsingus, pakkuda inimestele rõõmu ja säilitada rahvatraditsioone.<br><br>
  Osalevad 18-aastased ja vanemad folkloorihuvilised.<br><br>
  Kontsertmeister on Konstantin Fomichev.


  <div>
  <img class="foto_rusici" src="img/rusici.jpg">
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