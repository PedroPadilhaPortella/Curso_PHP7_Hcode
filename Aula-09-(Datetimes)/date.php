<?php
date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date("d/m/Y H:i:s");
echo "Data Atual: $dataAtual"; 
//uso da função date, porém a função date não é sensivel ao setlocale, ele pega o timestamp atual

$timestamp = time();
echo "<br>Timestamp Atual:  $timestamp <br>"; //timestamp atual


$ts = strtotime("2001-06-10");//converte a string para time(timestamp)
$dataConvert = date("l d/m/Y", $ts);
echo "<br>Data de Nascimento: $dataConvert   --TimeStamp: $ts<br>";

echo "<br>Data Atual com 'strtotime:' ", date("l, d/m/Y H:i:s", strtotime("now"));


$strTime02 = strtotime("+1 year 3 days 4 hours 30 seconds");
echo "<br>Data Daqui a 1 ano, tres dias, 4 horas e 30 segundos com 'strtotime:' ", date("l, d/m/Y H:i:s", $strTime02);


/*
Dia	---	---
d	Dia do mês 01 até 31
D	Dia da semana	Mon até Sun
j	Dia do mês sem zero à esquerda	1 até 31
l   Dia da semana Sunday até Saturday
N	ISO-8601 do dia da semana 1 (para Segunda) até 7 (para Domingo)
S	Dia do mês ordinal. st, nd, rd ou th.
w	Representação numérica do dia da semana	0 (para domingo) até 6 (para sábado)
z	O dia do ano (iniciando em 0)	0 até 365
Semana	---	---
W	Número do ano da semana ISO-8601, começa na Segunda Exemplo: 42 (a 42ª semana do ano)
Mês	---	---
F	Mês, de January até December
m	Representação numérica de um mês, com zero à esquerda	01 a 12
M	Mês, três letras, Jan a Dec
n	Representação numérica de um mês, sem zero à esquerda	1 a 12
t	Número de dias de um dado mês, fevereiro: 28
Ano	---	---
L	Se está em um ano bissexto:	1 se está em ano bissexto, 0, caso contrário.
o	Número do ano ISO-8601. Exemplos: 1999 ou 2003
Y	Uma representação de ano completa, 4 dígitos	Exemplos: 1999 ou 2003
y	Uma representação do ano com dois dígitos	Exemplos: 99 ou 03
Tempo	---	---
a	Antes/Depois de meio-dia em minúsculo	am or pm
A	Antes/Depois de meio-dia em maiúsculo	AM or PM
B	Swatch Internet time	000 até 999
g	Formato 12-horas de uma hora sem zero à esquerda	1 até 12
G	Formato 24-horas de uma hora sem zero à esquerda	0 até 23
h	Formato 12-horas de uma hora com zero à esquerda	01 até 12
H	Formato 24-horas de uma hora com zero à esquerda	00 até 23
i	Minutos com zero à esquerda	00 até 59
s	Segundos, com zero à esquerda	00 até 59
u	Microssegundos
Fuso horário	---	---
e	Identificador do fuso horário, Exemplos: UTC, GMT, Atlantic/Azores
I 	Se a data está ou não no horário de verão	1 se horário de verão, 0, caso contrário.
O	Deslocamento ao Horário de Greenwish (GMT) em horas	Exemplo: +0200
P	Deslocamento ao Horário de Greenwish (GMT) Exemplo: +02:00
T	Abreviação do fuso horário	Exemplos: EST, MDT ...
Z	Deslocamento, em segundos, do fuso horário. Exemplo: -43200 até 50400
Data/Hora completa	---	---
c	Data ISO 8601 	2004-02-12 T 15:19:21+00:00
r	RFC 2822 formatted date	Exemplo: Thu, 21 Dec 2000 16:01:07 +0200
U	Segundos desde Unix Epoch (January 1 1970 00:00:00 GMT)
*/
?>