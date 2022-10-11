<?php
 # Senha passada por parâmetro
  

   function hash256($input) {
    $hash = hash("sha256", utf8_encode($input));
    $output = "";
    foreach(str_split($hash, 2) as $key => $value) {
        if (strpos($value, "0") === 0) {
            $output .= str_replace("0", "", $value);
        } else {
            $output .= $value;
        }
    }
    return $output;
}


   echo "<br />Passar a senha por GET (?senha=)<br /><br />";
    $senhanova1 = $_GET['senha'];

  $confu1 = "L2xB3Sbia";
	$confu2 = "Dawi748v2";
	$senha1 = $senhanova1;
	$senha1 = $confu1.$senha1.$confu2;
	$senha2 = hash( 'SHA256',$senha1);
  	
 	# Calcula a hash da senha passada
 	echo "SHA256 - ".$senhanova1." = ".$senha2."<br /><br />";


    $senha3 = crypt($senha1, '$5$');

    echo "crypt - ".$senhanova1." = ".$senha3."<br /><br />";

    $senha4 = hash256($senha1);

    echo "hash256 - ".$senhanova1." = ".$senha4."<br /><br />";

    $senha5 = md5($senha1);

    echo "md5 - ".$senhanova1." = ".$senha5."<br /><br />";

    $senha6 = sha1($senha1);

    echo "sha1 - ".$senhanova1." = ".$senha6."<br /><br />";
?>