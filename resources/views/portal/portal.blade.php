<div class="container py-5 text-center">
    <h1 class="mb-4">Selamat Datang di Portal Kaset Dwinarko</h1>
    <p class="lead mb-5">Pilih salah satu website untuk melanjutkan:</p>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow rounded-3">
                <div class="card-body">
                    <h5 class="card-title">Web A - Kaset Jadul</h5>
                    <p class="card-text">Menampilkan koleksi kaset jadul dan klasik.</p>
                    <a href="{{ url('web-a') }}" class="btn btn-primary">Masuk Web A</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow rounded-3">
                <div class="card-body">
                    <h5 class="card-title">Web B - Kaset Modern</h5>
                    <p class="card-text">Menampilkan kaset modern dan terbaru.</p>
                    <a href="{{ url('/web-b/login') }}" class="btn btn-success">Masuk Web B</a>
                </div>
            </div>
        </div>
    </div>
</div>
