<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#Bar">
                    <span class="icon">
                        <ion-icon name="content"></ion-icon>
                    </span>
                    <span class="title">Ini Tuh Oenak Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('dashboard') }}">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/konsumen') }}">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Konsumen</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/keuangan') }}">
                    <span class="icon">
                        <ion-icon name="cash-outline"></ion-icon>
                    </span>
                    <span class="title">Keuangan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/produk') }}">
                    <span class="icon">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                    </span>
                    <span class="title">Produk</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/penjualan') }}">
                    <span class="icon">
                        <ion-icon name="analytics-outline"></ion-icon>
                    </span>
                    <span class="title">Penjualan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin') }}">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="title">Admin</span>
                </a>
            </li>
            <li>
                <a href="{{ url('login') }}">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
