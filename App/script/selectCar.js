$("#idCar").on("change", function(){
    selectCar()   
})

function selectCar(){
    let form = new FormData()
    form.append('idCar', $('#idCar').val())

    $.ajax({
        type: "POST",
        url: "App/lib/getCarById.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (data) {
            let res = $.parseJSON(data)

            $('#name').val(res.name)
            $('#name').prop('disabled', false);

            $('#price').val(res.price)
            $('#price').prop('disabled', false);

            $('#model').val(res.model)
            $('#model').prop('disabled', false);

            $('#brand').val(res.brand)
            $('#brand').prop('disabled', false);

            $('#price').val(res.price)
            $('#price').prop('disabled', false);

            $('#year').val(res.year)
            $('#year').prop('disabled', false);

            $('#mileage').val(res.mileage)
            $('#mileage').prop('disabled', false);

            $('#color').val(res.color)
            $('#color').prop('disabled', false);

            $('#nb_door').prop('disabled', false);
            $('#gearbox').prop('disabled', false);
            $('#fuel').prop('disabled', false);
            $('#img_one').prop('disabled', false);
            $('#multiple_image').prop('disabled', false);
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
}