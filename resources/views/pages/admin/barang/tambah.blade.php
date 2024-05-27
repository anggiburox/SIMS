@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-xl-6 col-xxl-12">
            <div class="welcome-text">
                <div class="row">
                    <h4 style="color: #cfcfcf;">Daftar Produk</h4>&nbsp;<h4>> Tambah Produk</h4>
                </div>
            </div>
        </div>
    </div>
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
                        <form action="/admin/barang/store" method="POST">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" id="" class="form-control" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="Alat Olahraga">Alat Olahraga</option>
                                        <option value="Alat Musik">Alat Musik</option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" placeholder="Masukan nama barang" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Harga Beli</label>
                                    <input type="text" class="form-control" name="harga_beli" id="harga_beli" placeholder="Masukan harga beli" required>
                                </div>
                                <div class="col form-group">
                                    <label>Harga Jual</label>
                                    <input type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="Masukan harga jual" required>
                                </div>
                                <div class="col form-group">
                                    <label>Stok Barang</label>
                                    <input type="number" min="0" class="form-control" name="stok_barang" placeholder="Masukan jumlah stok barang" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="file-upload">
                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <img src="{{asset('assets/logo/Image.png') }}" alt="">
                                            <p>
                                                <span style="color: #3366ff;">upload gambar disini</span>
                                        </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
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

<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
  function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

  // Fungsi untuk memformat angka menjadi format yang diinginkan
  function formatNumber(num) {
        // Membuat objek Intl.NumberFormat
        var formatter = new Intl.NumberFormat('id-ID');
        // Menggunakan objek formatter untuk memformat angka
        return formatter.format(num);
    }

    // Mendapatkan elemen input harga beli
    var inputHargaBeli = document.getElementById('harga_beli');
    
    // Mendapatkan elemen input harga jual
    var inputHargaJual = document.getElementById('harga_jual');

    // Mendengarkan perubahan pada input harga beli
    inputHargaBeli.addEventListener('input', function() {
        // Mendapatkan nilai dari input
        var value = this.value.replace(/\D/g, ''); // Menghapus karakter selain angka

        // Jika hasil akhir adalah string kosong atau NaN, maka set nilai menjadi string kosong
        if (value === '' || isNaN(value)) {
            this.value = '';
        } else {
            // Memformat angka dengan fungsi formatNumber
            var formattedValue = formatNumber(value);

            // Menetapkan nilai yang diformat kembali ke input
            this.value = formattedValue;
        }
    });

    // Mendengarkan perubahan pada input harga jual
    inputHargaJual.addEventListener('input', function() {
        // Mendapatkan nilai dari input
        var value = this.value.replace(/\D/g, ''); // Menghapus karakter selain angka

        // Jika hasil akhir adalah string kosong atau NaN, maka set nilai menjadi string kosong
        if (value === '' || isNaN(value)) {
            this.value = '';
        } else {
            // Memformat angka dengan fungsi formatNumber
            var formattedValue = formatNumber(value);

            // Menetapkan nilai yang diformat kembali ke input
            this.value = formattedValue;
        }
    });
</script>
@endsection