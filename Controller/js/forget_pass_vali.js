function validateform(){  
    const femail=document.forgetform.femail.value;     
    if (femail==""){   
        document.getElementById('femail').style.border="1px solid red"; 
        return false; 
    }    
}

function alert_email(){
    document.getElementById('femail').style.border="none";
}

function alert_npass(){
    document.getElementById('npass').style.border="none";
}

function alert_cnpass(){
    document.getElementById('cnpass').style.border="none";
}

function alert_nomatch(){
    document.getElementById('validation').style.visibility="hidden";
    document.getElementById('validation').style.position="absolute"; 

}

function validateform1(){  
    const npass=document.forgetform1.npass.value;     
    const cnpass=document.forgetform1.cnpass.value;     

    if (npass==""||cnpass==""){   
        if (npass==""){   
            document.getElementById('npass').style.border="1px solid red"; 
        }  
        if (npass==""||cnpass==""){   
            document.getElementById('cnpass').style.border="1px solid red"; 
        } 
        
        return false; 
    }  
    if (npass!=cnpass){   
        document.getElementById('validation').style.visibility="visible"; 
        document.getElementById('validation').style.position="relative"; 
        
        return false;
    }
    

}


