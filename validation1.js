  function errorMessage() 
	 {
		 var error = document.getElementById("error")
		var errorM = document.getElementById("errorP")
		var errorM = document.getElementById("errorf")
		var errorM = document.getElementById("errorg")
		var errorM = document.getElementById("errorpp")
			var errorM = document.getElementById("errort")
		
		 if (isNaN(document.getElementById("bss").value)) 
        {
            	error.textContent = "Please enter only Integers"
            error.style.color = "red"
			error.style.fontSize="12";
        } 
		else {
		
            error.textContent = ""
        }
		
			
		 if (isNaN(document.getElementById("pa").value)) 
        {
            	errorP.textContent = "Please enter only Integers"
            errorP.style.color = "red"
			errorP.style.fontSize="12";
        } 
		else {
		
            errorP.textContent = ""
        }
			 if (isNaN(document.getElementById("pf").value)) 
        {
            	errorf.textContent = "Please enter only Integers"
            errorf.style.color = "red"
			errorf.style.fontSize="12";
        } 
		else {
		
            errorf.textContent = ""
        }
		 if (isNaN(document.getElementById("grat").value)) 
        {
            	errorg.textContent = "Please enter only Integers"
            errorg.style.color = "red"
			errorg.style.fontSize="12";
        } 
		else {
		
            errorg.textContent = ""
        }
		 if (isNaN(document.getElementById("pp").value)) 
        {
            	errorpp.textContent = "Please enter only Integers"
            errorpp.style.color = "red"
			errorpp.style.fontSize="12";
        } 
		else {
		
            errorpp.textContent = ""
        }
		 if (isNaN(document.getElementById("ts").value)) 
        {
            	errort.textContent = "Please enter only Integers"
            errort.style.color = "red"
			errort.style.fontSize="12";
        } 
		else {
		
            errort.textContent = ""
        }
		
		
	 }