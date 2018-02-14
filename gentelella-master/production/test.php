<?php
$text="three stars";
$stars=0;
if(strpos($text,"five") !==FALSE) {
  $stars=5;
}
if(strpos($text,"four")!==FALSE) {
  $stars=4;
}
if(strpos($text,"three")!==FALSE) {
  $stars=3;
}
if(strpos($text,"two")!==FALSE) {
  $stars=2;
}
if(strpos($text,"one")!==FALSE ) {
  $stars=1;
}
echo $stars;
echo strstr($text,"three");
?>