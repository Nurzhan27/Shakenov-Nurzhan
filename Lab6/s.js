let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];



for (var i = 0; i < 3; i++) {
	document.getElementById('s'+i).src=cars[i]['image_url'];

	var t1=cars[i]['brand'];
	var t2=cars[i]['model'];
	document.getElementById('nam'+i).innerHTML=t1+" "+t2;
	
	console.log(cars[i]['price']);
}

var c=0;
var sum=0;
function buy0() {
	document.getElementById('otm0').style.display='block';
	c++;
	sum+=cars[0]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}
function buy1() {
	document.getElementById('otm1').style.display='block';
	c++;
	sum+=cars[1]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}
function buy2() {
	document.getElementById('otm2').style.display='block';
	c++;
	sum+=cars[2]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}
function ne0(){
	document.getElementById('otm0').style.display='none';
	c--;
	sum-=cars[0]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}function ne1(){
	document.getElementById('otm1').style.display='none';
	c--;
	sum-=cars[1]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}function ne2(){
	document.getElementById('otm2').style.display='none';
	c--;	
	sum-=cars[2]['price'];
    document.getElementById('items').innerHTML=c;
    document.getElementById('sum').innerHTML=sum;
}


