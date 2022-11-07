
    function valid() {
    var fname =document.forms.RegForm.fn.value;
    var lname =document.forms.RegForm.ln.value;
    var uname =document.forms.RegForm.un.value;
    var email =document.forms.RegForm.email.value;
    var pass =document.forms.RegForm.pass.value;
    var cpass =document.forms.RegForm.cpass.value;
    var gender =document.forms.RegForm.gen.value;
    var phone =document.forms.RegForm.phno.value;
                
    var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; 
    var regPhone=/^\d{10}$/;                                       
    var regName = /\d+$/g;               

    if (fname == "" || regName.test(fname)) {
        window.alert("Please enter your first name properly.");
        fname.focus();
        return false;
        }

    if (lname == "" || regName.test(lname)) {
        window.alert("Please enter your last name properly.");
        lname.focus();
        return false;
        }
    if (uname == "" || regName.test(uname)) {
        window.alert("Please enter your user name properly.");
        uname.focus();
        return false;
        }
 
    if (email == "" || !regEmail.test(email)) {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
        }
                  
    if (pass == "") {
        alert("Please enter your password");
        pass.focus();
        return false;
        }
 
    if(pass.length <8){
        alert("Password should be atleast 6 character long");
        pass.focus();
        return false;
        }
    if (cpass != pass) {
        alert("password and conform password are not same");
        cpass.focus();
        return false;
        }
    if (gender.length <= 0) {  
    alert("Gender is required");  
    gender.focus();  
    return false;  
    } 
    if (phone == "" || !regPhone.test(phone)) {
        alert("Please enter valid phone number.");
        phone.focus();
        return false;
        }
 
    return true;
    }
