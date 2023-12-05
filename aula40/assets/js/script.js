//Capturando elemento do html
var pass = document.getElementById("pass")
var passConfirm = document.getElementById("pass-confirm")

function checkPass() {
    let check = true
    if(pass.value != passConfirm.value){
        alert("Senhas não conferem!");
        check = false
    }
    return check
}


pass.addEventListener("mouseover", ()=>{
    pass.type = "text"
})

pass.addEventListener("mouseleave", ()=>{
    pass.type = "password"
})
