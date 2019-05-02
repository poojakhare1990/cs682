function checkLoginInput(){
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
function checkRegisterInput(){
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
function checkCreateBuildingInput(){
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var manager = document.getElementById("manager").value;
    var technician = document.getElementById("technician").value;
    
    if(id == "ID number(Number Only)" || id ==""){
        alert("ID number cannot be empty!");
        return false;
    }
    if(name == "Building name" || name == ""){
        alert("Building name cannot be empty!");
        return false;
    }
    if(manager == "manager" || manager == ""){
        alert("Manager name cannot be empty!");
        return false;
    }
    if(technician == "technician" || technician == ""){
        alert("Technician name cannot be empty!");
        return false;
    }
}
























