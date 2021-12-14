<?php

var_dump($_FILES);

echo $_FILES["meuArquivo"]["name"]."<br>";

echo $_FILES["meuArquivo"]["tmp_name"];

$tmp = $_FILES["meuArquivo"]["tmp_name"];
$name = $_FILES["meuArquivo"]["name"];

$pessoa = $_POST['onome'];

$data = date("d-m-Y");

$nomeFinal = $pessoa.'-'.$data;

$path = pathinfo($name); //pega informações sobre o file

$ext = $path['extension']; //separa a extensão

//echo $nomeFinal.$ext; //imprime nome. data e extensão 

$extPer = $array('png', 'jpeg', 'jpg', 'gif', 'svg');
if(in_array($ext, $extPer)){
   move_uploaded_file($tmp,"files/".$nomeFinal.'.'.$ext);
   echo "<br> Arquivo enviado com sucesso";
}else{
   echo "<br> Extensao nao permitida";
}
