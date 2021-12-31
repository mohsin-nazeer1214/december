<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Doctors Registration Form</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('doctor_registration.store')}}" enctype="multipart/form-data" method="post">
                  @csrf
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Name*</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Father Name*</label>
                    <input type="text" name="father_name"  class="form-control" id="exampleInputEmail1" placeholder="Enter Father Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth*</label>
                    <input type="date" name="date_of_birth"  class="form-control" id="exampleInputEmail1" placeholder="Date of Birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender*</label>
                    <select id="gender" name="gender" class="form-control" >
			<option value="male">Male </option>
            <option value="female">Female </option>
            <option value="others">Others </option>


		</select>                  </div>
        <div class="form-group">
                    <label for="exampleInputEmail1">Nationality*</label>
                    <select class="form-control"  name="nationality">
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>		


		</select>                  </div>



        <div class="form-group">
                    <label for="exampleInputEmail1">Cnic No</label>
                    <input type="cnic" name="cnic"  class="form-control" id="exampleInputEmail1" placeholder="Enter Cnic No">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="number" name="mobile_no" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile No">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email_adress" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
            
            <!-- /.card -->

        
            <!-- /.card -->
            <!-- Horizontal Form -->
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
