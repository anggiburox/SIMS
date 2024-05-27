@extends('layout.admin')

@section('content')
<div class="container-fluid">

    <!-- row -->
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Daftar Produk</h4>
            </div>
        </div>
    </div>
    <!-- row -->

    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('danger'))
    <div class="alert alert-danger">
        {{Session::get('danger')}}
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <form class="form-inline" action="/pencarian" method="GET">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" style="font-family: 'Font Awesome 5 Free';" placeholder=" &#xf002; Cari barang">
                            </div>
                            <div class="form-group ml-2">
                                <select name="kategori" class="form-control">
                                    <option value="Semua" selected>Semua</option>
                                    <option value="Alat Olahraga">Alat Olahraga</option>
                                    <option value="Alat Musik">Alat Musik</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success ml-2">
                                <i class="icon-copy fa fa-search" aria-hidden="true"></i>&nbsp;
                                Cari
                            </button>
                        </form>
                    </div>
                    <div class="row">
                        <a class="btn" href="dokter/tambah" style="background-color: #0c7609; color:white;">
                        <img src="{{asset('assets/logo/MicrosoftExcelLogo.png') }}" alt="">&nbsp;
                            Export Excel
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn" href="barang/tambah" style="background-color: #f42619; color:white;">
                        <img src="{{asset('assets/logo/PlusCircle.png') }}" alt="">&nbsp;
                            Tambah Produk
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori Produk</th>
                                    <th>Harga Beli (Rp)</th>
                                    <th>Harga Jual (Rp)</th>
                                    <th>Stok Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection