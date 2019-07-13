      function Currency() {
	 y = document.getElementById("to").value;
		return y;
	}
 
function Calculate(){
	y = Currency();
 
	x = document.getElementById("amount").value;
 z= document.getElementById("from").value;
	if(x == ""){
		document.getElementById("reuslt").value = "";
	}
    else if(z=="PNS"){
		switch(y){
			case "PNS":
				document.getElementById("reuslt").value = x;
			break;
 
			case "JOD":
				document.getElementById("reuslt").value = x * 5;
			break;
 
			case "USD":
				document.getElementById("reuslt").value = x * 3;
			break;
 
			case "Yen":
				document.getElementById("reuslt").value = x * 6;
			break;
 
			case "Euro":
				document.getElementById("reuslt").value = x * 2;
			break;
                
            case "Pound":
				document.getElementById("reuslt").value = x * 8.20;
			break;    
                
		}
	}
     else if(z=="JOD"){
		switch(y){
			case "PNS":
				document.getElementById("reuslt").value = x*5;
			break;
 
			case "JOD":
				document.getElementById("reuslt").value = x;
			break;
 
			case "USD":
				document.getElementById("reuslt").value = x * 3;
			break;
 
			case "Yen":
				document.getElementById("reuslt").value = x * 0.49;
			break;
 
			case "Euro":
				document.getElementById("reuslt").value = x * 7;
			break;
                
            case "Pound":
				document.getElementById("reuslt").value = x * .20;
			break;    
                
		}
	}
    else if(z=="USD"){
		switch(y){
			case "PNS":
				document.getElementById("reuslt").value = x*5;
			break;
 
			case "JOD":
				document.getElementById("reuslt").value = x*9;
			break;
 
			case "USD":
				document.getElementById("reuslt").value = x ;
			break;
 
			case "Yen":
				document.getElementById("reuslt").value = x * 0.49;
			break;
 
			case "Euro":
				document.getElementById("reuslt").value = x * 8.20;
			break;
                
            case "Pound":
				document.getElementById("reuslt").value = x * 8.20;
			break;    
                
		}
	}
    else if(z=="Yen"){
		switch(y){
			case "PNS":
				document.getElementById("reuslt").value = x*5;
			break;
 
			case "JOD":
				document.getElementById("reuslt").value = x*8;
			break;
 
			case "USD":
				document.getElementById("reuslt").value = x * 3;
			break;
 
			case "Yen":
				document.getElementById("reuslt").value = x ;
			break;
 
			case "Euro":
				document.getElementById("reuslt").value = x * 8.20;
			break;
                
            case "Pound":
				document.getElementById("reuslt").value = x * 8.20;
			break;    
                
		}
	}
    else if(z=="Euro"){
		switch(y){
			case "PNS":
				document.getElementById("reuslt").value = x*5;
			break;
 
			case "JOD":
				document.getElementById("reuslt").value = x*8;
			break;
 
			case "USD":
				document.getElementById("reuslt").value = x * 3;
			break;
 
			case "Yen":
				document.getElementById("reuslt").value = x * .5;
			break;
 
			case "Euro":
				document.getElementById("reuslt").value = x ;
			break;
                
            case "Pound":
				document.getElementById("reuslt").value = x * 8.20;
			break;    
                
		}
	}
    else if(z=="Pound"){
		switch(y){
			case "PNS":
				document.getElementById("reuslt").value = x*5;
			break;
 
			case "JOD":
				document.getElementById("reuslt").value = x*4.5;
			break;
 
			case "USD":
				document.getElementById("reuslt").value = x * 3;
			break;
 
			case "Yen":
				document.getElementById("reuslt").value = x * 0.49;
			break;
 
			case "Euro":
				document.getElementById("reuslt").value = x * 20;
			break;
                
            case "Pound":
				document.getElementById("reuslt").value = x ;
			break;    
                
		}
	}
    
}
   //graph code is inline 
    
    