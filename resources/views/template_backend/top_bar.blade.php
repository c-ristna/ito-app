<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">
            <form action="{{ url('konsumen') }}" method="GET">
                <input type="search" name="search" value="{{ isset($keyword) ? $keyword : '' }}"
                    placeholder="Cari Data">
                <button type="submit">Cari</button>
            </form>
        </div>

        <div class="user">
            <img src="{{ asset('assets/imgs/crstn.jpg') }}" alt="Foto Pengguna">
        </div>
    </div>
