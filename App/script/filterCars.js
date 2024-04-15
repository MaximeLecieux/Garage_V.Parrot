//============ Filter Cars By Price ============

$('#priceSelect').append($('#price').val())

let minPriceCar = $('#minPriceCar').html()
$('#price').change(function(){
    $('.list-cars').empty()
    let priceSelect = $('#priceSelect')
    priceSelect.empty()
    priceSelect.append($('#price').val())

    let form = new FormData()
    form.append('minPrice', $('#minPriceCar').text())
    form.append('priceSelect', $('#price').val())

    $.ajax({
        type: "POST",
        url: "App/lib/filterByPrice.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (data) {
            let res = $.parseJSON(data)
            res.forEach(element => {
                $('.list-cars').prepend('<div class="card-car col-lg-3 col-md-4 mx-2 my-2"><div class="card"><div class="card-header"><img class="card-img-top img-service" src="uploads/images/cars/'+element.first_img+'" alt="'+element.name+'"></div><div class="card-body "><h3 class="card-title center">'+element.name+'</h3><p class="card-text">'+element.model+'</p><ul class="list-group list-group-flush"><li class="list-group-item">'+element.year+'</li><li class="list-group-item">'+element.mileage+' km</li><li class="list-group-item price">'+element.price+'</li></ul><a href="car.php?idCar='+element.idCar+'" class="btn mt-2">Détails</a></div></div></div>')
            })
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
    
})


//============ Filter Cars By Years ============

$('#yearSelect').append($('#year').val())

let minYearCar = $('#minYearCar').html()
$('#year').change(function(){
    $('.list-cars').empty()
    let yearSelect = $('#yearSelect')
    yearSelect.empty()
    yearSelect.append($('#year').val())

    let form = new FormData()
    form.append('minYear', $('#minYearCar').text())
    form.append('yearSelect', $('#year').val())

    $.ajax({
        type: "POST",
        url: "App/lib/filterByYear.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (data) {
            let res = $.parseJSON(data)
            res.forEach(element => {
                $('.list-cars').prepend('<div class="card-car col-lg-3 col-md-4 mx-2 my-2"><div class="card"><div class="card-header"><img class="card-img-top img-service" src="uploads/images/cars/'+element.first_img+'" alt="'+element.name+'"></div><div class="card-body "><h3 class="card-title center">'+element.name+'</h3><p class="card-text">'+element.model+'</p><ul class="list-group list-group-flush"><li class="list-group-item">'+element.year+'</li><li class="list-group-item">'+element.mileage+' km</li><li class="list-group-item price">'+element.price+'</li></ul><a href="car.php?idCar='+element.idCar+'" class="btn mt-2">Détails</a></div></div></div>')
            })
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
    
})

//============ Filter Cars By Mileage ============

$('#mileageSelect').append($('#mileage').val())

let minMileageCar = $('#minMileageCar').html()
$('#mileage').change(function(){
    $('.list-cars').empty()
    let yearSelect = $('#mileageSelect')
    yearSelect.empty()
    yearSelect.append($('#mileage').val())

    let form = new FormData()
    form.append('minMileage', $('#minMileageCar').text())
    form.append('mileageSelect', $('#mileage').val())

    $.ajax({
        type: "POST",
        url: "App/lib/filterByMileage.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (data) {
            let res = $.parseJSON(data)
            res.forEach(element => {
                $('.list-cars').prepend('<div class="card-car col-lg-3 col-md-4 mx-2 my-2"><div class="card"><div class="card-header"><img class="card-img-top img-service" src="uploads/images/cars/'+element.first_img+'" alt="'+element.name+'"></div><div class="card-body "><h3 class="card-title center">'+element.name+'</h3><p class="card-text">'+element.model+'</p><ul class="list-group list-group-flush"><li class="list-group-item">'+element.year+'</li><li class="list-group-item">'+element.mileage+' km</li><li class="list-group-item price">'+element.price+'</li></ul><a href="car.php?idCar='+element.idCar+'" class="btn mt-2">Détails</a></div></div></div>')
            })
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
    
})

//============ Reset Button ============

$('#buttonPrice').click(function(){
    $('.list-cars').off()
})