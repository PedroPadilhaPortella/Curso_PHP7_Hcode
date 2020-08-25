<?php

$pasta = 'directory';
$permissao = 0775;

if (!is_dir($pasta)) {
    mkdir($pasta, $permissao);
}

echo "Diretorio '$pasta' criada";






/*
Permissões de 0 até 7

Valor Octal  Valor Binário rwx   Caracteres     Significado

1              001                  −−x      permissão de execução
0              000                  −−−      nenhuma permissão de acesso
2              010                  -w-      permissão de gravação
3              011                  -wx      permissão de gravação e execução
4              100                  r−−      permissão de leitura
5              101                  r-x      permissão de leitura e execução
6              110                  rw-      permissão de leitura e gravação
7              111                  rwx      permissão de leitura, gravação e execução

775 => Admin, Grupos de Usuarios, Guests
*/
?>