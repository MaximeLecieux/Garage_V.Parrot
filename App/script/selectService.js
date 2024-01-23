$("#idService").on("change", function(){
    selectService()   
})

function selectService(){
    let form = new FormData()
    form.append('idService', $('#idService').val())

    $.ajax({
        type: "POST",
        url: "App/lib/getServiceById.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (data) {
            let res = $.parseJSON(data)
            console.log(res)
            let name = res[0]['name']
            let description = res[0]['description']

            $('#title').val(name)
            $('#title').prop('disabled', false);

            $('#description').val(description)
            $('#description').prop('disabled', false);

            $('#img').prop('disabled', false);
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
}