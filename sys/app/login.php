<?php

    include 'conexao.php';

    //$username = $_POST['username'];
   //$password = $_POST['password'];
    $senha = addslashes($_POST['senha']);
    $login = addslashes($_POST['login']);
    
    $confu1 = "L2xB3Sbia";
    $confu2 = "Dawi748v2";
    $senha1 = $senha;
    $senha1 = $confu1.$senha1.$confu2;
    $senha1 = hash( 'SHA256',$senha1);

    $consultar=$connect->query("SELECT * FROM tblUsuario WHERE usuario='".$login."' and senha='".$senha1."'");

    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }

    echo json_encode($resultado);

    ?>