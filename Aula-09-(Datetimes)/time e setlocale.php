<?php

setlocale(LC_ALL, 'pt_BR', 'pt_br utf-8', 'Portuguese'); //config do setlocale
strftime(format)




/*
Dia	---	---
%a	Dia	Sun até Sat
%A	Dia	Sunday até Saturday
%d	Dia do mês, 01 a 31
%e	Dia do mês, 1 a 31
%j	Dia do ano, 001 a 366
%u	Dia da semana, ISO-8601, 1 (para Monday) até 7 (para Sunday)
%w	Dia da semana, 0 (para Sunday) até 6 (para Saturday)
Semana	---	---
%U	Número da semana do ano, iniciado com o primeiro Domingo, 13 (como a 13ª semana completa do ano)
%V	Número da semana, ISO-8601:1988, sendo a Segunda-feira como o início da semana.	01 até 53
%W	Semana do ano, começando pela primeira Segunda-feira como primeira semana do ano
Mês	---	---
%b	Mes, Jan até Dez
%B	Mes, baseado no idioma	Janeiro até Dezembro
%h	Mês abreviado, baseado no idioma (sinônimo de %b)	Jan até Dez
%m	Representação com dois dígitos do mês	01 (para January) through 12 (para December)
Ano	---	---
%C	Século (ano dividido por 100, truncado como inteiro)	19 para o século 20
%g	Representação do ano, padrão ISO-8601:1988	Exemplo: 09 de January 6, 2009
%G	Versão de 4 dígitos de %g	Exemplo: 2008 de January 3, 2009
%y	Representação, com dois dígitos, do ano	Exemplo: 09 de 2009, 79 de 1979
%Y	Representação, com quatro dígitos, do ano	Exemplo: 2038
Hora	---	---
%H	Representação, com dois dígitos, da hora no formato 24 horas	00 até 23
%k	Representação, com dois dígitos, da hora no formato 24 horas,	0 até 23
%I	Representação, com dois dígitos, da hora no formato 12 horas	01 até 12
%l  Representação, com dois dígitos, da hora no formato 12 horas,	1 até 12
%M	Representação, com dois dígitos, do minuto	00 até 59
%S	Representação, com dois dígitos, do segundo	00 até 59

%p	'AM' ou 'PM' maiúsculo baseado na hora informada	Exemplo: AM para 00:31, PM para 22:23
%P	'am' ou 'pm' maiúsculo baseado na hora informada	Exemplo: am para 00:31, pm para 22:23

%r	O mesmo que "%I:%M:%S %p"	Exemplo: 09:34:17 PM de 21:34:17
%R	O mesmo que "%H:%M"	Exemplo: 00:35 de 12:35 AM, 16:44 de 4:44 PM
%T	O mesmo que "%H:%M:%S"	Exemplo: 21:34:17 para 09:34:17 PM
%X	Representação escolhida baseada no idioma, sem a data	Exemplo: 03:59:16 ou 15:59:16

%z	O deslocamento do fuso horário. Exemplo: -0500 para hora à leste dos EUA
%Z	A abreviação do fuso horário. Exemplo: EST para Eastern Time
Carimbos de Data e Hora	---	---

%c	Carimbo escolhido de data e hora baseado no idioma	Exemplo: Ter Fev 5 00:45:10 2009 de February 5, 2009 at 12:45:10 AM
%D	O mesmo que "%m/%d/%y"	Exemplo: 02/05/09 de February 5, 2009
%F	O mesmo que "%Y-%m-%d" (geralmente utilizado em carimbos de data em bancos de dados)	Exemplo: 2009-02-05 de February 5, 2009
%s	Timestamp Unix Epoch Time (o mesmo que a função time() function)	Exemplo: 305815200 de September 10, 1979 08:40:00 AM
%x	Carimbo escolhido de data e hora baseado no idioma, sem a hora	Exemplo: 02/05/09 de February 5, 2009

Miscelânea	---	---
%n	Uma nova linha ("\n")	---
%t	Um caractere TAB ("\t")	---
%%	Um caractere literal de porcento ("%")	---
*/
?>