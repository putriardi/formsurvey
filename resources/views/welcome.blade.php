<html>

<head>
  <title>Survey Kepuasan Pelanggan PJNHK</title>
  <link rel="shortcut icon" href="/images/logo.png" />
</head>

<body>
  <!-- Section: Design Block -->
  <section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('https://www.pjnhk.go.id/storage/uploads/profil/fewanpYKIznYpo2XjWH55PZiKMVeGpS7ISmdXufj.jpeg');
        height: 300px;
        "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">SURVEY KEPUASAN PELANGGAN</h2>
            <form method="GET" action="{{ url('survey') }}">
              <div class="form-outline mb-4">
                <input type="text" id="no_mr" name="no_mr" class="form-control" />
                <label class="form-label" for="no_mr">Masukan Nomor MR</label>
              </div>
              <button type="submit" class="btn btn-info btn-block mb-4">Cari Data Pasien</button>

            </form>
          </div>
        </div>
      </div>
    </div>
    @include('sweetalert::alert')
  </section>
</body>

</html>

<!-- Section: Design Block -->

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>