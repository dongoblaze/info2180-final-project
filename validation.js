console.log('test');

function validation()                                    
{ 
    console.log('checking validation');
    var fn = document.forms["Newuser"]["firstname"];
    var ln = document.forms["Newuser"]["lastname"];             
    var ema = document.forms["Newuser"]["email"];    
    var passw = document.forms["Newuser"]["password"];
    var regx= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  

    if (fn.value == "")                                  
    { 
        window.alert("Please enter your first name.") 
        fn.focus(); 
        return false; 
    }  
    if (ln.value == "") { 
        window.alert("Please enter your last name.")
        ln.focus();
        return false; 
    } 
       
    if (ema.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address.")
        ema.focus(); 
        return false; 
    } 
   
    if (passw.value == "")                        
    { 
        window.alert("Please enter your password");
        passw.focus(); 
        return false; 
    } 

    if (!regx.test(ema.value)) {
      alert(' INVALID EMAIL');
      return false;
    }
    else{
        return true;
    }
}

