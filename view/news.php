<?php

class ViewNews {

    public static function NewsByCategory($arr) {
        foreach ($arr as $value) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($value['picture']) . '" width=150 /><br>';
            echo "<h2>" . $value['title'] . "<h2>";
            echo "<a href='news?id=" . $value['id'] . "'> edasi </a><br><br><br>";
        }
    }

    public static function AllNews($arr) {


        foreach ($arr as $value) {
            echo "<li >" . $value['title'];
            echo "<a href='news?id=" . $value['id'] . "'> edasi </a></li><br>";
        }
    }

    public static function ReadNews($n) {

        echo "<h2>" . $n['title'] . "<h2>";
        echo '<br><img src="data:image/jpeg;base64,' . base64_encode($n['picture']) . '" width=150 /><br>';
        echo "<h4>" . $n['text'] . "<h4>";
    }


}

?>