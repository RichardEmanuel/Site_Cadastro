<?php

/*
- 01/02/2022
-> CRIANDO UMA ROTA COM O VERBO HTTP GET, PRECISO INFORMAR O CAMINHO(DENTRO DO GET), NO CASO QUAL A URL QUE VAI SER USADA neste caso foi o "/ola", o segundo parametro é uma função do php(no caso depois da virgula), e escolho oq vai sair na nossa função
*/

/*MOD 2
VAMOS APRENDER MVC -  padrão de arquitetura de software

nesta aula vamos tirar a função da aqui e colocar no controller : SeriesController.php

Site para controller : laravel.com/docs/5.8/controllers#reseource-controllers
-> Olhar depois

*/



Route::get('/series','SeriesController@index');

Route::get('/series/criar','SeriesController@create');