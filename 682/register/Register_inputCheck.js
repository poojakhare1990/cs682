function checkInput(){
    var id = document.getElementById("id").value;
    var usr = document.getElementById("usr").value;
    var pwd1 = document.getElementById("pwd1").value;
    var pwd2 = document.getElementById("pwd2").value;
    
    if(id == "ID number(Number Only)" || id ==""){
        alert("ID number cannot be empty!");
        return false;
    }
    if(usr == "Username" || usr == ""){
        alert("Username cannot be empty!");
        return false;
    }
    if(pwd1 == "Password" || pwd1 ==""){
        alert("Password cannot be empty!");
        return false;
    }
    if(pwd2 == "Password" || pwd2 == ""){
        alert("Confirmed password cannot be empty!");
        return false;
    }
    if(pwd1 != pwd2){
        alert("Password should be the same!");
        return false;
    }
    return true;
}
