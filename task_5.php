<?php 
function generatePassword($length){
$pass = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*()_+';
  return substr(str_shuffle($pass), 0, $length);
}
echo generatePassword(12);
?>