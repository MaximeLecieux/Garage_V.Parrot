$("#idUser").on("change", function(){
    selectUser()   
})

function selectUser(){
    let form = new FormData()
    form.append('idUser', $('#idUser').val())

    $.ajax({
        type: "POST",
        url: "App/lib/getUserById.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (data) {
            let res = $.parseJSON(data)
            console.log(res)

            $('#email').val(res.email)
            $('#email').prop('disabled', false);

            $('#modifyPassword').prop('disabled', false);

            $('#role').prop('disabled', false);
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
}