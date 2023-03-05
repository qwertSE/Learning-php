<?php 

//Declaração de função.
function exibirMsg($message){
    echo $message . PHP_EOL;
}

$contas = [
    '1' => [
        'titular' => 'Dan',
        'saldo' => 10000
    ],
    '2' => [
        'titular' => 'Ben',
       'saldo' => 20000
    ]
];

foreach($contas as $titular => $conta){
    
    //Executando a função de
    exibirMsg(message:'Nº '.$titular ." Titular: ". $conta['titular'].' Saldo: '. $conta['saldo']);
};

?>