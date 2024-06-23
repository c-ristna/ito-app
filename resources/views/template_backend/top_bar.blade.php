<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div>
            @php
                $path = Request::path();
            @endphp
            <form action="{{ url($path) }}" method="GET">
                <div class="search" style="display: flex; gap:10px; align-items:center;">
                    <label>
                        <input type="search" name="search" value="{{ $keyword }}" placeholder="Cari di sini" aria-label="Cari">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                    <button style="height: 40px; width:200px; border-radius:20px; background-color:orange; font-weight:bold; border:none; color:white; cursor: pointer;" type="submit">Cari</button>
                </div>
            </form>
        </div>

        <div class="user">
            <img src="{{ asset('assets/imgs/logo_ito.jpg') }}" alt="Foto Pengguna">
        </div>
    </div>

