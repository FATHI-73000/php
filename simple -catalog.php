<?php
$products = [ "iphone", "ipad", "iMac"];  
sort($products);  // Trie : [ "iMac", "ipad", "iphone" ] tenir compte  de la casse (les majuscules avant les minuscules). natcasesort() : trie de manière insensible à la casse,

echo " Premier produit : ". $products[0]; // Affiche "iMac"
echo " dernier produit :". $products[2];  // Affiche "iphone"
?>