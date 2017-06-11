function f1()
{
document.form1.name1.text="";
document.form1.name2.text="";
document.form1.name3.text="";
document.sel1.value=op1;
}
function check()
{
	var rez=0;
	if ((form1.vop1.value=="Виталя") || (form1.vop1.value=="Виталий") || (form1.vop1.value=="Шабалин")) rez++;
	if (document.getElementById('v1').checked==false && document.getElementById('v2').checked==false && document.getElementById('v3').checked==false && document.getElementById('v4').checked==true) rez++;
	if (document.getElementById('ch4').checked==true) rez++;
	if (document.getElementById('sel1').value=="ИТб-131") rez++;
	if (form1.vop2.value=="2") rez++;
	if (form1.vop3.value=="Амбидекстры") rez++;
	if (form1.vop4.value=="Лугдунам") rez++;
	if (document.getElementById('che2').checked==true) rez++;
	if (form1.vop5.value=="Сыр") rez++;
	if (document.getElementById('chee1').checked==true) rez++;
	document.body.scrollTop=0;
	switch(rez){
		case 0:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"265px"},3000);
		break
		case 1:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"185px"},3200);
		break
		case 2:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"110px"},3400);
		break
		case 3:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"32px"},3600);
		break
		case 4:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"-43px"},3800);
		break
		case 5:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"-118px"},4000);
		break
		case 6:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"-195px"},4200);
		break
		case 7:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"-270px"},4400);
		break
		case 8:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"-345px"},4600);
		break
		case 9:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"-420px"},4800);
		break
		case 10:
			$("#rez1").animate({opacity:"show"},1000);
			$("#rez2").animate({opacity:"show"},1000);
			$("#rez3").animate({opacity:"show"},1000);
			$("#rez4").animate({opacity:"show"},1000);
			$("#rez5").animate({opacity:"show"},1000);
			$("#backg").animate({opacity:"show"},1000);
			$("#num").animate({opacity:"show"},3000);
			$("#num").animate({top:"-500px"},5000);
		break
	}
}
function res() {
	location.reload();
}