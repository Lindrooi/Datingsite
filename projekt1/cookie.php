<?php //Om det inte finns en kaka, skapa en.
if(!isset($_COOKIE["firstTimer"])){       //86400 är en dag, i sekunder. Alltså en månad.
    setcookie("firstTimer", date('d-m-y G:i:s'), time() + 86400 * 30, "/");
}
else{
    print("Welcome back! You visted this site for the first time: " . $_COOKIE["firstTimer"]);
}
?>