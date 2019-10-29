<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dependent dropdown</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2 class="text-center my-5">Laravel 6 Dependent dropdown using jQuery Ajax</h2>
    <div class="col-md-6 offset-md-3">
        {{ Form::open() }}
        <div class="form-group">
            <label for="country">Your Country</label>
            <select class="form-control" name="country" id="country">
                <option value="0" disable="true" selected="true">--- Select Country --</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="divisions">Your Division</label>
            <select class="form-control" name="divisions" id="divisions">
                <option value="" disable="true" selected="true">--- Select Division --</option>
            </select>
        </div>

        <div class="form-group">
            <label for="districts">Your District</label>
            <select class="form-control" name="districts" id="districts">
                <option value="" disable="true" selected="true">--- Select District --</option>
            </select>
        </div>

        <div class="form-group">
            <label for="upazilas">Your Upazila</label>
            <select class="form-control" name="upazilas" id="upazilas">
                <option value="" disable="true" selected="true">--- Select Upazila --</option>
            </select>
        </div>
        {{ Form::close() }}
    </div>
</div>


<script
        src="http://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script>
    $('#country').on('change', function (e) {
        console.log(e);
        var country_id = e.target.value;
        $.get('/json-divisions/'+ country_id, function (data) {
            console.log(data);
            $('#divisions').empty();
            $('#divisions').append('<option value="0" disable="true" selected="true">--- Select Division --</option>');

            $('#districts').empty();
            $('#districts').append('<option value="0" disable="true" selected="true">--- Select District --</option>');

            $('#upazilas').empty();
            $('#upazilas').append('<option value="0" disable="true" selected="true">--- Select Upazila --</option>');

            $.each(data, function (index, divisionsObj) {
                $('#divisions').append('<option value="'+ divisionsObj.id +'">'+ divisionsObj.name +'</option>');
            })
        })
    })

    $('#divisions').on('change', function (e) {
        console.log(e);
        var division_id = e.target.value;
        $.get('/json-districts/'+ division_id, function (data) {
            console.log(data);
            $('#districts').empty();
            $('#districts').append('<option value="0" disable="true" selected="true">--- Select District --</option>');

            $('#upazilas').empty();
            $('#upazilas').append('<option value="0" disable="true" selected="true">--- Select Upazila --</option>');

            $.each(data, function (index, districtsObj) {
                $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.name +'</option>');
            })
        })
    })

    $('#districts').on('change', function (e) {
        console.log(e);
        var district_id = e.target.value;
        $.get('/json-upazilas/'+ district_id, function (data) {
            console.log(data);
            $('#upazilas').empty();
            $('#upazilas').append('<option value="0" disable="true" selected="true">--- Select Upazila --</option>');
            $.each(data, function (index, upazilasObj) {
                $('#upazilas').append('<option value="'+ upazilasObj.id +'">'+ upazilasObj.name +'</option>');
            })
        })
    })
</script>


</body>
</html>