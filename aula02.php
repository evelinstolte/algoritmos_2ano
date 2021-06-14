<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8>
    <title>Aula 02</title>
</head>
<body>
    <?php

    $idade = 17;
    $altura = 1.63;
    $nome = "EVELIN STOLTE";
    $casado = false; 

    $numero = 3;

    define('CONFIG',1500);
    //echo CONFIG;

    function calc(){
        global $numero;
        echo $numero;
    }

    //calc();

    //$cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
    //$cadastro[] = 'Cliente 1';
    //$cadastro[] ='Cliente 2';
    //$cadastro = array('cliente1' => 'EVELIN', 'cliente2' => 'STOLTE');
    $cadastro = array(
        'cliente1' => array(
            'nome' => 'EVELIN',
            'idade' => 17,
        ),
        'cliente2' => array(
            'nome' => 'STOLTE',
            'idade' => 17,
        ),
    );

    var_dump(get_defined_vars());
    //echo $cadastro['cliente1']['nome'];
    //echo "olá, meu nome é $nome e eu tenho $idade anos.";
</body>
</html>



