function valid(){
    var email = document.getElementsByName('email');
    let pass = document.getElementsByName('pass');
    if(email.value === ""){
        document.getElementsByName('result').innerHTML("Please Enter Email");
        alert("Please Enter Email");
        return false;
    } else if(pass.value.length<8){
        alert("Password must be more than 8 Characters");
        return false;
    }
    return;
}

function sendData(){
    var email = $("#email").val();
    var pass = $("#pass").val();
    $.post("login.php",{
        email:email,
        pass:pass
    },
    function(data){
        alert(data)
        $("#result").html(data);
    });
}