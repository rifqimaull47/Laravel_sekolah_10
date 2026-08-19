<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Siswa</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

    <style>
        body {
            background: #f6f8fb;
            color: #1f2937;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: white;
            border-bottom: 1px solid #e5e7eb;
        }

        .brand {
            color: #111827;
            text-decoration: none;
            font-size: 20px;
            font-weight: 700;
        }

        .brand i {
            color: #2563eb;
        }

        .nav-link {
            color: #6b7280;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #2563eb;
        }

        .content {
            max-width: 850px;
            padding-top: 45px;
            padding-bottom: 50px;
        }

        .back-link {
            color: #6b7280;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            color: #2563eb;
        }

        .page-title {
            font-weight: 700;
            color: #111827;
        }

        .page-description {
            color: #6b7280;
        }

        .form-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 30px;
        }

        .form-label {
            font-weight: 600;
            font-size: 14px;
            color: #374151;
        }

        .form-control {
            padding: 11px 13px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-text {
            color: #9ca3af;
        }

        .btn-save {
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 18px;
        }

        .btn-save:hover {
            background: #1d4ed8;
            color: white;
        }

        .btn-cancel {
            background: white;
            color: #374151;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 10px 18px;
        }

        .btn-cancel:hover {
            background: #f9fafb;
        }

        .footer {
            color: #9ca3af;
            font-size: 13px;
            text-align: center;
            margin-top: 25px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="container">

            <a
                href="{{ route('siswa.index') }}"
                class="brand">

                <i class="bi bi-mortarboard-fill me-2"></i>

                Sistem Siswa

            </a>

            <a
                href="{{ route('siswa.index') }}"
                class="nav-link">

                Data Siswa

            </a>

        </div>

    </nav>


    <!-- CONTENT -->

    <main class="container content">

        <!-- BACK -->

        <a
            href="{{ route('siswa.index') }}"
            class="back-link">

            <i class="bi bi-arrow-left me-1"></i>

            Kembali ke Data Siswa

        </a>


        <!-- TITLE -->

        <div class="mt-4 mb-4">

            <h2 class="page-title mb-2">
                Tambah Siswa
            </h2>

            <p class="page-description mb-0">
                Tambahkan data siswa baru ke dalam sistem.
            </p>

        </div>


        <!-- FORM CARD -->

        <div class="form-card">

            <form
                action="{{ route('siswa.store') }}"
                method="POST">

                @csrf


                <!-- NAMA -->

                <div class="mb-4">

                    <label class="form-label">
                        Nama Siswa
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama siswa"
                        required>

                    @error('nama')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                <!-- KELAS -->

                <div class="mb-4">

                    <label class="form-label">
                        Kelas
                    </label>

                    <input
                        type="text"
                        name="kelas"
                        class="form-control @error('kelas') is-invalid @enderror"
                        value="{{ old('kelas') }}"
                        placeholder="Contoh: XI PPLG"
                        required>

                    @error('kelas')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                <!-- NISN -->

                <div class="mb-4">

                    <label class="form-label">
                        NISN
                    </label>

                    <input
                        type="text"
                        name="nisn"
                        class="form-control @error('nisn') is-invalid @enderror"
                        value="{{ old('nisn') }}"
                        placeholder="Masukkan NISN"
                        required>

                    @error('nisn')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>


                <!-- BUTTON -->

                <div class="d-flex justify-content-end gap-2 pt-2">

                    <a
                        href="{{ route('siswa.index') }}"
                        class="btn btn-cancel">

                        Batal

                    </a>

                    <button
                        type="submit"
                        class="btn btn-save">

                        <i class="bi bi-check-lg me-1"></i>

                        Simpan Siswa

                    </button>

                </div>

            </form>

        </div>


        <div class="footer">
            © {{ date('Y') }} Sistem Siswa
        </div>

    </main>

</body>

</html>