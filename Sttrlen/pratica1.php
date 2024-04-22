<?php 
/*Função: strlen*/
$txt = "Davi Pereira Teles";
$tamanho = strlen($txt);
echo "O total de caracteres do texto é $tamanho<br/>";
/*Função: trim - Elimina os espaços*/
$nome = "I     Manaus    I";
echo (strlen($nome));
echo "<br/>";
echo trim($nome);
echo "<br/>";
echo rtrim($nome);
echo "<br/>";

/*Função: Str_word_count: conta as palavras de uma string*/
$frase = "Eu sou um aluno muito dedicado.";
$cont = str_word_count($frase);
echo "$cont";

?>
