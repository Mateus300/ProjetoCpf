<?= require_once "topo.php";?>

    $url = "viacep.com.br/ws/69999999/json/";
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resultado = json_decode(curl_exec($ch));
        
    foreach ($resultado as $res=>$index) {
        $$res = $index;
    }
        
    curl_close($ch);


<?= require_once "rodape.php";?>