@extends('app')
@section('sidebar')
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 text-center p-0" href="">
                <div class="px-5 py-3">
                    <img class="img-fluid" src="{{ asset('assets/img/local/logo5.png') }}" alt="main_logo">
                </div>
            </a>
        </div>
        <hr class="horizontal dark mt-0 mb-2">
        {{-- Side Content --}}
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/beranda') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="{{ url('/pembelian') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">shopping_cart</i>
                        </div>
                        <span class="nav-link-text ms-1">Pembelian</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark " href="{{ url('/pengiriman') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-solid fa-dolly" style="color: #344767;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pengiriman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark " href="{{ url('/laporan') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark " href="{{ url('/sopir&kendaraan') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">local_shipping</i>
                        </div>
                        <span class="nav-link-text ms-1">Sopir & Kendaraan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark " href="{{ url('/pengguna') }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">group</i>
                        </div>
                        <span class="nav-link-text ms-1">Pengguna</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Halaman Pengguna
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/profil/'.Auth::user()->id_admin) }}">
                        <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Profil</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary w-100" href="{{ url('logout') }}" type="button">Keluar</a>
            </div>
        </div>
    </aside>
@endsection
@section('navbar')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark">Pembelian</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail Pesanan</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Detail Pesanan</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <ul class="navbar-nav justify-content-end me-5">
                        <div class="d-flex py-1">
                            <div class="my-auto">
                                <img src="{{ asset('../assets/img/local/profil.png') }}"
                                    class="border-radius-lg avatar-sm me-3 mt-1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"> {{ Auth::user()->nama }} </span>
                                </h6>
                                <p class="text-xs text-secondary mb-0 ">
                                    <i class="fa fa-solid fa-circle" style="color: #82d616;"></i>
                                    Online
                                </p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </li>
        </div>
    </nav>
@endsection
@section('content')
    @foreach ($transaksis as $transaksi)
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card pb-4">
                    <div class="card-header pb-0">
                        <h4 class="text-primary">Detail Pesanan</h4>
                        <hr>
                    </div>
                    <div class="card-body px-3 pt-0 pb-2" style="min-height: 450px">
                        <div class="row mx-2">
                            <div class="mb-3 col-6">
                                <div class="row">
                                    <p class="col-4 fw-bold text-dark mb-0">Resi Transaksi</p>
                                    <p class="col fw-bold text-dark mb-0">: <span
                                            class="ms-1 col fw-light text-second">{{ $transaksi->resi_transaksi }}</span>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col-4 fw-bold text-dark mb-0">Jatuh Tempo</p>
                                    <p class="col fw-bold text-dark mb-0">: <span
                                            class="ms-1 col fw-light text-second">{{ date('d/M/Y', strtotime($transaksi->tagihan->tanggal_jatuh_tempo)) }}</span>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col-4 fw-bold text-dark mb-0">Waktu Mundur</p>
                                    <p class="col fw-bold text-dark mb-0">: <span class="ms-1 col fw-light text-second"
                                            id="countdown"></span></p>
                                </div>
                                <div class="row">
                                    <p class="col-4 fw-bold text-dark mb-0">Tanggal Pembayaran</p>
                                    @if ($transaksi->tagihan->status_tagihan === 'Sudah Bayar')
                                        <p class="col fw-bold text-dark mb-0">: <span class="ms-1 col fw-light text-second">{{ date('d/M/Y', strtotime($transaksi->tagihan->tanggal_pembayaran)) }}</span>
                                    @elseif ($transaksi->tagihan->status_tagihan === 'Diproses')
                                        <p class="col fw-bold text-dark mb-0">: <span class="ms-1 col fw-light text-warning">{{ date('d/M/Y', strtotime($transaksi->tagihan->tanggal_pembayaran)) }} (menunggu konfirmasi pembayaran)</span>
                                    @else
                                        <p class="col fw-bold text-dark mb-0">: <span class="ms-1 col fw-light text-danger">Belum Bayar</span>
                                    @endif
                                    </p>
                                </div>
                            </div>
                            <div class="mb-3 col-5">
                                <div class="row">
                                    <p class="col-3 fw-bold text-dark mb-0">Pelanggan</p>
                                    <p class="col fw-bold text-dark mb-0">: <span
                                            class="ms-1 col fw-light text-second">{{ $transaksi->pelanggan->nama_perusahaan }}</span>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col-3 fw-bold text-dark mb-0">Email</p>
                                    <p class="col fw-bold text-dark mb-0">: <span
                                            class="ms-1 col fw-light text-second">{{ $transaksi->pelanggan->email }}</< /span>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col-3 fw-bold text-dark mb-0">No Hp</p>
                                    <p class="col fw-bold text-dark mb-0">: <span
                                            class="ms-1 col fw-light text-second">{{ $transaksi->pelanggan->no_hp }}</span>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col-3 fw-bold text-dark mb-0">Alamat</p>
                                    <p class="col fw-bold text-dark mb-0">: <span
                                        class="ms-1 col fw-light text-second">{{ $transaksi->pelanggan->alamat }}</span>
                                    </p>                                
                                </div>
                            </div>
                        </div>
                        {{-- Pesanan Awal --}}
                        <div class="row mx-2 mb-3">
                            <p class="col-3 fw-bold text-dark mb-0">Pesanan Awal</p>
                            <div class="table-responsive border rounded p-0" style="max-height: 450px; overflow-y: auto;">
                                <table class="table align-items-center mb-0" id="table_pembelian">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Waktu</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jumlah Transaksi</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Total Bayar</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status Pengiriman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="fw-light">
                                            <td class="text-center">
                                                <p class="text-sm mb-0">tanggal :
                                                    {{ date('d/m/Y', strtotime($pesananAwal->tanggal_pesanan)) }}</p>
                                                <p class="text-sm mb-0">jam :
                                                    {{ date('H:i', strtotime($pesananAwal->tanggal_pesanan)) }}</p>
                                            </td>
                                            <td class="text-center">{{ $pesananAwal->jumlah_bar }} bar</td>
                                            <td class="text-center">
                                                Rp. {{ number_format($pesananAwal->harga_pesanan, 0, ',', '.') }}
                                            </td>
                                            <td class="text-center">
                                                @foreach ($pengirimans as $pengiriman)
                                                    @if ($pesananAwal->id_pesanan == $pengiriman->id_pesanan)
                                                        @if ($pengiriman->status_pengiriman == 'Proses')
                                                            <span class="badge badge-sm bg-gradient-danger">Belum Dikirim</span>
                                                        @elseif ($pengiriman->status_pengiriman == 'Dikirim')
                                                            <span class="badge badge-sm bg-gradient-info">Dikirim</span>
                                                        @else
                                                            <a href="{{ url('/pembelian/more/pesanan/pengiriman/' . $pesananAwal->id_pesanan) }}" class="badge badge-sm bg-gradient-success text-white">Diterima</a>
                                                        @endif
                                                    @endif    
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- Pesanan Akhir --}}
                        <div class="row mx-2 mb-3">
                            <p class="col-3 fw-bold text-dark mb-0">Pesanan Akhir</p>
                            <div class="table-responsive border rounded p-0" style="max-height: 450px; overflow-y: auto;">
                                <table class="table align-items-center mb-0" id="table_pembelian">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Waktu</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jumlah Transaksi</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Total Bayar</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status Pengiriman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="fw-light">
                                            <td class="text-center">
                                                <p class="text-sm mb-0">tanggal :
                                                    {{ date('d/m/Y', strtotime($pesananAkhir->tanggal_pesanan)) }}</p>
                                                <p class="text-sm mb-0">jam :
                                                    {{ date('H:i', strtotime($pesananAkhir->tanggal_pesanan)) }}</p>
                                            </td>
                                            <td class="text-center">{{ $pesananAkhir->jumlah_bar }} bar</td>
                                            <td class="text-center">
                                                Rp. {{ number_format($pesananAkhir->harga_pesanan, 0, ',', '.') }}
                                            </td>
                                            <td class="text-center">
                                                @foreach ($pengirimans as $pengiriman)
                                                    @if ($pesananAkhir->id_pesanan == $pengiriman->id_pesanan)
                                                        @if ($pengiriman->status_pengiriman == 'Proses')
                                                            <span class="badge badge-sm bg-gradient-danger">Belum Dikirim</span>
                                                        @elseif ($pengiriman->status_pengiriman == 'Dikirim')
                                                            <span class="badge badge-sm bg-gradient-info">Dikirim</span>
                                                        @else
                                                            <a href="{{ url('/pembelian/more/pesanan/pengiriman/' . $pesananAkhir->id_pesanan) }}" class="badge badge-sm bg-gradient-success text-white">Diterima</a>
                                                        @endif
                                                    @endif    
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- Semua Pesanan --}}
                        <div class="row mx-2 mb-3">
                            <p class="col-3 fw-bold text-dark mb-0">Semua Pesanan</p>
                            <div class="table-responsive border rounded p-0" style="max-height: 450px; overflow-y: auto;">
                                <table class="table align-items-center mb-0" id="table_pembelian">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nomor</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Waktu</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Jumlah Transaksi</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Total Bayar</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status Pengiriman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pesanans as $pesanan)
                                            <tr class="fw-light">
                                                <td class="text-center">{{ $loop->iteration }} </td>
                                                <td class="text-center">
                                                    <p class="text-sm mb-0">tanggal :
                                                        {{ date('d/m/Y', strtotime($pesanan->tanggal_pesanan)) }}</p>
                                                    <p class="text-sm mb-0">jam :
                                                        {{ date('H:i', strtotime($pesanan->tanggal_pesanan)) }}</p>
                                                </td>
                                                <td class="text-center">{{ $pesanan->jumlah_bar }} bar</td>
                                                <td class="text-center">
                                                    Rp. {{ number_format($pesanan->harga_pesanan, 0, ',', '.') }}
                                                </td>
                                                <td class="text-center">
                                                    @foreach ($pengirimans as $pengiriman)
                                                        @if ($pesanan->id_pesanan == $pengiriman->id_pesanan)
                                                            @if ($pengiriman->status_pengiriman == 'Proses')
                                                                <span class="badge badge-sm bg-gradient-danger">Belum Dikirim</span>
                                                            @elseif ($pengiriman->status_pengiriman == 'Dikirim')
                                                                <span class="badge badge-sm bg-gradient-info">Dikirim</span>
                                                            @else
                                                                <a href="{{ url('/pembelian/more/pesanan/pengiriman/' . $pesanan->id_pesanan) }}" class="badge badge-sm bg-gradient-success text-white">Diterima</a>
                                                            @endif
                                                        @endif    
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr class="text-center" style="background-color: #e9ecef">
                                            <td class="fw-bold text-secondary">Total: </td>
                                            <td></td>
                                            <td colspan="3" class="fw-bold text-primary">Rp. {{ number_format($transaksi->tagihan->jumlah_tagihan, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('js')
    <script>
        if ('{{ $transaksi->tagihan->status_tagihan === "Sudah Bayar" }}') {
            clearInterval(x);
            document.getElementById('countdown').innerHTML =
                'Tagihan Sudah Dibayar !';
        }
        else{
            var tanggalJatuhTempo = new Date('{{ $transaksi->tagihan->tanggal_jatuh_tempo }}').getTime();
            var x = setInterval(function() {
                var sekarang = new Date().getTime();
                var selisih = tanggalJatuhTempo - sekarang;
                var hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
                var jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
                var detik = Math.floor((selisih % (1000 * 60)) / 1000);
                document.getElementById('countdown').innerHTML = hari + 'd ' + jam + 'h ' + menit + 'm ' + detik + 's ';
                if (selisih < 0) {
                    clearInterval(x);
                    document.getElementById('countdown').innerHTML =
                        'Tagihan Sudah Jatuh Tempo!';
                }
            }, 1000);
        }
    </script>
@endsection
