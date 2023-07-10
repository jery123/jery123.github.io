function validateform(){  
    var status=false; 
    var name=document.registForm.name.value;  
    var email=document.registForm.email.value;  
    var pwd=document.registForm.pwd.value;  
    var cpwd=document.registForm.cpwd.value;  
     
      if(name==""){  
        document.getElementById("name_err").innerHTML= "Please enter your name" ;  
        status=false;
        }else{  
        document.getElementById("namelocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
        status=true;
        }  
          
        if(passwordlength<6){  
        document.getElementById("passwordlocation").innerHTML=  
        " <img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/> Password must be greater than 6";  
        status=false; 
        }else{  
        document.getElementById("passwordlocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
        }  
          
        return status;  
        
    }  


    