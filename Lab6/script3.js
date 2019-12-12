var cars = [{brand:'Toyota',model:'Camry','year':2017,'price':17000,image_url:"https://www.toprent.com.ua/wp-content/uploads/2019/06/Toyota-Camry-70-2019-arenda-prokat-TopRent.com_.ua_.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://upload.wikimedia.org/wikipedia/commons/5/56/Daewoo_Nexia_2013.JPG"}];



for (var i = 0; i < 3; i++) {
	document.getElementById('s'+i).src=cars[i]['image_url'];

	var t1=cars[i]['brand'];
	var t2=cars[i]['model'];
	document.getElementById('nam'+i).innerHTML=t1+" "+t2;
}

var c=0;
var sum=0;
function b1() {
	document.getElementById('m1').style.display='block';
	c++;
	sum+=cars[0]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}
function b2() {
	document.getElementById('m2').style.display='block';
	c++;
	sum+=cars[1]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}
function b3() {
	document.getElementById('m3').style.display='block';
	c++;
	sum+=cars[2]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}
function f1(){
	document.getElementById('m1').style.display='none';
	c--;
	sum-=cars[0]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}function f2(){
	document.getElementById('m2').style.display='none';
	c--;
	sum-=cars[1]['price'];
	document.getElementById('items').innerHTML=c;
	document.getElementById('sum').innerHTML=sum;
}function f3(){
	document.getElementById('m3').style.display='none';
	c--;	
	sum-=cars[2]['price'];
    document.getElementById('items').innerHTML=c;
    document.getElementById('sum').innerHTML=sum;
}


