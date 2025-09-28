<?php
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET["nome"])&& isset($_GET["cognome"]) && isset($_GET["data_nascita"])&& isset($_GET["pagamento"])){
      $nome = $_GET["nome"];
      $cognome = $_GET["cognome"];
      $data_nascita = $_GET["data_nascita"];
      $pagamento = $_GET["pagamento"];
      $sconto = 0;
      $prezzo = 0;
      $prezzo_finale = 0;
      $prezzo_sconto = 0;
    
    }
    
  }

  if($data_nascita<=18 || $data_nascita>=65){
    $prezzo = 35;
  }else{
    $prezzo = 45;
  }

  if($pagamento == "mensile"){
    $prezzo_finale = $prezzo*12;
  }elseif($pagamento == "bimestrale"){
    $sconto = 0.10;
    $prezzo_sconto = $prezzo*$sconto;
    $prezzo_finale = ($prezzo-$prezzo_sconto)*12;
  }elseif($pagamento == "annuale"){
    $sconto = 0.20;
    $prezzo_sconto = $prezzo*$sconto;
    $prezzo_finale = ($prezzo-$prezzo_sconto)*12;
  }elseif($pagamento == "trimestale"){
    $sconto = 0.15;
    $prezzo_sconto = $prezzo*$sconto;
    $prezzo_finale = ($prezzo-$prezzo_sconto)*12;
  }

    echo "<h1>Riepilogo iscrizione palestra</h1>";
    echo "Nome: $nome <br>";
    echo "Cognome: $cognome <br>";
    echo "Et&agrave: $data_nascita <br>";
    echo "Tipo di pagamento scelto: $pagamento <br>";
    echo "Il prezzo finale per $nome $cognome per un anno &egrave di: $prezzo_finale euro";
?>