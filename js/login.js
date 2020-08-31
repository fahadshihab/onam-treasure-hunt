function validate_inputs(){
    var name = document.getElementById("login_name").value;
    var code = document.getElementById("login_code").value;
    var allowed_characters = /^[A-Za-z0-9]+$/;
    if(name.match(allowed_characters) && code.match(allowed_characters)){
        login(name, code);
    }
}

function login(name, code){
    xhr = new XMLHttpRequest();
    xhr.open("GET", "../php/team_login.php?team_name=" + name +"&team_code=" + code, true);
    xhr.onreadystatechange = function(){
        if(this.readyState === XMLHttpRequest.DONE && this.status == 200){
            if(this.responseText === "0"){
                alert("utharam thettaanu!");
            }else{
                window.location.replace("https://parakkampaachil.heromanhua.com/game.html");
            }
        }
    };
    xhr.send();
}