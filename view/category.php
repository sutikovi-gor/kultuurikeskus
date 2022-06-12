<?php

echo "<li class='submenuunit'><a href='all'>KÕIK UUDISED</a></li><br>";
foreach ($arr as $value) {
    echo "<li class='text2'><a href='category?id=" . $value['id'] . "'>" . $value['name'] . '</a></li><br>';
}
?>