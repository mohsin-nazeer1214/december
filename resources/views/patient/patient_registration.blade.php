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
            <h1>Patient Registration Form</h1>
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
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('patient_registration.store')}}">
             @csrf
             
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Name</label>
                    <input type="name"   name="name" id="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cell No</label>
                    <input type="number" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter Cellno">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Symptoms</label>

                    <select name="symptoms" id="symp" class="custom-select" 
            style="width:150px;">
            @foreach($see as $check)

            <option name="disease" value="{{$check->id}}">{{$check->symptoms}}</option>
            @endforeach
      
    </select>



                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">You May Have These Disease</label>
               
                    <select id="disease" class="form-control" >
                                                <h1>select disease</h1>
			<option value="">Select Disease</option>
		</select>


        
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Select City</label>
                    <select class="custom-select"  name="Location" id="Location" required>
    <option value="" disabled selected>Select The City</option>
    <option value="Islamabad">Islamabad</option>
    <option value="" disabled>Punjab Cities</option>
    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
    <option value="Ahmadpur East">Ahmadpur East</option>
    <option value="Ali Khan Abad">Ali Khan Abad</option>
    <option value="Alipur">Alipur</option>
    <option value="Arifwala">Arifwala</option>
    <option value="Attock">Attock</option>
    <option value="Bhera">Bhera</option>
    <option value="Bhalwal">Bhalwal</option>
    <option value="Bahawalnagar">Bahawalnagar</option>
    <option value="Bahawalpur">Bahawalpur</option>
    <option value="Bhakkar">Bhakkar</option>
    <option value="Burewala">Burewala</option>
    <option value="Chillianwala">Chillianwala</option>
    <option value="Chakwal">Chakwal</option>
    <option value="Chichawatni">Chichawatni</option>
    <option value="Chiniot">Chiniot</option>
    <option value="Chishtian">Chishtian</option>
    <option value="Daska">Daska</option>
    <option value="Darya Khan">Darya Khan</option>
    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
    <option value="Dhaular">Dhaular</option>
    <option value="Dina">Dina</option>
    <option value="Dinga">Dinga</option>
    <option value="Dipalpur">Dipalpur</option>
    <option value="Faisalabad">Faisalabad</option>
    <option value="Ferozewala">Ferozewala</option>
    <option value="Fateh Jhang">Fateh Jang</option>
    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
    <option value="Gojra">Gojra</option>
    <option value="Gujranwala">Gujranwala</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Gujar Khan">Gujar Khan</option>
    <option value="Hafizabad">Hafizabad</option>
    <option value="Haroonabad">Haroonabad</option>
    <option value="Hasilpur">Hasilpur</option>
    <option value="Haveli Lakha">Haveli Lakha</option>
    <option value="Jatoi">Jatoi</option>
    <option value="Jalalpur">Jalalpur</option>
    <option value="Jattan">Jattan</option>
    <option value="Jampur">Jampur</option>
    <option value="Jaranwala">Jaranwala</option>
    <option value="Jhang">Jhang</option>
    <option value="Jhelum">Jhelum</option>
    <option value="Kalabagh">Kalabagh</option>
    <option value="Karor Lal Esan">Karor Lal Esan</option>
    <option value="Kasur">Kasur</option>
    <option value="Kamalia">Kamalia</option>
    <option value="Kamoke">Kamoke</option>
    <option value="Khanewal">Khanewal</option>
    <option value="Khanpur">Khanpur</option>
    <option value="Kharian">Kharian</option>
    <option value="Khushab">Khushab</option>
    <option value="Kot Addu">Kot Addu</option>
    <option value="Jauharabad">Jauharabad</option>
    <option value="Lahore">Lahore</option>
    <option value="Lalamusa">Lalamusa</option>
    <option value="Layyah">Layyah</option>
    <option value="Liaquat Pur">Liaquat Pur</option>
    <option value="Lodhran">Lodhran</option>
    <option value="Malakwal">Malakwal</option>
    <option value="Mamoori">Mamoori</option>
    <option value="Mailsi">Mailsi</option>
    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
    <option value="Mian Channu">Mian Channu</option>
    <option value="Mianwali">Mianwali</option>
    <option value="Multan">Multan</option>
    <option value="Murree">Murree</option>
    <option value="Muridke">Muridke</option>
    <option value="Mianwali Bangla">Mianwali Bangla</option>
    <option value="Muzaffargarh">Muzaffargarh</option>
    <option value="Narowal">Narowal</option>
    <option value="Nankana Sahib">Nankana Sahib</option>
    <option value="Okara">Okara</option>
    <option value="Renala Khurd">Renala Khurd</option>
    <option value="Pakpattan">Pakpattan</option>
    <option value="Pattoki">Pattoki</option>
    <option value="Pir Mahal">Pir Mahal</option>
    <option value="Qaimpur">Qaimpur</option>
    <option value="Qila Didar Singh">Qila Didar Singh</option>
    <option value="Rabwah">Rabwah</option>
    <option value="Raiwind">Raiwind</option>
    <option value="Rajanpur">Rajanpur</option>
    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
    <option value="Rawalpindi">Rawalpindi</option>
    <option value="Sadiqabad">Sadiqabad</option>
    <option value="Safdarabad">Safdarabad</option>
    <option value="Sahiwal">Sahiwal</option>
    <option value="Sangla Hill">Sangla Hill</option>
    <option value="Sarai Alamgir">Sarai Alamgir</option>
    <option value="Sargodha">Sargodha</option>
    <option value="Shakargarh">Shakargarh</option>
    <option value="Sheikhupura">Sheikhupura</option>
    <option value="Sialkot">Sialkot</option>
    <option value="Sohawa">Sohawa</option>
    <option value="Soianwala">Soianwala</option>
    <option value="Siranwali">Siranwali</option>
    <option value="Talagang">Talagang</option>
    <option value="Taxila">Taxila</option>
    <option value="Toba Tek Singh">Toba Tek Singh</option>
    <option value="Vehari">Vehari</option>
    <option value="Wah Cantonment">Wah Cantonment</option>
    <option value="Wazirabad">Wazirabad</option>
    <option value="" disabled>Sindh Cities</option>
    <option value="Badin">Badin</option>
    <option value="Bhirkan">Bhirkan</option>
    <option value="Rajo Khanani">Rajo Khanani</option>
    <option value="Chak">Chak</option>
    <option value="Dadu">Dadu</option>
    <option value="Digri">Digri</option>
    <option value="Diplo">Diplo</option>
    <option value="Dokri">Dokri</option>
    <option value="Ghotki">Ghotki</option>
    <option value="Haala">Haala</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Islamkot">Islamkot</option>
    <option value="Jacobabad">Jacobabad</option>
    <option value="Jamshoro">Jamshoro</option>
    <option value="Jungshahi">Jungshahi</option>
    <option value="Kandhkot">Kandhkot</option>
    <option value="Kandiaro">Kandiaro</option>
    <option value="Karachi">Karachi</option>
    <option value="Kashmore">Kashmore</option>
    <option value="Keti Bandar">Keti Bandar</option>
    <option value="Khairpur">Khairpur</option>
    <option value="Kotri">Kotri</option>
    <option value="Larkana">Larkana</option>
    <option value="Matiari">Matiari</option>
    <option value="Mehar">Mehar</option>
    <option value="Mirpur Khas">Mirpur Khas</option>
    <option value="Mithani">Mithani</option>
    <option value="Mithi">Mithi</option>
    <option value="Mehrabpur">Mehrabpur</option>
    <option value="Moro">Moro</option>
    <option value="Nagarparkar">Nagarparkar</option>
    <option value="Naudero">Naudero</option>
    <option value="Naushahro Feroze">Naushahro Feroze</option>
    <option value="Naushara">Naushara</option>
    <option value="Nawabshah">Nawabshah</option>
    <option value="Nazimabad">Nazimabad</option>
    <option value="Qambar">Qambar</option>
    <option value="Qasimabad">Qasimabad</option>
    <option value="Ranipur">Ranipur</option>
    <option value="Ratodero">Ratodero</option>
    <option value="Rohri">Rohri</option>
    <option value="Sakrand">Sakrand</option>
    <option value="Sanghar">Sanghar</option>
    <option value="Shahbandar">Shahbandar</option>
    <option value="Shahdadkot">Shahdadkot</option>
    <option value="Shahdadpur">Shahdadpur</option>
    <option value="Shahpur Chakar">Shahpur Chakar</option>
    <option value="Shikarpaur">Shikarpaur</option>
    <option value="Sukkur">Sukkur</option>
    <option value="Tangwani">Tangwani</option>
    <option value="Tando Adam Khan">Tando Adam Khan</option>
    <option value="Tando Allahyar">Tando Allahyar</option>
    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
    <option value="Thatta">Thatta</option>
    <option value="Umerkot">Umerkot</option>
    <option value="Warah">Warah</option>
    <option value="" disabled>Khyber Cities</option>
    <option value="Abbottabad">Abbottabad</option>
    <option value="Adezai">Adezai</option>
    <option value="Alpuri">Alpuri</option>
    <option value="Akora Khattak">Akora Khattak</option>
    <option value="Ayubia">Ayubia</option>
    <option value="Banda Daud Shah">Banda Daud Shah</option>
    <option value="Bannu">Bannu</option>
    <option value="Batkhela">Batkhela</option>
    <option value="Battagram">Battagram</option>
    <option value="Birote">Birote</option>
    <option value="Chakdara">Chakdara</option>
    <option value="Charsadda">Charsadda</option>
    <option value="Chitral">Chitral</option>
    <option value="Daggar">Daggar</option>
    <option value="Dargai">Dargai</option>
    <option value="Darya Khan">Darya Khan</option>
    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
    <option value="Doaba">Doaba</option>
    <option value="Dir">Dir</option>
    <option value="Drosh">Drosh</option>
    <option value="Hangu">Hangu</option>
    <option value="Haripur">Haripur</option>
    <option value="Karak">Karak</option>
    <option value="Kohat">Kohat</option>
    <option value="Kulachi">Kulachi</option>
    <option value="Lakki Marwat">Lakki Marwat</option>
    <option value="Latamber">Latamber</option>
    <option value="Madyan">Madyan</option>
    <option value="Mansehra">Mansehra</option>
    <option value="Mardan">Mardan</option>
    <option value="Mastuj">Mastuj</option>
    <option value="Mingora">Mingora</option>
    <option value="Nowshera">Nowshera</option>
    <option value="Paharpur">Paharpur</option>
    <option value="Pabbi">Pabbi</option>
    <option value="Peshawar">Peshawar</option>
    <option value="Saidu Sharif">Saidu Sharif</option>
    <option value="Shorkot">Shorkot</option>
    <option value="Shewa Adda">Shewa Adda</option>
    <option value="Swabi">Swabi</option>
    <option value="Swat">Swat</option>
    <option value="Tangi">Tangi</option>
    <option value="Tank">Tank</option>
    <option value="Thall">Thall</option>
    <option value="Timergara">Timergara</option>
    <option value="Tordher">Tordher</option>
    <option value="" disabled>Balochistan Cities</option>
    <option value="Awaran">Awaran</option>
    <option value="Barkhan">Barkhan</option>
    <option value="Chagai">Chagai</option>
    <option value="Dera Bugti">Dera Bugti</option>
    <option value="Gwadar">Gwadar</option>
    <option value="Harnai">Harnai</option>
    <option value="Jafarabad">Jafarabad</option>
    <option value="Jhal Magsi">Jhal Magsi</option>
    <option value="Kacchi">Kacchi</option>
    <option value="Kalat">Kalat</option>
    <option value="Kech">Kech</option>
    <option value="Kharan">Kharan</option>
    <option value="Khuzdar">Khuzdar</option>
    <option value="Killa Abdullah">Killa Abdullah</option>
    <option value="Killa Saifullah">Killa Saifullah</option>
    <option value="Kohlu">Kohlu</option>
    <option value="Lasbela">Lasbela</option>
    <option value="Lehri">Lehri</option>
    <option value="Loralai">Loralai</option>
    <option value="Mastung">Mastung</option>
    <option value="Musakhel">Musakhel</option>
    <option value="Nasirabad">Nasirabad</option>
    <option value="Nushki">Nushki</option>
    <option value="Panjgur">Panjgur</option>
    <option value="Pishin Valley">Pishin Valley</option>
    <option value="Quetta">Quetta</option>
    <option value="Sherani">Sherani</option>
    <option value="Sibi">Sibi</option>
    <option value="Sohbatpur">Sohbatpur</option>
    <option value="Washuk">Washuk</option>
    <option value="Zhob">Zhob</option>
    <option value="Ziarat">Ziarat</option>
  </select>


                  </div>


                  <div class="form-check">
                    <input type="checkbox" name="checks" value="agree" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Do You Agree with Terms and Conditions</label>
                  </div>
                </div>
            


                <label for="email">Enter Message</label>

  <li>
<textarea name="msg" class="field-style" placeholder="Message"></textarea>

</li>

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script>


jQuery(document).ready(function(){
			jQuery('#symp').change(function(){


                let symptoms_id=
                jQuery(this).val();

                jQuery.ajax({

url:'/getdisease',
type:'post',
data:'symptoms_id='+symptoms_id+'&_token={{csrf_token()}}',


success:function(result){

    jQuery('#disease').html(result)

    //    alert(symptoms_id);

}



});
 
            });
			});
</script>
</html>
