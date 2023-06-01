@extends('admin.layout.appadmin')
@section('content')
<div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>Form Tes Pemeriksaan Darah</h2>
      </div>
        <div class="col-md-7 col-lg-8">
          <form class="needs-validation" method="post" action="">
            {{ csrf_field() }}
            <div class="row g-3">
              <div class="col-sm-12">
                <label for="lastName" class="form-label">Name</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan nama anda" value="" required>
              </div>
              
              <div class="col-sm-12">
                <label for="lastName" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="lastName" placeholder="sam123@gmail.com" value="" required>
              </div>
              
              <div class="col-md-12">
                  <label for="state" class="form-label">Lokasi</label>
                  <select class="form-select" name="lokasi" id="state" required>
                      <option value="Jakarta">Jakarta</option>
                      <option value="Depok">Depok</option>
                      <option value="Bogor">Bogor</option>
                      <option value="Bekasi">Bekasi</option>
                    </select>
                </div>
                <div class="col-sm-12">
                    <label for="lastName" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jeniskelamin" id="state" required>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
              </div>
              <div class="col-sm-12">
                  <label for="lastName" class="form-label">Skill</label>
                  <div class="col-sm-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="Skill[]_0" type="checkbox" class="custom-control-input" value="HTML"> 
                        <label for="Skill[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="Skill[]_1" type="checkbox" class="custom-control-input" value="Css"> 
                        <label for="Skill[]_1" class="custom-control-label">Css</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="Skill[]_2" type="checkbox" class="custom-control-input" value="Javascript"> 
                        <label for="Skill[]_2" class="custom-control-label">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="Skill[]_3" type="checkbox" class="custom-control-input" value="rwd bootstrap"> 
                        <label for="Skill[]_3" class="custom-control-label">Mysql</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="Skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
                        <label for="Skill[]_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="Skill[]_5" type="checkbox" class="custom-control-input" value="python"> 
                        <label for="Skill[]_5" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="Skill[]_6" type="checkbox" class="custom-control-input" value="java"> 
                        <label for="Skill[]_6" class="custom-control-label">Java</label>
                    </div>
                  </div>
              </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Simpan</button>
          </form>
        </div>
    </main>
@endsection