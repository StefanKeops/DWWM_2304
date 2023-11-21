<?php
/**
* Retourne "Hello $name !"
* @param string $name le nom à afficher
*/
function hello(string $name) : string
{
 return "Hello $name";
}
// test de la fonction (la fonction n'affiche rien. "echo" affichera la valeur retournée par la fonction)
echo hello("Mike");