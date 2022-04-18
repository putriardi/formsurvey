<!doctype html>
<html class="fixed">

<head>
<meta charset="UTF-8">

  <title>Hasil Survey Kepuasan Pelanggan PJNHK</title>
  <link rel="shortcut icon" href="/images/logo.png" />

<!-- Vendor CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

<!-- Theme CSS -->
<link rel="stylesheet" href="assets/stylesheets/theme.css" />

<!-- Skin CSS -->
<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

<!-- Head Libs -->
<script src="assets/vendor/modernizr/modernizr.js"></script>
 
</head>

<body>
  <section class="text" >
    <div class="p-5 bg-image" style="background-image: url('https://www.pjnhk.go.id/storage/uploads/profil/fewanpYKIznYpo2XjWH55PZiKMVeGpS7ISmdXufj.jpeg');height: 300px;"></div>
    <div class="card mx-5 mx-md-5 shadow-5-strong" style="margin-top: -100px;">
      <div class="card-body py-5 px-md-5">
        <div class="justify-content-center" >
          <h2 class="fw-bold text-center" style="font-size: 30px;">HASIL SURVEY KEPUASAN PELANGGAN</h2>
          <div id="piechart1" style="height: 500px;"></div>
          <div id="piechart2" style="height: 500px;"></div>
          <div id="piechart3" style="height: 500px;"></div>
          <div id="piechart4" style="height: 500px;"></div>
          <div id="piechart5" style="height: 500px;"></div>
          <div id="piechart6" style="height: 500px;"></div>
          <div id="piechart7" style="height: 500px;"></div>
          <div id="piechart8" style="height: 500px;"></div>
          <div id="piechart9" style="height: 500px;"></div>
          <div id="piechart10" style="height: 500px;"></div>
        </div>
          <!-- start: page -->
          <section class="panel" style="width:75%; margin:auto; ">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
						
							<h2 class="panel-title fw-bold" style="font-size: 16px;">Pengalaman Pasien selama mendapatkan pelayanan di RSJPDHK</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped" id="datatable-default">
									<thead>
										<tr class="bg-info">
											<th style="font-size: 15px; font-family: Arial, Helvetica, sans-serif;">Tanggal Survey</th>
											<th style="font-size: 15px; font-family: Arial, Helvetica, sans-serif;">Pengalaman Pasien</th>
										</tr>
									</thead>
									<tbody>
                  @foreach ($pengalaman as $val)
										<tr>
											<td style="width:150px; font-size: 13px; font-family: Arial, Helvetica, sans-serif;">{{ $val->tgl_surv }}</td>
											<td style="font-size: 14px; font-family: Arial, Helvetica, sans-serif;">{{ $val->pengalaman }}</td>	
										</tr>
                    @endforeach	
									</tbody>
								</table>
							</div>
						</section>
      </div>

    </div>
    </div>

  </section>



<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data1 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData1; ?>
    ]);
    var data2 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData2; ?>
    ]);
    var data3 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData3; ?>
    ]);
    var data4 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData4; ?>
    ]);
    var data5 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData5; ?>
    ]);
    var data6 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData6; ?>
    ]);
    var data7 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData7; ?>
    ]);
    var data8 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData8; ?>
    ]);
    var data9 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData9; ?>
    ]);
    var data10 = google.visualization.arrayToDataTable([
      ['Kategori', 'Hasil'],
      <?php echo  $chartData10; ?>
    ]);

    var options1 = {
      title: '1. Bagaimana persyaratan administrasi yang harus dipenuhi dalam pengurusan pelayanan (rawat jalan atau rawat inap) di RSJPDHK?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options2 = {
      title: '2. Menurut Bpk/Ibu/Sdr bagaimana proses pendaftaran rawat jalan di RSJPDHK?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options3 = {
      title: '3. Secara umum, bagaimana jangka waktu yang diperlukan untuk menyelesaikan proses pelayanan di RSJPDHK?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options4 = {
      title: '4. Menurut Bapak/Ibu/sdr, bagaimana kewajaran biaya/tarif yang dikenakan dalam memperoleh pelayanan di RSJPDHK?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options5 = {
      title: '5. Menurut Bpk/Ibu/Sdr, bagaimana hasil pemeriksaan yang diberikan dari unit layanan?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options6 = {
      title: '6. Menurut Bpk/Ibu/Sdr, bagaimana tentang fasilitas (mis. toilet, ruang rawat, ruang tunggu, dll) yang ada di RSJPDHK?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options7 = {
      title: '7. Menurut Bpk/Ibu/Sdr, bagaimana kemampuan (pengetahuan, keahlian, keterampilan) para pegawai/petugas di RSJPDHK?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options8 = {
      title: '8. Bagaimana sikap petugas/pegawai di RSJPDHK dalam memberikan pelayanan?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options9 = {
      title: '9. Menurut Bpk/Ibu/Sdr, bagaimana penanganan pegaduan, saran dan masukan, serta tindak lanjutnya di RSJPDHK?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };
    var options10 = {
      title: '10. Secara keseluruhan, pendapat Bpk/Ibu/Sdr tentang pelayanan yang telah diberikan?',
      colors: ['#52D726', '#fccf03', '#FF7300', '#FF0000']
    };

    var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
    var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
    var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));
    var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));
    var chart5 = new google.visualization.PieChart(document.getElementById('piechart5'));
    var chart6 = new google.visualization.PieChart(document.getElementById('piechart6'));
    var chart7 = new google.visualization.PieChart(document.getElementById('piechart7'));
    var chart8 = new google.visualization.PieChart(document.getElementById('piechart8'));
    var chart9 = new google.visualization.PieChart(document.getElementById('piechart9'));
    var chart10 = new google.visualization.PieChart(document.getElementById('piechart10'));

    chart1.draw(data1, options1);
    chart2.draw(data2, options2);
    chart3.draw(data3, options3);
    chart4.draw(data4, options4);
    chart5.draw(data5, options5);
    chart6.draw(data6, options6);
    chart7.draw(data7, options7);
    chart8.draw(data8, options8);
    chart9.draw(data9, options9);
    chart10.draw(data10, options10);
  }
</script>
	<!-- Vendor -->
  <script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
</body>

</html>