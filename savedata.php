<?php

class JSONData{
    function storeData($firstname,$surname,$email,$birthday,$gender){
        $savefile = fopen("data/".$firstname."_".$surname.".json", "w") or die("Error opening file!");
        $data = '{"name":"'.$firstname.'","surname":"'.$surname.'","email":"'.$email.'","birthday":"'.$birthday.'","gender":"'.$gender.'"}';
        fwrite($savefile, $data);
        fclose($savefile);
    }
}

?>