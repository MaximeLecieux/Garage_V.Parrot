let validatePasswordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/ // Regex for strong password

function verifyPassword(){
    password = $("#password").val()
    if (validatePasswordRegex.test(password) === false){
        $('#messagePassword').html("Un mot de passe valide est requis (8 caractères minimum, 1 lettre majuscule, 1 lettre minuscule, 1 chiffre et 1 caractère spécial)")
        $('#messagePassword').css("color", "red")
        return false
    } else {
        $('#messagePassword').html("Mot de passe valide")
        $('#messagePassword').css("color", "green")
        return true
    }
}

$("#password").on("blur", function(){
    verifyPassword()

    if (verifyPassword() === true){
        $('#btnAddUser').prop('disabled', false);
    }
})