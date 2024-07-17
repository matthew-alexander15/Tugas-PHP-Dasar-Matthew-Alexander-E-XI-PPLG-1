<?php
function coba(){
    static $a;
    $a = $a+1;
    return "Ini adalah pemanggilan ke-$a fungsi coba() <br />";
}

echo coba();
echo coba();
echo coba();
echo coba();