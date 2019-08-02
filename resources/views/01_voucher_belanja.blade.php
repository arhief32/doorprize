<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png" alt="BRI" width="200" style="margin-bottom: 80px;">
        </div>
        
        <!-- Contact Section Heading -->
        <h2 class="text-center text-uppercase text-secondary mb-0">Pemenang Voucher Belanja <br /> Senilai Rp 1.000.000,00</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="text-center mt-4" style="margin-bottom: 20px;">
            <button type="submit" class="btn btn-xl" id="undi_button" data-toggle="modal" data-target="#undi_modal" 
                style="
                    background-color: #09539c;
                    color: white;
                ">UNDI</button>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <!-- Contact Section Form -->
                <table class="table" id="table_doorprize">
                    <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                        @for ($j = 0; $j < 10; $j++)
                            <th scope="row" id="hasil_undi_{{$i.$j}}">XX-XXXX</th>
                            
                        @endfor
                        </tr>
                    @endfor
                                    
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="undi_modal" tabindex="-1" role="dialog" aria-labelledby="undi_button" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title -->
                                <h2 class="text-center text-uppercase text-secondary mb-0">Pemenang Voucher Belanja <br /> Senilai Rp 1.000.000,00</h2>
                                <!-- Icon Divider -->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon">
                                            <i class="fas fa-star"></i>
                                        </div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Text -->
                                <table class="table" id="table_doorprize_undi">
                                    <tbody>
                                    @for ($i = 0; $i < 10; $i++)
                                        <tr>
                                        @for ($j = 0; $j < 10; $j++)
                                            <th scope="row" id="undi_{{$i.$j}}">XX-XXXX</th>
                                        @endfor
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                                <br>
                                <button class="btn btn-xl" style="
                                    background-color: #09539c;
                                    color: white;
                                ">
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
$(document).ready(function(){
    $('#undi_button').click(function() {
        // get data semua yang belum dapet doorprize apapun
        $.ajax({
            url: "{{ url('api/doorprize') }}",
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                var array_doorprize = res

                @for($i = 0; $i < 50; $i++)
                console.log(array_doorprize[{{$i}}])
                @endfor
                
                // @for ($i = 0; $i < 50; $i++)
                //     @for ($j = 0; $j < 10; $j++)
                        
                //         @for($i = 0; $i < 20; $i++)
                //             setTimeout(function () {
                //                 $('#undi_{{$i.$j}}').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                //         @endfor
                //         @for($i = 0; $i < 20; $i++)
                //             }, 100)
                //         @endfor

                        
                //         // @for($k = 0; $k < 20; $k++)
                //         //     setTimeout(function () {
                //         //         var value = array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name
                //         //         $('#undi_{{$i.$j}}').text(value)
                //         // @endfor
                //         // @for($k = 0; $k < 20; $k++)
                //         //     }, 100)
                //         // @endfor
                        
                //     @endfor
                // @endfor

            }
        })
        
                
                // // undi nomor 1
                // @for($i = 0; $i < 20; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_01').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 20; $i++)
                //     }, 100)
                // @endfor

                // // undi nomor 2
                // @for($i = 0; $i < 40; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_02').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 40; $i++)
                //     }, 100)
                // @endfor

                // // undi nomor 3
                // @for($i = 0; $i < 60; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_03').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 60; $i++)
                //     }, 100)
                // @endfor
                
                // // undi nomor 4
                // @for($i = 0; $i < 80; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_04').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 80; $i++)
                //     }, 100)
                // @endfor
                
                // // undi nomor 5
                // @for($i = 0; $i < 100; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_05').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 100; $i++)
                //     }, 100)
                // @endfor

                // // undi nomor 6
                // @for($i = 0; $i < 120; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_06').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 120; $i++)
                //     }, 100)
                // @endfor

                // // undi nomor 7
                // @for($i = 0; $i < 140; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_07').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 140; $i++)
                //     }, 100)
                // @endfor

                // // undi nomor 8
                // @for($i = 0; $i < 160; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_08').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 160; $i++)
                //     }, 100)
                // @endfor
                
                // // undi nomor 9
                // @for($i = 0; $i < 180; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_09').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 180; $i++)
                //     }, 100)
                // @endfor
                
                // // undi nomor 10
                // @for($i = 0; $i < 200; $i++)
                //     setTimeout(function () {
                //         $('#undi_number_10').text(array_doorprize[Math.floor(Math.random() * array_doorprize.length)].doorprize_name)
                // @endfor
                // @for($i = 0; $i < 200; $i++)
                //     }, 100)
                // @endfor
            
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
