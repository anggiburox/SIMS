<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>SIMS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png" />
    <link href="{{asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- Datatable -->
    <link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
.file-upload {
  background-color: #ffffff;
  width: 100%;
  margin: 0 auto;
  padding-bottom: 20px;
}

/* .file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
} */

/* .file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
} */

/* .file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
} */

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #3366ff;
  position: relative;
}

/* .image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
} */

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
.avatar-upload {
  position: relative;
  width: 100px;
}

.avatar-edit input {
  display: none;
}

.avatar-edit label {
  display: inline-block;
  cursor: pointer;
  background: white;
  width: 40px; /* Sesuaikan lebar dan tinggi agar label menjadi lingkaran */
  height: 40px;
  border-radius: 50%; /* Mengubah ke lingkaran */
  border: 3px solid #e0e0e0;
  padding: 0; /* Menghapus padding agar label menjadi lingkaran sempurna */
  color: #fff;
  transition: all .4s ease;
  position: absolute;
  bottom: -10px;
  right: -10px;
  z-index: 2;
  text-align: center; /* Mengatur teks menjadi di tengah */
  line-height: 40px; /* Mengatur ketinggian teks untuk memusatkan teks vertikal */
}


.avatar-preview {
  width: 100px;
  height: 100px;
  position: relative;
  border-radius: 50%;
  border: 2px solid #e0e0e0;
  background: #fff;
}

.avatar-preview div {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

    </style>
</head>

<body>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/admin/barang" class="brand-logo">
                <span class="nav-text">
                    <img src="{{asset('assets/logo/Handbag.png') }}" alt="">&nbsp; SIMS Web App</span>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>
                        <!-- <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a href="/logout" class="dropdown-item">
                                    <img src="{{asset('assets/logo/Package.png') }}" alt="">
                                    <span class="ml-2">Logout </span>
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="/admin/barang" aria-expanded="false">
                            <img src="{{asset('assets/logo/Package.png') }}" alt="">
                            <span class="nav-text">Produk</span></a>
                    </li>
                    <li>
                        <a href="/admin/profil" aria-expanded="false">
                            <img src="{{asset('assets/logo/User.png') }}" alt="">
                            <span class="nav-text">Profil</span></a>
                    </li>
                    <li>
                        <a href="/logout" aria-expanded="false">
                            <img src="{{asset('assets/logo/SignOut.png') }}" alt="">
                            <span class="nav-text">Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{asset('assets/js/custom.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('assets/js/plugins-init/datatables.init.js') }}"></script>

</body>

</html>