@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section class="site-title">
    <div class="site-background" data-aos="fade-up" data-aos-delay="100">
        <h1>Selamat Datang di BarangHilang.com</h1>
        <h3>Dimana Anda  | Kehilangan | Menemukan | Barang</h3>
        <div style="display: flex; justify-content: center;">
            <p><a href ="{{ url('kehilangans') }}" target="_parent"><button class="btn">Saya Kehilangan Barang!</button></a></p>
            <p><a href ="{{ url('menemukans') }}" target="_parent"><button class="btn">Saya Menemukan Barang!</button></a></p>
        </div>
    </div>
</section>
@endsection