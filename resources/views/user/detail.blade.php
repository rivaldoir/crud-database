@extends('layouts.app')

@section('content')

<h1 class="center-logo"></h1>

<div class="glass p-4" style="max-width:900px;margin:auto;">

    <div class="row">

        {{-- FOTO PRODUK --}}
        <div class="col-md-5 text-center">
            <div style="
                width:100%;
                height:420px;
                border-radius:20px;
                background:#050505;
                border:1px solid rgba(255,255,255,0.08);
                overflow:hidden;
                display:flex;
                justify-content:center;
                align-items:center;
            ">
                <img src="{{ asset('storage/'.$menu->foto) }}"
                     style="width:100%;height:100%;object-fit:cover;">
            </div>
        </div>

        {{-- INFORMASI PRODUK --}}
        <div class="col-md-7">

            <h2 style="font-family:'Oswald';color:var(--neon);">
                {{ $menu->nama_menu }}
            </h2>

            <h4 style="color:var(--text-light);margin-top:10px;">
                Rp {{ number_format($menu->harga) }}
            </h4>

            <p style="color:var(--muted);margin-top:15px;font-size:15px;">
                {{ $menu->deskripsi }}
            </p>

            <a href="{{ route('checkout.form', $menu->id) }}"
               class="btn"
               style="margin-top:25px;padding:12px 20px;background:var(--neon);
                      font-weight:700;border-radius:12px;color:black;
                      text-decoration:none;box-shadow:0 0 15px rgba(0,255,102,0.5);">
                Checkout Sekarang
            </a>

            <br><br>

            <a href="{{ route('user.produk') }}"
               style="color:var(--muted);text-decoration:none;">
                ← Kembali ke Produk
            </a>

        </div>

    </div>

</div>

@endsection
