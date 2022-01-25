<?php
try{
  $db = new PDO("mysql:host=localhost;dbname=pokemons", "root", "root");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $x) { die("Secured"); }
