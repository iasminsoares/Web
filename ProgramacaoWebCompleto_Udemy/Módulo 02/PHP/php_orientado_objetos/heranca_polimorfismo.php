<?php

//CLASSE MÃO OU SUPERCLASSE

class Felino{
	var $mamifero = 'sim';

	function correr(){
		echo 'Correr como felino';
	}
}

class Chita extends Felino {

	//Polimorfismo - 
	function correr(){
		echo 'Correr como chita 100KM/H';
	}
}

$chita = new Chita();

echo $chita->mamifero . "<br>";
$chita->correr();
/*AO chamar no objeto o método correr, o php primeiro irá buscar dentro da classe Chita se tem o msm método (correr), se tiver ele irá chamar o método especifico da classe chita.*/
?>