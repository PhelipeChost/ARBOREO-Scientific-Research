var a = "a";

// Revelar letras e numeros da senha
function passwordOne() {
    const tip = document.getElementById("password");
    if(tip.type === "password") {
    tip.type = "text";
}else{
    tip.type = "password";
}
}

