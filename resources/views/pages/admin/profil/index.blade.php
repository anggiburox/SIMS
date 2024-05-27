@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <!-- row -->

    @if(Session::has('errors'))
    <div class="alert alert-danger">
        {{Session::get('errors')}}
    </div>
    @endif
    <div class="row">
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form custom_file_input">
                        <form action="/admin/profil/store" method="POST">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col form-group">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><i class="fas fa-pencil-alt" style="color: black;"></i></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url('default-avatar.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <h3>Nama Kandidat</h3>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nama Kandidat</label>
                                    <input type="text" class="form-control" name="nama_kandidat" placeholder="Masukan nama kandidat" required>
                                </div>
                                <div class="col form-group">
                                    <label>Posisi Kandidat</label>
                                    <input type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="Masukan posisi kandidat" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="@ Masukan email anda" required>
                                </div>
                                <div class="col form-group">
                                    <label>Password</label>
                                    <div class="input-group mb-2">
                                        <input type="password" class="form-control" name="password" id="password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" onclick="togglePasswordVisibility()">
                                                <i id="togglePasswordIcon" class="fa fa-eye-slash"></i> <!-- Default to eye-slash icon -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg float-right ml-3">Simpan</button>
                            <input type="reset" class="btn btn-outline-primary btn-lg float-right" value="Batalkan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      document.getElementById('imagePreview').style.backgroundImage = 'url(' + e.target.result + ')';
    }
    reader.readAsDataURL(input.files[0]);
  }
}

document.getElementById('imageUpload').addEventListener('change', function() {
  readURL(this);
});


function togglePasswordVisibility() {
        var passwordInput = document.getElementById('password');
        var icon = document.getElementById('togglePasswordIcon');

        // Change input type from password to text and vice versa
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.className = 'fa fa-eye'; // Change icon to open eye
        } else {
            passwordInput.type = 'password';
            icon.className = 'fa fa-eye-slash'; // Change icon to eye-slash
        }
    }
</script>
@endsection