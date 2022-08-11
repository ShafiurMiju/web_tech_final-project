function validateform(){  
    const email=document.loginform.email.value;  
    const password=document.loginform.password.value;  

    if (email=="" || password==""){   
        if (email==""){   
            document.getElementById('email').style.border="1px solid red"; 
        } 
        if (password==""){   
            document.getElementById('password').style.border="1px solid red"; 
        } 
        return false;  
    }  
    
}

function alert_email(){
    document.getElementById('email').style.border="none";

}

function alert_password(){
    document.getElementById('password').style.border="none";
}

function alert_wrng(){
    const y=document.getElementById('wrngpass');
    y.style.position="absolute";
	y.style.visibility="hidden";
}

