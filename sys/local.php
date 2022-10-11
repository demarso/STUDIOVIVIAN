<?php
    include("class.ipdetails.php");
    $ip = $_SERVER['REMOTE_ADDR'];  
    #$ip = "189.73.71.160";
    $ipdetails = new ipdetails($ip); 
    $ipdetails->scan();
    include("conexao.php");
    $IP = $ip;
    $Pais = $ipdetails->get_country();
    $Estado = $ipdetails->get_region();
    $Cidade = $ipdetails->get_city();
    $Latitude = $ipdetails->get_latitude();
    $Longitude = $ipdetails->get_longitude();

    $sql = "INSERT INTO localizacao(
                        IP,
                        Pais,
                        Estado,
                        Cidade,
                        Latitude,
                        Longitude
                        )
                        VALUES
                        ('$IP',
                        '$Pais',
                        '$Estado',
                        '$Cidade',
                        '$Latitude',
                        '$Longitude'
                        )";
                        $result = mysqli_query($conn,$sql) or die ("Cadastro de Cliente não realizado.");

 
?>