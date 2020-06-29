function validateform(){

     var password, repassword;

     password=document.getElementById('register-form-password').value;
     repassword=document.getElementById('register-form-repassword').value;

     if(password!=repassword){

       document.getElementById('span').innerHTML="Password Re-entered doesn't match.";
      return false;
     }

     else{

        return true;
     }

}