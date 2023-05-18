<!DOCTYPE html>
<html>
<head>
    <title>Tugas 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>Form Tes Pemeriksaan Darah</h2>
      </div>
        <div class="col-md-7 col-lg-8">
          <form class="needs-validation" method="POST" action="/proses">
            <div class="row g-3">
              <div class="col-sm-12">
                <label for="lastName" class="form-label">Name</label>
                <input type="text" class="form-control" name="nama" id="lastName" placeholder="" value="" required>
              </div>
      
              <div class="col-12">
                <label for="username" class="form-label">Tanggal Pemeriksaan</label>
                <div class="input-group has-validation">
                  <input type="date" class="form-control" name="tanggal_pemeriksaan" id="username" required>
                </div>
              </div>

              <div class="col-sm-12">
                <label for="lastName" class="form-label">Tanggal Lahir/Usia</label>
                <input type="text" class="form-control" name="Usia" id="lastName" placeholder="" value="" required>
              </div>
              <div class="col-md-12">
                <label for="state" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="state" required>
                  <option value="">Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Simpan</button>
          </form>

          <table class="table table-striped-columns text-center" border="1">
            <tr>
              <th>Jenis Tes</th>
              <th>Hasil Pemeriksaan</th>
              <th>Normal</th>
            </tr>
            <tbody>
              <tr>
              <td>Tekanan Darah</td>
              <td></td>
              <td>120/80 mmhg</td>
              </tr>
              <tr>
              <td>Asam Urat</td>
              <td></td>
              <td>Pria: < 7mg/dl|Wanita: < 6mg/dl</td>
              </tr>
              <tr>
              <td>Kolestrol Total</td>
              <td></td>
              <td>< 200mg/dl</td>
              </tr>
              <tr>
              <td rowspan="3">Gula darah</td>
              <td rowspan="3"></td>
              <td>Puasa: 70-110mg/dl</td>
              </tr>
              <tr>
              <td>2 jam setelah makan: 100-150 mg/dl</td>
              </tr>
              <tr>
              <td>Sewaktu/acal:70-125mg/dl</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
    {{-- Footer --}}
    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    </footer>
  </div>
      <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
