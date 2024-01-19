<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/images/logosmk.png" type="x-icon">
    <title>Form Registrasi | PPDB SMK Wikrama Bogor</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}">
</head>

<body style="">
    <div class="title text-center mt-5 mb-5">
        <h2  style="color: rgb(0, 0, 0)">Form Pendaftaran PPDB </h2>
        <h5  style="color: rgb(0, 0, 0)">SMK Wikrama Bogor TP. 2023-2024</h5>
    </div>
    <div class="container-xl mb-5" style="justify-content: center; display: flex;">
        <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    <form class="settings-form px-5" action="{{route('regis.store')}}" method="POST">
                        @csrf
                        <div class="mb-3 d-flex justify-content-around nisn-jk" style="gap: 10px">

                            <div class="mb-3">
                                <label for="setting-input-3"><b>NISN</b></label>
                                <input name="nisn" type="number" class="form-control  {{ $errors->has('nisn') ? ' is-invalid' : '' }}" style="width: 340px" id="setting-input-1"  placeholder="Masukan NISN">
                                @if ($errors->has('nisn'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('nisn') }}
                                </span>
                                 @endif 
                            </div>

                            <div class="mb-3">
                                <label for="setting-input-3"><b>Jenis Kelamin</b></label>
                                <select name="jk" class="form-select  {{ $errors->has('jk') ? ' is-invalid' : '' }}" id="setting-input-3" style="width: 340px">
                                    <option selected disabled>--Jenis Kelamin --</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for=""><b>Nama Lengkap</b></label>
                            <input name="nama_lengkap" type="text" class="form-control {{ $errors->has('nama_lengkap') ? ' is-invalid' : '' }}" id="setting-input-1" placeholder="Masukan Nama Lengkap">
                            @if ($errors->has('nama_lengkap'))
                            <span class="invalid-feedback">
                                {{ $errors->first('nama_lengkap') }}
                            </span>
                            @endif 
                        </div>
                           

                       
                        <div class="mb-3">
                            <label for=""><b>Asal Sekolah</b></label>
                            <select class="form-select {{ $errors->has('asal_sekolah') ? ' is-invalid' : '' }}" id="sekolah" name="asal_sekolah"
                                onchange="tampilakanSekolahInput()">
                                <option disabled selected> -- Pilih Asal Sekolah -- </option>
                                <option value="sekolah_lainnya">Lainnya</option>
                                <option value="MTs AL ASMAAUL HUSNA">MTs AL ASMAAUL HUSNA</option>
                                <option value="MTs Ar-Rasyidy">MTs Ar-Rasyidy</option>
                                <option value="MTs AR-ROZZAAQ">MTs AR-ROZZAAQ</option>
                                <option value="MTs Assalaam">MTs Assalaam</option>
                                <option value="MTs Balighul Hikmah">MTs Balighul Hikmah</option>
                                <option value="MTs Darul Irsyad">MTs Darul Irsyad</option>
                                <option value="MTs EL ALAMIA">MTs EL ALAMIA</option>
                                <option value="MTs HIBRUL ULAMA">MTs HIBRUL ULAMA</option>
                                <option value="MTs MANBA'UL HUDA">MTs MANBA'UL HUDA</option>
                                <option value="MTs NUR AKMALIYAH">MTs NUR AKMALIYAH</option>
                                <option value="MTs NURANI">MTs NURANI</option>
                                <option value="MTs NURUL FAJAR">MTs NURUL FAJAR</option>
                                <option value="MTs RIBATHUL MUJTABA">MTs RIBATHUL MUJTABA</option>
                                <option value="MTs RIYADHUL MUSTHOFA">MTs RIYADHUL MUSTHOFA</option>
                                <option value="MTs TAHFIDZ SMART MUROTTAL">MTs TAHFIDZ SMART MUROTTAL</option>
                                <option value="MTs TANBIHUL GHOFILIN">MTs TANBIHUL GHOFILIN</option>
                                <option value="MTs ULIN NUHA">MTs ULIN NUHA</option>
                                <option value="MTs UTSMANIL HAKIM">MTs UTSMANIL HAKIM</option>
                                <option value="MTs Yanfa''ul Ilmi">MTs Yanfa''ul Ilmi</option>
                                <option value="MTSN 1 BOGOR">MTSN 1 BOGOR</option>
                                <option value="MTSN 1 CIANJUR">MTSN 1 CIANJUR</option>
                                <option value="MTSN 2 BOGOR">MTSN 2 BOGOR</option>
                                <option value="MTSN 2 CIANJUR">MTSN 2 CIANJUR</option>
                                <option value="MTSN 3 BOGOR">MTSN 3 BOGOR</option>
                                <option value="MTSN 3 CIANJUR">MTSN 3 CIANJUR</option>
                                <option value="MTSN 4 BOGOR">MTSN 4 BOGOR</option>
                                <option value="MTSN 4 CIANJUR">MTSN 4 CIANJUR</option>
                                <option value="MTSN 5 CIANJUR">MTSN 5 CIANJUR</option>
                                <option value="MTSN 6 CIANJUR">MTSN 6 CIANJUR</option>
                                <option value="MTSN 7 CIANJUR">MTSN 7 CIANJUR</option>
                                <option value="MTSN KOTA BOGOR">MTSN KOTA BOGOR</option>
                                <option value="MTSN KOTA DEPOK">MTSN KOTA DEPOK</option>
                                <option value="MTSN KOTA SUKABUMI">MTSN KOTA SUKABUMI</option>
                                <option value="MTSS 2 KOTA SUKABUMI">MTSS 2 KOTA SUKABUMI</option>
                                <option value="MTSS ABDOELLAH BASTARI">MTSS ABDOELLAH BASTARI</option>
                                <option value="MTSS ADAWIYATUL ASLAMIYAH">MTSS ADAWIYATUL ASLAMIYAH</option>
                                <option value="MTSS AINUR RAHMAH">MTSS AINUR RAHMAH</option>
                                <option value="MTSS AKHLAQIYYAH">MTSS AKHLAQIYYAH</option>
                                <option value="MTSS AKMALIYAH">MTSS AKMALIYAH</option>
                                <option value="MTSS AL AMANAH">MTSS AL AMANAH</option>
                                <option value="MTSS AL AMANAH">MTSS AL AMANAH</option>
                                <option value="MTSS AL AMIN">MTSS AL AMIN</option>
                                <option value="MTSS AL ANHAR">MTSS AL ANHAR</option>
                                <option value="MTSS AL ARAFAH">MTSS AL ARAFAH</option>
                                <option value="MTSS AL ARQOM">MTSS AL ARQOM</option>
                                <option value="MTSS AL ASIYAH">MTSS AL ASIYAH</option>
                                <option value="MTSS AL ATIQIYAH">MTSS AL ATIQIYAH</option>
                                <option value="MTSS AL AWWABIN">MTSS AL AWWABIN</option>
                                <option value="MTSS AL AZIZIYYAH">MTSS AL AZIZIYYAH</option>
                                <option value="MTSS AL BAKRIYAH">MTSS AL BAKRIYAH</option>
                                <option value="SMP SAIS 1">SMP SAIS 1</option>
                            </select>
                        </div>

                        <div class="mb-3" id="sekolah_lainnya" style="display: none;">
                            <label for="setting-input-2" class="form-label">Nama Sekolah Lainnya </label>
                            <input type="text" name="asal_sekolah_lainnya" class="form-control {{ $errors->has('asal_sekolah_lainnya') ? ' is-invalid' : '' }}" id="setting-input-2" placeholder="Nama Sekolah">
                        </div>

                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Email </label>
                            <input name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="setting-input-2" placeholder="Masukan Email Aktif">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </span>
                             @endif 
                        </div>

                        <div class="mb-3">
                            <label for="setting-input-3" class="form-label">Nomor Handphone</label>
                            <input name="no_hp" type="number" class="form-control {{ $errors->has('no_hp') ? ' is-invalid' : '' }}" id="setting-input-3" placeholder="Contoh: 08---">
                            @if ($errors->has('no_hp'))
                            <span class="invalid-feedback">
                                {{ $errors->first('no_hp') }}
                            </span>
                             @endif 
                        </div>

                        <div class="mb-3 d-flex justify-content-around" style="gap:10px">
                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Nomor HP Ayah </label>
                                <input name="no_hp_ayah" type="number" class="form-control {{ $errors->has('no_hp_ayah') ? ' is-invalid' : '' }}" id="setting-input-2" style="width: 340px" placeholder="Contoh: 08---" >
                                @if ($errors->has('no_hp_ayah'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('no_hp_ayah') }}
                                </span>
                                 @endif 
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-3" class="form-label">Nomor HP Ibu</label>
                                <input name="no_hp_ibu" type="number" class="form-control {{ $errors->has('no_hp_ibu') ? ' is-invalid' : '' }}" style="width: 340px"  id="setting-input-3" placeholder="Contoh: 08-----">
                                @if ($errors->has('no_hp_ibu'))
                                <span class="invalid-feedback">
                                    {{ $errors->first('no_hp_ibu') }}
                                </span>
                                 @endif 
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary gap-2" style="color: white">Registrasi</button>
                        <a href="/" class="btn btn-primary" style="color: white">Back</a>

                    </form>
                </div>


            </div>

        </div>


    </div>
    <!-- wajib jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
                $("#sekolah").select2({
                    theme: 'bootstrap4',
                    placeholder: "Please Select"
                });
            });
    </script>


    {{-- js untuk select lainnya  --}}
    <script>
        function tampilakanSekolahInput() {
            var sekolah = document.getElementById("sekolah").value;
            var sekolahLainnya = document.getElementById("sekolah_lainnya");
            if (sekolah == "sekolah_lainnya") {
                sekolahLainnya.style.display = "";
            }else {
                sekolahLainnya.style.display = "none";
            }
        } 
    </script>



</body>

</html>