var myIndex = 2;
slideshow();

function slideshow(){
	var i;
	var x = document.getElementsByClassName('slideshowimg');
	for(i=0; i < x.length; i++){
	x[i].style.opacity = "0";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.opacity = "1";    
  x[myIndex-1].style.display = "block";
  console.log(myIndex)
  if(myIndex == 3){
	document.getElementById('radio1').checked = true;
	document.getElementById('radio2').checked = false;
	document.getElementById('radio3').checked = false;
  }else if(myIndex == 1){
	document.getElementById('radio1').checked = false;
	document.getElementById('radio2').checked = true;
	document.getElementById('radio3').checked = false;
  }else if(myIndex == 2){
	document.getElementById('radio1').checked = false;
	document.getElementById('radio2').checked = false;
	document.getElementById('radio3').checked = true;
  }
  setTimeout(slideshow, 4000);    
}
