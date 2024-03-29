<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>Doorprize</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container">

        <div class="page-section-heading text-center text-uppercase text-secondary mb-0">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://logos-download.com/wp-content/uploads/2016/07/Guinness_World_Records_logo.png" alt="GWR" height="100" style="margin-bottom: 80px;">                
                </div>
                <div class="col-md-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png" alt="BRI" width="200" style="margin-bottom: 80px;">
                </div>
                <div class="col-md-4">
                    <img src="https://wanitaselamindonesia.com/images/pasted-svg-782959x782.svg?crc=4154468454" alt="BRI" height="100" style="margin-bottom: 80px;">
                </div>
            </div>
        </div>
        
        <!-- Contact Section Heading -->
        <h3 class="text-center text-uppercase text-secondary mb-0" id="header_doorprize">Pemenang Undian Smartphone</h3>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="text-center mt-4" style="margin-bottom: 20px;">
                    <button type="submit" class="btn btn-xl" id="undi_button" data-toggle="modal" data-target="#undi_modal" 
                        style="
                            background-color: #09539c;
                            color: white;
                        ">UNDI SMARTPHONE</button>
                </div>
            </div>
        </div>

        <div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_01"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_02"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_03"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_04"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_05"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_06"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_07"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_08"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_09"></h3>
                <h3 class="text-uppercase text-center" style="color: #09539c;" id="undi_number_10"></h3>
            </div>
        </div>
    </section>

<script>
$(document).ready(function(){
    $('#undi_button').click(function() {
        var array_doorprize
        $.ajax({
            url: "{{ url('api/smartphone') }}",
            type: 'GET',
            async: false,
            dataType: 'json', // added data type
            success: function(res) {
                array_doorprize = res.splice(0,20)

                return array_doorprize
            }


        })
                
                console.log(array_doorprize)
                
                $('#undi_number_01').text(array_doorprize[0].doorprize_name)
                $('#undi_number_02').text(array_doorprize[1].doorprize_name)
                $('#undi_number_03').text(array_doorprize[2].doorprize_name)
                $('#undi_number_04').text(array_doorprize[3].doorprize_name)
                $('#undi_number_05').text(array_doorprize[4].doorprize_name)
                $('#undi_number_06').text(array_doorprize[5].doorprize_name)
                $('#undi_number_07').text(array_doorprize[6].doorprize_name)
                $('#undi_number_08').text(array_doorprize[7].doorprize_name)
                $('#undi_number_09').text(array_doorprize[8].doorprize_name)
                $('#undi_number_10').text(array_doorprize[9].doorprize_name)
        
        $.ajax({
            url: "{{ url('smartphone') }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: false,
            dataType: 'json', // added data type
            data: {array_doorprize: array_doorprize}
        })

    })
})
</script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
