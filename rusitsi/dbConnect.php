<?php
// ваши данные
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
?>

<!-- ниже строки вставить в первый блок

<?php

echo '<ul>';

$query = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC");
    $numrows = mysqli_num_rows($query);
    while ($row = mysqli_fetch_array($query)) {
echo '<option>'.$row['title'].'</option>';
echo '<option>'.$row['text'].'</option>';
}

echo '<ul>'

?> 