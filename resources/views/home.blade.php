@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/lambang.jpg') }}" class="rounded mx-auto d-block" width="250" height="150"  alt="">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-3">
            <div class="card" >
              <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <strong><h5 class="card-title" align="center">{{ $barang->nama_barang }}</h5></strong>
                <p class="card-text">
                <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
                    <hr>
                    <!-- <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br> -->
                </p>
                <center><a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-lg btn-primary" ></i>Cek Product</a></center>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection
