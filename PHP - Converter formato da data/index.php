<?php
$dateEN = new \DateTime('2017-02-01');
$datePTBR = $dateEN->format('d/m/Y');
echo $datePTBR; //output: 01/02/2017

//https://www.diegobrocanelli.com.br/php/converter-data-para-pt-br-com-php/