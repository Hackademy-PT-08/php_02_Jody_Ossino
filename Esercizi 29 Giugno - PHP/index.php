<?php

// Esercitazione 2 - PHP - 29 giugno 2023


// - Traccia 1:

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

$users = [
     ['name' => 'Davide',
     'surname' => 'Cariola',
     'gender' => 'M'],
     ['name' => 'Katia',
     'surname' => 'Perrucci',
     'gender' => 'F'],
     ['name' => 'Jody',
     'surname' => 'Ossino',
     'gender' => 'M'],
     ['name' => 'Simona',
     'surname' => 'Rata',
     'gender' => 'F'],
     ['name' => 'Giacomo',
     'surname' => 'Curatella',
     'gender' => 'M'],
   ];
   
   foreach ($users as $user){
       
      if($user['gender'] == 'F'){
       echo "Buongiorno Sig.ra $user[name] $user[surname] \n";}

      else { 
       echo "Buongiorno Sig. $user[name] $user[surname] \n";}
   };
   

// - Traccia 2:

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$numbers = [1, 7, 10, 11, 26, 33, 58, 70];

$sum = 0;
$count = 0;

foreach ($numbers as $number) {
  if ($number % 2 === 0) {
    $sum += $number;
    $count++;
  }
}

if ($count > 0) {
    
   $result = $sum / $count;
   echo "La media dei numeri pari è: " . $result;
}


// - Traccia 3:

// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

$number = 0;

for ($number = 1; $number <= 100; ++$number) {

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "Questo non è un numero ma è HACKADEMY \n";
  } elseif ($number % 3 == 0) {
    echo "Questo non è un numero ma è PHP \n";
  } elseif ($number % 5 == 0) {
    echo "Questo non è un numero ma è JAVASCRIPT \n";
  } else {
    echo "Questo è il numero: $number \n";
  }
};





