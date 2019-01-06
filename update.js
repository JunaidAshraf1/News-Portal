
//  status update interval
	function dis()
	{
		var obj=new XMLHttpRequest();
		obj.open('GET','update.php',false);
		obj.send(null);
		document.getElementById('getdata').innerHTML=obj.responseText;
	}
	dis();
	setInterval(function()
	{
		dis();	
	},10000);
	
// market status update
	function autoupdate(str){
		var xmlhttp;
		if (str =='1') {
			xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange= function(){
				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById("news").innerHTML=this.responseText;
				}
			};
			xmlhttp.open("GET","newsauto.php?q=google-news",false);
			xmlhttp.send();
		}
		else{
			xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange= function(){
				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById("news").innerHTML=this.responseText;
				}
			};
			xmlhttp.open("GET","newsauto.php?q="+str,true);
			xmlhttp.send();
		}

	}

	// user data fetching
		function userData(str){
		var xmlhttp;
			xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange= function(){
				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById("news").innerHTML=this.responseText;
				}
			};
			xmlhttp.open("GET","newsauto.php?q="+str,true);
			xmlhttp.send();
		}

	
