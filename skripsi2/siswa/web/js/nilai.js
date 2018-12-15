$(document).ready(function(){
	nilai1 = parseInt($('#nilai-tugas1').val(), 10);
	nilai2 = parseInt($('#nilai-tugas2').val(),  10);
	nilai3 = parseInt($('#nilai-uts').val(), 10);
	nilai4 = parseInt($('#nilai-uas').val(),10);
	//nilai1 = 1;	
	total = nilai1+nilai2+nilai3+nilai4;
//	alert('nilai di form ' + (nilai1+nilai2+nilai3+nilai4));
	$('#nilai-total_nilai').val(total);
});
