

		function regvalidate(){
			
			
			
			
			var teid = document.getElementById('teid').value;
			var tna = document.getElementById('tna').value;
			var teuser = document.getElementById('teuser').value;
			var tepass = document.getElementById('tepass').value;
			var tecemail = document.getElementById('tecemail').value;
			var tepos = document.getElementById('tepos').value;
			var tedeg = document.getElementById('tedeg').value;
			var tesa = document.getElementById('tesa').value;
			var sgender = document.getElementsByName('sgender').value;
			
			
			var acctype = document.getElementsByName('acctype').value;
			
			
		
			
			
			
			
			
			
			
			if(teid == ""){
				document.getElementById('tid').innerHTML =" ** Please fill the id field";
				document.getElementById('teid').style.borderColor = 'red';
				return false;
			}
			
			if(tna == ""){
				document.getElementById('tnam').innerHTML =" ** Please fill the name field";
				document.getElementById('tna').style.borderColor = 'red';
				return false;
			}
			
			if(teuser == ""){
				document.getElementById('tuser').innerHTML =" ** Please fill the username field";
				document.getElementById('teuser').style.borderColor = 'red';
				return false;
			}
			
			if(tepass == ""){
				document.getElementById('tpass').innerHTML =" ** Please fill the Password field";
				document.getElementById('tepass').style.borderColor = 'red';
				return false;
			}
			
			if((tepass.length <= 8) || (tepass.length > 20)) {
				document.getElementById('tpass').innerHTML =" ** Passwords lenght must be between  8 and 20";
				return false;	
			}
			
			if(tecemail == ""){
				document.getElementById('temail').innerHTML =" ** Please fill the email field";
				document.getElementById('tecemail').style.borderColor = 'red';
				return false;
			}
			
			if(tecemail.indexOf('@') <= 0 ){
				document.getElementById('temail').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((tecemail.charAt(tecemail.length-4)!='.') && (tecemail.charAt(tecemail.length-3)!='.')){
				document.getElementById('temail').innerHTML =" ** . Invalid Position";
				return false;
			}

			
			if(tepos == ""){
				document.getElementById('tpos').innerHTML =" ** Please fill the position field";
				document.getElementById('tepos').style.borderColor = 'red';
				return false;
			}
			
			if(tedeg == ""){
				document.getElementById('tdeg').innerHTML =" ** Please fill the degree field";
				document.getElementById('tedeg').style.borderColor = 'red';
				return false;
			}
			
			if(tesa == ""){
				document.getElementById('tsa').innerHTML =" ** Please fill the salary field";
				document.getElementById('tesa').style.borderColor = 'red';
				return false;
			}
			
			







			

			
			
			
		
			  
				
				
			
			
			
		}





		function regvalidates(){
			
			
			
			
			var teid = document.getElementById('teid').value;
			var tna = document.getElementById('tna').value;
			var teuser = document.getElementById('teuser').value;
			var tepass = document.getElementById('tepass').value;
			var tecemail = document.getElementById('tecemail').value;
			var tepos = document.getElementById('tepos').value;
			var tedeg = document.getElementById('tedeg').value;
			
			var sgender = document.getElementsByName('sgender').value;
			
			
			var acctype = document.getElementsByName('acctype').value;
			
			
		
			
			
			
			
			
			
			
			if(teid == ""){
				document.getElementById('tid').innerHTML =" ** Please fill the id field";
				document.getElementById('teid').style.borderColor = 'red';
				return false;
			}
			
			if(tna == ""){
				document.getElementById('tnam').innerHTML =" ** Please fill the name field";
				document.getElementById('tna').style.borderColor = 'red';
				return false;
			}
			
			if(teuser == ""){
				document.getElementById('tuser').innerHTML =" ** Please fill the username field";
				document.getElementById('teuser').style.borderColor = 'red';
				return false;
			}
			
			if(tepass == ""){
				document.getElementById('tpass').innerHTML =" ** Please fill the Password field";
				document.getElementById('tepass').style.borderColor = 'red';
				return false;
			}
			
			if((tepass.length <= 8) || (tepass.length > 20)) {
				document.getElementById('tpass').innerHTML =" ** Passwords lenght must be between  8 and 20";
				return false;	
			}
			
			if(tecemail == ""){
				document.getElementById('temail').innerHTML =" ** Please fill the email field";
				document.getElementById('tecemail').style.borderColor = 'red';
				return false;
			}
			
			if(tecemail.indexOf('@') <= 0 ){
				document.getElementById('temail').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((tecemail.charAt(tecemail.length-4)!='.') && (tecemail.charAt(tecemail.length-3)!='.')){
				document.getElementById('temail').innerHTML =" ** . Invalid Position";
				return false;
			}

			
			if(tepos == ""){
				document.getElementById('tpos').innerHTML =" ** Please fill the Class field";
				document.getElementById('tepos').style.borderColor = 'red';
				return false;
			}
			
			if(tedeg == ""){
				document.getElementById('tdeg').innerHTML =" ** Please fill the Section field";
				document.getElementById('tedeg').style.borderColor = 'red';
				return false;
			}
			
			
			
			







			

			
			
			
		
			  
				
				
			
			
			
		}

