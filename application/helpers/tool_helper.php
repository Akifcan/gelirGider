<?php 

function get_date(){
	$day;
	$month;

	if(date('D') == 'Mon'){
		$day = 'Pazartesi';
	}
	if(date('D') == 'Tue'){
		$day = 'Salı';
	}
	if(date('D') == 'Wed'){
		$day = 'Çarşamba';
	}

	if(date('D') == 'Thu'){
		$day = 'Perşembe';
	}
	if(date('D') == 'Fri'){
		$day = 'Cuma';
	}
	if(date('D') == 'Sat'){
		$day = 'Cumartesi';
	}
	if(date('D') == 'Sun'){
		$day = 'Pazar';
	}


	if(date('m') == 12){
		$month = 'Aralık';
	}
	if(date('m') == 11){
		$month = 'Kasım';
	}
	if(date('m') == 10){
		$month = 'Ekim';
	}
	if(date('m') == 9){
		$month = 'Eylül';
	}
	if(date('m') == 8){
		$month = 'Ağustos';
	}
	if(date('m') == 7){
		$month = 'Temmuz';
	}
	if(date('m') == 6){
		$month = 'Haziran';
	}
	if(date('m') == 5){
		$month = 'Mayıs';
	}
	if(date('m') == 4){
		$month = 'Nisan';
	}
	if(date('m') == 3){
		$month = 'Mart';
	}
	if(date('m') == 2){
		$month = 'Şubat';
	}
	if(date('m') == 1){
		$month = 'Ocak';
	}


	return $day.' '.date('d').' '.$month.' '.date('Y');

}