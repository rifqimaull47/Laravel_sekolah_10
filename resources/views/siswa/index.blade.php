<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Siswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f6f8fb;
            color: #1f2937;
            font-family: Arial, sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
        }

        .brand {
            font-weight: 700;
            color: #111827;
            text-decoration: none;
            font-size: 20px;
        }

        .brand i {
            color: #2563eb;
        }

        .nav-link {
            color: #6b7280;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #2563eb;
        }

        /* CONTENT */
        .content {
            padding-top: 45px;
            padding-bottom: 50px;
        }

        .page-title {
            font-weight: 700;
            color: #111827;
        }

        .page-description {
            color: #6b7280;
        }

        /* MAIN CARD */
        .main-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            overflow: hidden;
        }

        .card-top {
            padding: 22px 24px;
            border-bottom: 1px solid #e5e7eb;
        }

        /* SEARCH */
        .search-box {
            position: relative;
            width: 260px;
        }

        .search-box i {
            position: absolute;
            left: 13px;
            top: 11px;
            color: #9ca3af;
        }

        .search-box input {
            padding-left: 38px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
        }

        .search-box input:focus {
            box-shadow: none;
            border-color: #2563eb;
        }

        /* BUTTON */
        .btn-add {
            background: #2563eb;
            border: none;
            color: white;
            padding: 9px 15px;
            border-radius: 8px;
            font-weight: 500;
        }

        .btn-add:hover {
            background: #1d4ed8;
            color: white;
        }

        /* TABLE */
        .table {
            margin: 0;
        }

        .table thead th {
            background: #f9fafb;
            color: #6b7280;
            font-size: 13px;
            font-weight: 600;
            border-bottom: 1px solid #e5e7eb;
            padding: 14px 20px;
        }

        .table tbody td {
            padding: 16px 20px;
            border-bottom: 1px solid #f0f1f3;
            vertical-align: middle;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr:hover {
            background: #fafcff;
        }

        /* NAMA */
        .student-name {
            font-weight: 600;
            color: #111827;
        }

        .student-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: #eff6ff;
            color: #2563eb;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        /* KELAS */
        .class-badge {
            background: #eff6ff;
            color: #2563eb;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
        }

        /* ACTION */
        .action-btn {
            width: 34px;
            height: 34px;
            border-radius: 7px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
        }

        .edit-btn {
            background: #fff7ed;
            color: #ea580c;
        }

        .edit-btn:hover {
            background: #ffedd5;
        }

        .delete-btn {
            background: #fef2f2;
            color: #dc2626;
        }

        .delete-btn:hover {
            background: #fee2e2;
        }

        /* FOOTER */
        .footer {
            color: #9ca3af;
            font-size: 13px;
            text-align: center;
            margin-top: 25px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            .content {
                padding-top: 30px;
            }

            .card-top {
                padding: 18px;
            }

            .search-box {
                width: 100%;
            }

            .top-actions {
                width: 100%;
            }

            .btn-add {
                width: 100%;
            }

        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a href="{{ route('siswa.index') }}" class="brand">
                <i class="bi bi-mortarboard-fill me-2"></i>
                Sistem Siswa
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav ms-auto gap-lg-2">

                    <li class="nav-item">
                        <a
                            href="{{ route('siswa.index') }}"
                            class="nav-link active">
                            Data Siswa
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- CONTENT -->
    <main class="container content">

        <!-- TITLE -->

        <div class="mb-4">

            <h2 class="page-title mb-2">
                Data Siswa
            </h2>

            <p class="page-description mb-0">
                Kelola data siswa yang terdaftar di sekolah.
            </p>

        </div>


        <!-- CARD -->

        <div class="main-card">

            <!-- CARD TOP -->

            <div class="card-top">

                <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap">

                    <!-- SEARCH -->

                    <div class="search-box">

                        <i class="bi bi-search"></i>

                        <input
                            type="text"
                            id="searchInput"
                            class="form-control"
                            placeholder="Cari siswa...">

                    </div>


                    <!-- BUTTON -->

                    <div class="top-actions">

                        <a
                            href="{{ route('siswa.create') }}"
                            class="btn btn-add">

                            <i class="bi bi-plus-lg me-1"></i>

                            Tambah Siswa

                        </a>

                    </div>

                </div>

            </div>


            <!-- TABLE -->

            <div class="table-responsive">

                <table class="table" id="studentTable">

                    <thead>

                        <tr>

                            <th width="70">
                                No
                            </th>

                            <th>
                                Nama Siswa
                            </th>

                            <th>
                                Kelas
                            </th>

                            <th>
                                NISN
                            </th>

                            <th width="130" class="text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($siswas as $siswa)

                        <tr>

                            <!-- NO -->

                            <td class="text-muted">
                                {{ $loop->iteration }}
                            </td>


                            <!-- NAMA -->

                            <td>

                                <span class="student-icon">

                                    {{ strtoupper(substr($siswa->nama, 0, 1)) }}

                                </span>

                                <span class="student-name">

                                    {{ $siswa->nama }}

                                </span>

                            </td>


                            <!-- KELAS -->

                            <td>

                                <span class="class-badge">

                                    {{ $siswa->kelas }}

                                </span>

                            </td>


                            <!-- NISN -->

                            <td class="text-muted">

                                {{ $siswa->nisn }}

                            </td>


                            <!-- AKSI -->

                            <td class="text-center">

                                <a
                                    href="{{ route('siswa.edit', $siswa->id) }}"
                                    class="action-btn edit-btn me-1"
                                    title="Edit">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                <form
                                    action="{{ route('siswa.destroy', $siswa->id) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="action-btn delete-btn"
                                        title="Hapus"
                                        onclick="return confirm('Yakin ingin menghapus data {{ $siswa->nama }}?')">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="5">

                                <div class="text-center py-5">

                                    <i class="bi bi-person-x fs-1 text-secondary"></i>

                                    <h6 class="mt-3">
                                        Belum ada data siswa
                                    </h6>

                                    <p class="text-muted mb-0">
                                        Silakan tambahkan data siswa terlebih dahulu.
                                    </p>

                                </div>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        <div class="footer">
            © {{ date('Y') }} Sistem Siswa
        </div>

    </main>


    <!-- BOOTSTRAP JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- SEARCH -->

    <script>

        const searchInput = document.getElementById('searchInput');

        searchInput.addEventListener('keyup', function () {

            const keyword = this.value.toLowerCase();

            const rows = document.querySelectorAll('#studentTable tbody tr');

            rows.forEach(function (row) {

                const text = row.innerText.toLowerCase();

                row.style.display =
                    text.includes(keyword) ? '' : 'none';

            });

        });

    </script>

</body>

</html>