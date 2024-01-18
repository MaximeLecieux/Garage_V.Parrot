$("#day").on("change", function(){
    modifyHourly()   
})

function modifyHourly(){
    let form = new FormData()
    form.append('day', $('#day').val())

    $.ajax({
        type: "POST",
        url: "App/lib/getSchedulesByDay.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (data) {
            let res = $.parseJSON(data)
            let morning = res[0]['morning']
            let afternoon = res[0]['afternoon']

            $('#morning').val(morning)
            $('#morning').prop('disabled', false);

            $('#afternoon').val(afternoon)
            $('#afternoon').prop('disabled', false);
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
}


$('#hourlyForm').on("submit", function(e){
    e.preventDefault()

    let form = new FormData()
    form.append('day', $('#day').val())
    form.append('morning', $('#morning').val())
    form.append('afternoon', $('#afternoon').val())

    $.ajax({
        type: "POST",
        url: "App/lib/modifyHourly.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            $('#message').html('<div class="alert alert-success"><span>Les horaires ont bien été modifiés</span></div>')
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur s\'est produite</span></div>')
            console.log(response)
        }
    })
})