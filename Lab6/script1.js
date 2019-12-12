var buttons = document.querySelectorAll('button');
for(var button of buttons){
	button.onclick=function(event){
		var btn = event.currentTarget;
		var div = btn.parentNode;
		var array = div.childNodes;
		if(array[1].style.textDecoration =='line-through'){
		array[1].style.textDecoration = 'none';}
		else{
			array[1].style.textDecoration = 'line-through';
		}
	}
}
