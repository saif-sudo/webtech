var tname = document.getElementById('tname');
var tid = document.getElementById('tid');


function form_submit(){
	if(tname.value == '' || tid.value == ''){
		tname.style.borderColor="red";
		tid.style.borderColor="red";
		document.getElementById('errmsg').innerHTML="Please input All fields";
			
		
	}
	
	return false;
	
}