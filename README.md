Array
- Sono tipi di dato complessi.
Perchè complessi? Perchè sono un insieme di dati ( collection ), questi dati non necessariamente devono essere dello stesso tipo 
Cicli
- Ripetizione di un pezzo di codice un numero N di volte

WHILE
$age = 0;
while($age < 18){
    println("sei ancora minorenne");
    $age++;
}

DO-WHILE
$number = 0;
do{
printl($number);
$number++;
}while($number < 10);

FOR
for(i=0, i < 10, i++){
    println($i);
}

FOREACH
$months = ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giungo','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'];

foreach($months as $month){
    println($month);
}


$months = [['name' =>'Gennaio'],['name' =>'Febbraio'],['name' =>'Marzo'],['name' =>'Aprile'],['name' =>'Maggio'],['name' =>'Giungo'],['name' =>'Luglio'],['name' =>'Agosto'],['name' =>'Settembre'],['name' =>'Ottobre'],['name' =>'Novembre'],['name' =>'Dicembre']];

foreach($months as $month){
    println($month['name']);
}