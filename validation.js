  function errorMessage() 
	 {
		  var error = document.getElementById("error")
		var errorM = document.getElementById("errorM")
		var errorM = document.getElementById("errorE")
		var errorM = document.getElementById("errorT")
		var errorM = document.getElementById("errorA")
		
		 if (isNaN(document.getElementById("en").value)) 
        {
            error.textContent = ""
        } 
		else {
			error.textContent = "Please enter only characters"
            error.style.color = "red"
			error.style.fontSize="12";
            
        }
		
		
			var mail_format = /[a-z0-9]+@[a-z]+\.[a-z]{2,3}/;
		if (document.getElementById("em").value.match(mail_format)) 
        {
            errorE.textContent = ""
        } 
		else {
			errorE.textContent = "Please enter correct email"
            errorE.style.color = "red"
			errorE.style.fontSize="12";
            
        }
		
		
		if (isNaN(document.getElementById("ts").value)) 
        {
          errorT.textContent = "Please enter only numbers"
            errorT.style.color = "red"
			errorT.style.fontSize="12";
        } 
	
		else {
			 errorT.textContent = ""
            
        }
		
		
		  if (isNaN(document.getElementById("mod").value)) 
        {
          errorMM.textContent = "Please enter only numbers"
            errorMM.style.color = "red"
			errorMM.style.fontSize="12";
        } 
		else if(document.getElementById("mod").value.length!=10)
		{
			   errorMM.textContent = "Please enter 10 numbers"
            errorMM.style.color = "red"
			errorMM.style.fontSize="12";
		}
		else 
		{
			 errorMM.textContent = ""
            
        }
		
	 }