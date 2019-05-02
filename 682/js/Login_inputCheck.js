function checkInput(){
    var usr = document.getElementById("usr").value;
    var pwd = document.getElementById("pwd").value;
    
    if(usr == "Username" || usr == ""){
        alert("Username cannot be empty!");
        return false;
    }
    if(pwd == "Password" || pwd == ""){
        alert("Password cannot be empty!");
        return false;
    }
    return true;
}
