var a = "a";

// Revelar letras e numeros da senha
function passwordOne() {
    const tip = document.getElementById("senha");
    if(tip.type === "password") {
    tip.type = "text";
}else{
    tip.type = "password";
}
}

