<html>

<head>
  <title>Form Survey Kepuasan Pelanggan PJNHK</title>
  <link rel="shortcut icon" href="/images/logo.png" />
</head>
<body>
  <!-- Section: Design Block -->
  <section class="text">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-15 mx-auto">
          <div class="card justify-content-center">

            <div class="card-header bg-info">
            <div style="text-align: left"><img style="text-align: right; width: 25%;" src="/images/icon-long.png" alt="HTML5 Icon">
              <h4 class="card-title text-white mt-2 " id="exampleModalLabel" style="text-align:center"><strong>FORM SURVEY KEPUASAN PELANGGAN</strong></h4></div>
              
            </div>
            <div class="modal-body">
              <form class="px-4 was-validated" method="POST" action="{{ url('survey') }}">

                @csrf
                <div class="text-center">
                  <p>
                    <strong>DATA PASIEN</strong>
                  </p>
                </div>
                <hr />

                @foreach ($user as $val)
                <table class="table table-borderless table-sm">
                  <tbody style="font-size: 14px; font-family: sans-serif; margin: auto;">
                    <tr>
                      <td style="width:200px;">Nomor MR</td>
                      <td>: {{ $val->no_mr }}</td>
                    </tr>
                    <tr>
                      <td>Nama Pasien</td>
                      <td>: {{ $val->nama_kcl }}</td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      @if($val->lp =='L')
                      <td>: Laki-Laki</td>
                      @else
                      <td>: Perempuan</td>
                      @endif
                    </tr>
                    <tr>
                      <td>No HP</td>
                      <td>: {{ $val->telpon }}</td>
                    </tr>
                    <tr>
                      <td>Pendidikan</td>
                      @if ($val->pendidikan === '01')
                      <td>: Tidak/Belum Sekolah</td>
                      @elseif ($val->pendidikan === '02')
                      <td>: Tidak/Belum Tamat SD</td>
                      @elseif ($val->pendidikan === '03')
                      <td>: Tamat SD</td>
                      @elseif ($val->pendidikan === '04')
                      <td>: SMP/SLTP/Sederajat</td>
                      @elseif ($val->pendidikan === '05')
                      <td>: SMA/SLTA/Sederajat</td>
                      @elseif ($val->pendidikan === '06')
                      <td>: Akademi/D3/Diploma</td>
                      @elseif ($val->pendidikan === '07')
                      <td>: Universitas/S1,S2,S3</td>
                      @else
                      <td>: -</td>
                      @endif
                    </tr>
                    <tr>
                      <td>Jenis Jaminan Pasien</td>
                      <td>: {{ $kunjungan->ds_pastipe }}</td>
                    </tr>
                    <tr>
                      <td>Pelayanan Terakhir</td>
                      <td>: {{ $kunjungan->tgl_reg }}</td>
                    </tr>
                  </tbody>
                </table>
                <hr />
                <input name="no_mr" type="hidden" value="{{$val->no_mr}}">
                @endforeach

                <div class="text-center">
                  <p>
                    <strong>PELAYANAN UNIT</strong>
                  </p>
                </div>
                <hr />

                <p class="text">1. Bagaimana persyaratan administrasi yang harus dipenuhi dalam pengurusan pelayanan (rawat jalan atau rawat inap) di RSJPDHK? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_1" id="surv_1a" value="1" required />
                  <label class="form-check-label" for="surv_1a">
                    Sangat Mudah
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_1" id="surv_1b" value="2" />
                  <label class="form-check-label" for="surv_1b">
                    Mudah
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_1" id="surv_1c" value="3" />
                  <label class="form-check-label" for="surv_1c">
                    Kurang Mudah
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_1" id="surv_1d" value="4" />
                  <label class="form-check-label" for="surv_1d">
                    Tidak Mudah
                  </label>
                </div>

                <hr />
                <p class="text">2. Menurut Bpk/Ibu/Sdr bagaimana proses pendaftaran rawat jalan di RSJPDHK? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_2" id="surv_2a" value="1" required />
                  <label class="form-check-label" for="surv_2a">
                    Sangat Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_2" id="surv_2b" value="2" />
                  <label class="form-check-label" for="surv_2b">
                    Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_2" id="surv_2c" value="3" />
                  <label class="form-check-label" for="surv_2c">
                    Kurang Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_2" id="surv_2d" value="4" />
                  <label class="form-check-label" for="surv_2d">
                    Tidak Baik
                  </label>
                </div>
                <hr />

                <p class="text">3. Secara umum, bagaimana jangka waktu yang diperlukan untuk menyelesaikan proses pelayanan di RSJPDHK? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_3" id="surv_3a" value="1" required />
                  <label class="form-check-label" for="surv_3a">
                    Sangat Cepat
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_3" id="surv_3b" value="2" />
                  <label class="form-check-label" for="surv_3b">
                    Cepat
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_3" id="surv_3c" value="3" />
                  <label class="form-check-label" for="surv_3c">
                    Kurang Cepat
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_3" id="surv_3d" value="4" />
                  <label class="form-check-label" for="surv_3d">
                    Lambat / Lama
                  </label>
                </div>
                <hr />

                <p class="text">4. Menurut Bapak/Ibu/sdr, bagaimana kewajaran biaya/tarif yang dikenakan dalam memperoleh pelayanan di RSJPDHK? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_4" id="surv_4a" value="1" required />
                  <label class="form-check-label" for="surv_4a">
                    Gratis
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_4" id="surv_4b" value="2" />
                  <label class="form-check-label" for="surv_4b">
                    Murah
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_4" id="surv_4c" value="3" />
                  <label class="form-check-label" for="surv_4c">
                    Kurang Murah
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_4" id="surv_4d" value="4" />
                  <label class="form-check-label" for="surv_4d">
                    Mahal
                  </label>
                </div>
                <hr />

                <p class="text">5. Menurut Bpk/Ibu/Sdr, bagaimana hasil pemeriksaan yang diberikan dari unit layanan? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_5" id="surv_5a" value="1" required />
                  <label class="form-check-label" for="surv_5a">
                    Sangat Memuaskan
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_5" id="surv_5b" value="2" />
                  <label class="form-check-label" for="surv_5b">
                    Memuaskan
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_5" id="surv_5c" value="3" />
                  <label class="form-check-label" for="surv_5c">
                    Kurang Memuaskan
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_5" id="surv_5d" value="4" />
                  <label class="form-check-label" for="surv_5d">
                    Tidak Memuaskan
                  </label>
                </div>
                <hr />
                <div class="text-center">
                  <p>
                    <strong>FASILITAS</strong>
                  </p>
                </div>
                <hr />

                <p class="text">6. Menurut Bpk/Ibu/Sdr, bagaimana tentang fasilitas (mis. toilet, ruang rawat, ruang tunggu, dll) yang ada di RSJPDHK? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_6" id="surv_6a" value="1" required />
                  <label class="form-check-label" for="surv_6a">
                    Sangat Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_6" id="surv_6b" value="2" />
                  <label class="form-check-label" for="surv_6b">
                    Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_6" id="surv_6c" value="3" />
                  <label class="form-check-label" for="surv_6c">
                    Kurang Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_6" id="surv_6d" value="4" />
                  <label class="form-check-label" for="surv_6d">
                    Tidak Baik
                  </label>
                </div>
                <hr />

                <div class="text-center">
                  <p>
                    <strong>PERSONIL</strong>
                  </p>
                </div>
                <hr />

                <p class="text">7. Menurut Bpk/Ibu/Sdr, bagaimana kemampuan (pengetahuan, keahlian, keterampilan) para pegawai/petugas di RSJPDHK? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_7" id="surv_7a" value="1" required />
                  <label class="form-check-label" for="surv_7a">
                    Sangat Mampu
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_7" id="surv_7b" value="2" />
                  <label class="form-check-label" for="surv_7b">
                    Mampu
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_7" id="surv_7c" value="3" />
                  <label class="form-check-label" for="surv_7c">
                    Kurang Mampu
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_7" id="surv_7d" value="4" />
                  <label class="form-check-label" for="surv_7d">
                    Tidak Mampu
                  </label>
                </div>
                <hr />

                <p class="text">8. Bagaimana sikap petugas/pegawai di RSJPDHK dalam memberikan pelayanan? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_8" id="surv_8a" value="1" required />
                  <label class="form-check-label" for="surv_8a">
                    Sangat Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_8" id="surv_8b" value="2" />
                  <label class="form-check-label" for="surv_8b">
                    Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_8" id="surv_8c" value="3" />
                  <label class="form-check-label" for="surv_8c">
                    Kurang Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_8" id="surv_8d" value="4" />
                  <label class="form-check-label" for="surv_8d">
                    Tidak Baik
                  </label>
                </div>
                <hr />

                <div class="text-center">
                  <p>
                    <strong>PENGADUAN</strong>
                  </p>
                </div>
                <hr />

                <p class="text">9. Menurut Bpk/Ibu/Sdr, bagaimana penanganan pegaduan, saran dan masukan, serta tindak lanjutnya di RSJPDHK? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_9" id="surv_9a" value="1" required />
                  <label class="form-check-label" for="surv_9a">
                    Sangat Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_9" id="surv_9b" value="2" />
                  <label class="form-check-label" for="surv_9b">
                    Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_9" id="surv_9c" value="3" />
                  <label class="form-check-label" for="surv_9c">
                    Kurang Baik
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_9" id="surv_9d" value="4" />
                  <label class="form-check-label" for="surv_9d">
                    Tidak Baik
                  </label>
                </div>
                <hr />

                <div class="text-center">
                  <p>
                    <strong>KESIMPULAN</strong>
                  </p>
                </div>
                <hr />

                <p class="text">10. Secara keseluruhan, pendapat Bpk/Ibu/Sdr tentang pelayanan yang telah diberikan? <span style="color:red">*</span></p>

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_10" id="surv_10a" value="1" required />
                  <label class="form-check-label" for="surv_10a">
                    Sangat Puas
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_10" id="surv_10b" value="2" />
                  <label class="form-check-label" for="surv_10b">
                    Puas
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_10" id="surv_10c" value="3" />
                  <label class="form-check-label" for="surv_10c">
                    Kurang Puas
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="surv_10" id="surv_10d" value="4" />
                  <label class="form-check-label" for="surv_10d">
                    Tidak Puas
                  </label>
                </div>
                <hr />

                <p class="text">Tuliskan pengalaman Anda selama mendapatkan pelayanan di RSJPDHK</p>

                <!-- Message input -->
                <div class="form-outline mb-4">
                  <textarea class="form-control" name="pengalaman" id="pengalaman" rows="3"></textarea>
                  <label class="form-label" for="pengalaman">Jawaban Anda</label>
                </div>


                <div class="text-center">
                  <button type="submit" class="btn btn-info" style="padding: 10px 100px; font-size: 17px">KIRIM</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer bg-info">
            <p class="card-title text-white mt-2 " id="exampleModalLabel" style="text-align:center">Kirim Masukan atau Saran Anda melalui Email: pelayanan.pelanggan@pjnhk.go.id</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>

@include('sweetalert::alert')
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />


<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>