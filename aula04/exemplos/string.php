<?php
$nome = $_GET['nome'] ?? '';
/*
 * printf
 */

// printf("%s tem %.2f de altura", "Igor", 1.80);

/*
 * strlen
 */
echo "<br>";
// $novo = strlen("Léo"); // 4
// $novo = strlen(utf8_decode("Léo")); // 3
/*
 *  wordwrap
 */

// $novo = wordwrap($nome, 5, "<br>\n");

/*
 * trim
 */

//$novo = trim($nome);

/*
* ltrim
 * /
 */
 
 // $nome = ltrim($nome);

 /*
* rtrim
 * /
 */
 
 // $nome = rtrim($nome);

/*
 * Explode
 */

 // $linguagens = "PHP-Java-Python";
 // $novo = explode("-", $linguagens);
 
 /*
  *  str_split
  */

// $linguagens = "PHP-Java-Python";
// $novo = str_split($linguagens, 4);
 
/*
 * implode
 */
 
 // $linguagens = array("Java", "PHP, "Python");
 // $novo = implode (" - ", $linguagens");
 
 /*
  * strpos
  */
 
 // $frase = "Aprendendo PHP";
 // $novo = strpos ($frase, "PHP");
 // $novo = stripos ($frase, "PHP");
 


 var_dump($novo);