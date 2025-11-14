@extends('layouts.app')

@section('content')

<h1 class="center-logo"></h1>

<div id="product-list" class="row justify-content-center gap-4">

    @foreach ($menus as $m)
        <a href="{{ route('user.detail',$m->id) }}" class="product-card" style="width:260px;text-decoration:none;color:white;">

            <div class="can" style="width:200px;height:320px;border-radius:20px;background:#050505;border:1px solid rgba(255,255,255,0.05);overflow:hidden;position:relative;margin:auto;display:flex;justify-content:center;align-items:center;transition:.3s;">
                <img src="{{ asset('storage/'.$m->foto) }}" style="width:100%;height:100%;object-fit:cover;">
            </div>

            <div class="name" style="font-family:'Oswald';font-size:20px;color:var(--neon);text-align:center;margin-top:12px;">
                {{ $m->nama_menu }}
            </div>

            <div class="price" style="color:var(--text-light);text-align:center;font-size:15px;">
                Rp {{ number_format($m->harga) }}
            </div>

        </a>
    @endforeach

</div>

<script>
(function(){

    const API_URL = "/api/menus";
    const container = document.getElementById("product-list");

    function formatRupiah(num){
        return new Intl.NumberFormat('id-ID').format(num);
    }

    function escapeHtml(str){
        return String(str)
            .replace(/&/g,"&amp;")
            .replace(/</g,"&lt;")
            .replace(/>/g,"&gt;")
            .replace(/"/g,"&quot;")
            .replace(/'/g,"&#39;");
    }

    function renderCard(m){
        const foto = m.foto_url ? m.foto_url : "https://via.placeholder.com/200x320/001100/00ff66?text=W77";

        return `
            <a href="/produk/${m.id}" class="product-card" style="width:260px;text-decoration:none;color:white;">

                <div class="can" style="width:200px;height:320px;border-radius:20px;background:#050505;border:1px solid rgba(255,255,255,0.05);overflow:hidden;position:relative;margin:auto;display:flex;justify-content:center;align-items:center;transition:.3s;">
                    <img src="${foto}" style="width:100%;height:100%;object-fit:cover;">
                </div>

                <div class="name" style="font-family:'Oswald';font-size:20px;color:var(--neon);text-align:center;margin-top:12px;">
                    ${escapeHtml(m.nama_menu)}
                </div>

                <div class="price" style="color:var(--text-light);text-align:center;font-size:15px;">
                    Rp ${formatRupiah(m.harga)}
                </div>

            </a>
        `;
    }

    async function update(){
        try{
            const res = await fetch(API_URL);
            const menus = await res.json();

            let html = "";
            menus.forEach(m => html += renderCard(m));

            container.innerHTML = html;

        } catch(e){
            console.error(e);
        }
    }

    setInterval(update, 5000);
    setTimeout(update, 1000);

})();
</script>

@endsection
