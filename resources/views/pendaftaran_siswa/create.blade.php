
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <div class="container">
        <h1>Formulir Pendaftaran Siswa Baru</h1>
        <form method="post" action="{{ route('pendaftaran_siswa.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" name="jenis_kelamin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="agama_id">Agama:</label>
                <input type="text" name="agama_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nilai_indo">Nilai Bahasa Indonesia:</label>
                <input type="text" name="nilai_indo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nilai_ipa">Nilai IPA:</label>
                <input type="text" name="nilai_ipa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nilai_mtk">Nilai Matematika:</label>
                <input type="text" name="nilai_mtk" class="form-control" required>
            </div>
            <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
{{-- @endsection --}}