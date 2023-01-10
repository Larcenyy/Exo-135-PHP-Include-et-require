<?php

// Premiere ligne

echo "Un fichier php va être inclu à la suite de ce texte ...<br><br>";

include "texte.php";
require "vars.php";

// inclure fichier texte.php ci dessous


// Deuxieme Ligne ( inclure fichiers vars.php ci dessous )



echo "J'aime également les " . $maVar;






