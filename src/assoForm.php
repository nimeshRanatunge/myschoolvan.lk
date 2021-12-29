<?php
    require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Driver_registration_form</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="../css/Style.css">

  <link rel="stylesheet" href="../css/mobile-small.css">
  <link rel="stylesheet" href="../css/mobile-large.css">
</head>

<body style="background-image: url(../assets/main1.jpg); background-repeat: no-repeat; background-size: cover;">
  <header>
    <div class="container p-4" style="background-color: #EEEE; border-radius: 20px;">
      <div id="smDrForm">
        <h2 style="text-align: center;">All Island Inter District School Children Transportation Association</h2>
        <h6 style="text-align: center;">In association with SURAKSHA MAGA</h6>
      </div>
      <div class="row" id="lgDrForm">
        <div class="col-2 col-sm-2"><img src="../assets/logo1c.jpg" style="width: 150px;" alt=""></div>
        <div class="col-8 col-sm-8" style="text-align: center;"><h2>All Island Inter District School Children Transportation Association</h2>
          <h6 style="text-align: center;">In association with SURAKSHA MAGA</h6></div>
        <div class="col-2 col-sm-2"><img src="../assets/logo_asso.jpg" style="width: 150px; border-radius: 100%;" alt=""></div>
      </div>
        <p>Fill the form for register as a new member. </p>



        <form action="./assoForm.php" method="post">

          <label for="date">Date</label>
          <input type="date" class="form-control" id="regdate" name="date" style="width: 20%;">
          <br>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="m_association" placeholder="Main association">
            </div>
            <div class="col">
              <input type="text" class="form-control" id="association" placeholder="Association">
            </div>
          </div>
          <input type="text" class="form-control fill" id="dri_name" placeholder="Your Name">
          <input type="text" class="form-control fill" id="regno" placeholder="Registration Number">
          <input type="number" class="form-control fill" id="phone" placeholder="Mobile Number">
          <input type="text" class="form-control fill" id="r_address" placeholder="Residential Address">
          <input type="text" class="form-control fill" id="police" placeholder="Nearest Police Station">
          <input type="text" class="form-control fill" id="town" placeholder="Town">
          <input type="text" class="form-control fill" id="vehregno" placeholder="Vehicle Registration Number">
          <input type="text" class="form-control fill" id="starting" placeholder="Journry Starting Point">

          <label for="cities" style="margin-top: 20px;">City/cities covered</label>
          <textarea class="form-control fill" id="cities" name="cities" style="width:500px; height:150px;">
            </textarea>

          <label for="schools" style="margin-top: 20px;">School/schools covered</label>
          <textarea class="form-control fill" id="schools" name="schools" style="width:500px; height:150px;"></textarea>

          <input type="text" class="form-control fill" id="officername" placeholder="Officer's Name">

          <input type="submit" name="create" value="Register" class="btn btn-primary" id="register">
          
              </form>




      </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //sweet alert
        $(function(){
            $('#register').click(function(e){
                var valid = this.form.checkValidity();

                if(valid){

                    var regdate = $('#regdate').val();
                    var m_association = $('#m_association').val();
                    var association = $('#association').val();
                    var dri_name = $('#dri_name').val();
                    var regno = $('#regno').val();
                    var phone = $('#phone').val();
                    var r_address = $('#r_address').val();
                    var police = $('#police').val();
                    var town = $('#town').val();
                    var vehregno = $('#vehregno').val();
                    var starting = $('#starting').val();
                    var cities = $('#cities').val();
                    var schools = $('#schools').val();
                    var officername = $('#officername').val();


                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: './process.php',
                        data: {
                          regdate: regdate,
                          m_association: m_association,
                          association: association,
                          dri_name: dri_name,
                          regno: regno,
                          phone: phone,
                          r_address: r_address,
                          police: police,
                          town: town,
                          vehregno: vehregno,
                          starting: starting,
                          cities: cities,
                          schools: schools,
                          officername: officername},
                        success : function(data){
                            Swal.fire({
                            'title' : 'Successful',
                            'text' : data,
                            'type' : 'success'
                             })
                        },
                        error : function(data){
                            Swal.fire({
                            'title' : 'Errors',
                            'text' : 'There were errors while saving the data',
                            'type' : 'error'
                             })
                        }
                    });
                    
                }else{
                    
                }

                
            });
        });
    </script>
</body>
</html>