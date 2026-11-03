<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Timur Apotek | Data Staff</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --blue: #2563eb;
            --dark-blue: #1e3a8a;
            --light-blue: #eaf2ff;
            --light-bg: #f4f7fc;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--light-bg);
            font-family: 'Segoe UI', sans-serif;
            color: #243b32;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #172554, #1e3a8a);
            padding: 28px 18px;
            color: white;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 10px 30px;
            border-bottom: 1px solid rgba(255,255,255,.15);
        }

        .brand-logo {
            width: 48px;
            height: 48px;
            background: white;
            color: #2563eb;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
        }

        .brand h5 {
            margin: 0;
            font-weight: 800;
            letter-spacing: 1px;
            font-size: 16px;
        }

        .brand small {
            color: #bfdbfe;
            font-size: 11px;
            letter-spacing: 2px;
        }

        .nav-title {
            color: #93b4e8;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin: 30px 12px 12px;
        }

        .side-link {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 15px;
            margin-bottom: 8px;
            border-radius: 12px;
            text-decoration: none;
            color: #d4e3ff;
            font-weight: 500;
            transition: .2s;
        }

        .side-link i { font-size: 19px; }

        .side-link:hover,
        .side-link.active {
            background: #2563eb;
            color: white;
        }

        .sidebar-bottom {
            position: absolute;
            bottom: 25px;
            left: 25px;
            right: 25px;
            color: #a8c5f5;
            font-size: 12px;
        }

        .main {
            margin-left: 250px;
            padding: 30px 38px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }

        .topbar h4 {
            font-weight: 800;
            margin-bottom: 5px;
            color: #172554;
        }

        .topbar p {
            color: #8293aa;
            margin: 0;
            font-size: 14px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: white;
            padding: 10px 15px;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(0,0,0,.04);
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            background: var(--light-blue);
            color: var(--blue);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .welcome {
            background: linear-gradient(115deg, #1d4ed8, #38bdf8);
            color: white;
            padding: 28px 32px;
            border-radius: 20px;
            margin-bottom: 28px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(37,99,235,.18);
        }

        .welcome h3 {
            font-weight: 800;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #e0f2fe;
            margin: 0;
        }

        .welcome-icon {
            position: absolute;
            right: 35px;
            top: 8px;
            font-size: 125px;
            color: rgba(255,255,255,.15);
            transform: rotate(-15deg);
        }

        .section-card {
            background: white;
            border: 1px solid #e8eef8;
            border-radius: 18px;
            box-shadow: 0 5px 20px rgba(20,60,100,.05);
            margin-bottom: 25px;
            overflow: hidden;
        }

        .section-head {
            padding: 20px 25px;
            border-bottom: 1px solid #edf2fa;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-icon {
            width: 42px;
            height: 42px;
            background: var(--light-blue);
            color: var(--blue);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .section-head h5 {
            font-weight: 750;
            margin: 0;
            color: #172554;
        }

        .section-head small { color: #8a9bb3; }

        .section-body { padding: 25px; }

        .form-label {
            font-weight: 600;
            font-size: 13px;
            color: #526580;
            margin-bottom: 8px;
        }

        .form-control {
            border: 1px solid #dce6f5;
            border-radius: 10px;
            padding: 12px 14px;
            background: #fbfdff;
        }

        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59,130,246,.12);
            background: white;
        }

        .id-field {
            background: #eaf2ff !important;
            color: #1d4ed8;
            font-weight: 700;
        }

        .btn-save {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 23px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-save:hover {
            background: #1e40af;
            color: white;
        }

        .table { margin: 0; }

        .table thead th {
            background: #eaf2ff;
            color: #1e40af;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .5px;
            padding: 15px;
            border-bottom: none;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 16px 15px;
            vertical-align: middle;
            font-size: 14px;
        }

        .id-badge {
            display: inline-block;
            background: #eaf2ff;
            color: #1d4ed8;
            padding: 5px 10px;
            border-radius: 7px;
            font-weight: 700;
        }

        .empty-state {
            text-align: center;
            color: #91a1b8;
            padding: 35px !important;
        }

        .btn-action {
            border-radius: 8px;
            padding: 7px 10px;
            font-size: 13px;
            white-space: nowrap;
        }

        .footer {
            text-align: center;
            color: #9aa9bd;
            font-size: 12px;
            padding: 15px;
        }

        @media (max-width: 900px) {
            .sidebar {
                width: 75px;
                padding: 20px 10px;
            }

            .brand {
                justify-content: center;
                padding: 0 0 25px;
            }

            .brand-text,
            .nav-title,
            .side-link span,
            .sidebar-bottom {
                display: none;
            }

            .side-link {
                justify-content: center;
                padding: 14px 8px;
            }

            .main {
                margin-left: 75px;
                padding: 20px;
            }
        }

        @media (max-width: 600px) {
            .main { padding: 15px; }
            .topbar { align-items: flex-start; }
            .profile { display: none; }
            .welcome { padding: 23px; }
            .welcome-icon {
                right: 5px;
                font-size: 85px;
            }
            .section-body { padding: 18px; }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="brand">
        <div class="brand-logo">
            <i class="bi bi-star-fill"></i>
        </div>
        <div class="brand-text">
            <h5>BINTANG TIMUR</h5>
            <small>APOTEK</small>
        </div>
    </div>

    <div class="nav-title">MENU UTAMA</div>

    <a href="/pelanggan" class="side-link">
        <i class="bi bi-people"></i>
        <span>Data Pelanggan</span>
    </a>

    <a href="/staff" class="side-link active">
        <i class="bi bi-person-badge"></i>
        <span>Staff Apotek</span>
    </a>

    <a href="/obat" class="side-link">
        <i class="bi bi-capsule"></i>
        <span>Daftar Obat</span>
    </a>

    <div class="sidebar-bottom">
        <i class="bi bi-heart-pulse"></i>
        Sistem Informasi Apotek<br>
        Bintang Timur
    </div>
</aside>

<!-- MAIN CONTENT -->
<main class="main">

    <div class="topbar">
        <div>
            <h4>Data Staff Apotek</h4>
            <p>Kelola informasi staff apotek</p>
        </div>

        <div class="profile">
            <div class="profile-icon">
                <i class="bi bi-hospital"></i>
            </div>
            <div>
                <strong style="font-size: 13px;">BINTANG TIMUR APOTEK</strong>
                <div style="font-size: 11px; color: #8a9bb3;">
                    Sistem Manajemen
                </div>
            </div>
        </div>
    </div>

    <!-- WELCOME BANNER -->
    <div class="welcome">
        <h3>Manajemen Staff Apotek</h3>
        <p>Kelola informasi staff dengan mudah dan terorganisir.</p>
        <i class="bi bi-person-badge welcome-icon"></i>
    </div>

    <!-- FORM TAMBAH STAFF -->
    <div class="section-card">
        <div class="section-head">
            <div class="section-icon">
                <i class="bi bi-person-plus"></i>
            </div>
            <div>
                <h5>Tambah Staff</h5>
                <small>Masukkan informasi staff apotek</small>
            </div>
        </div>

        <div class="section-body">

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="bi bi-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    <i class="bi bi-exclamation-circle"></i>
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('staff.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ID Staff</label>
                        <input type="text" class="form-control id-field"
                               value="Otomatis" readonly>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Staff</label>
                        <input type="text" name="nama" class="form-control"
                               placeholder="Masukkan nama staff"
                               value="{{ old('nama') }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control"
                               placeholder="Contoh: Apoteker"
                               value="{{ old('jabatan') }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">No. HP</label>
                        <input type="text" name="no_hp" class="form-control"
                               placeholder="08xxxxxxxxxx"
                               value="{{ old('no_hp') }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control"
                               placeholder="Masukkan alamat staff"
                               value="{{ old('alamat') }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control"
                               placeholder="Masukkan tempat lahir"
                               value="{{ old('tempat_lahir') }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control"
                               value="{{ old('tanggal_lahir') }}" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-save">
                    <i class="bi bi-check2-circle"></i>
                    Simpan Staff
                </button>
            </form>
        </div>
    </div>

    <!-- TABEL STAFF -->
    <div class="section-card">
        <div class="section-head">
            <div class="section-icon">
                <i class="bi bi-clipboard2-data"></i>
            </div>
            <div>
                <h5>Daftar Staff</h5>
                <small>Data staff yang tersimpan di database</small>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Staff</th>
                        <th>Jabatan</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($staffs as $staff)
                        <tr>
                            <td>
                                <span class="id-badge">#{{ $staff->id }}</span>
                            </td>
                            <td>
                                <i class="bi bi-person-circle text-primary"></i>
                                {{ $staff->nama }}
                            </td>
                            <td>{{ $staff->jabatan }}</td>
                            <td>
                                <i class="bi bi-telephone text-primary"></i>
                                {{ $staff->no_hp }}
                            </td>
                            <td>{{ $staff->alamat }}</td>
                            <td>{{ $staff->tempat_lahir }}</td>
                            <td>{{ $staff->tanggal_lahir }}</td>
                            <td class="text-center">
                                <!-- TOMBOL EDIT -->
                                <button type="button"
                                        class="btn btn-warning btn-action"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editStaff{{ $staff->id }}">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </button>

                                <!-- FORM HAPUS -->
                                <form action="{{ route('staff.destroy', $staff->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus staff ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-action">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- MODAL EDIT STAFF -->
                        <div class="modal fade"
                             id="editStaff{{ $staff->id }}"
                             tabindex="-1"
                             aria-labelledby="editStaffLabel{{ $staff->id }}"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <form action="{{ route('staff.update', $staff->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="editStaffLabel{{ $staff->id }}">
                                                <i class="bi bi-pencil-square text-primary"></i>
                                                Edit Data Staff
                                            </h5>
                                            <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">ID Staff</label>
                                                    <input type="text"
                                                           class="form-control id-field"
                                                           value="{{ $staff->id }}"
                                                           readonly>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Nama Staff</label>
                                                    <input type="text"
                                                           name="nama"
                                                           class="form-control"
                                                           value="{{ $staff->nama }}"
                                                           required>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Jabatan</label>
                                                    <input type="text"
                                                           name="jabatan"
                                                           class="form-control"
                                                           value="{{ $staff->jabatan }}"
                                                           required>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">No. HP</label>
                                                    <input type="text"
                                                           name="no_hp"
                                                           class="form-control"
                                                           value="{{ $staff->no_hp }}"
                                                           required>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Alamat</label>
                                                    <input type="text"
                                                           name="alamat"
                                                           class="form-control"
                                                           value="{{ $staff->alamat }}"
                                                           required>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Tempat Lahir</label>
                                                    <input type="text"
                                                           name="tempat_lahir"
                                                           class="form-control"
                                                           value="{{ $staff->tempat_lahir }}"
                                                           required>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Tanggal Lahir</label>
                                                    <input type="date"
                                                           name="tanggal_lahir"
                                                           class="form-control"
                                                           value="{{ $staff->tanggal_lahir }}"
                                                           required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button"
                                                    class="btn btn-secondary"
                                                    data-bs-dismiss="modal">
                                                Batal
                                            </button>

                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-save"></i>
                                                Simpan Perubahan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    @empty
                        <tr>
                            <td colspan="8" class="empty-state">
                                <i class="bi bi-inbox fs-2 d-block mb-2"></i>
                                Belum ada data staff
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <i class="bi bi-star-fill text-primary"></i>
        BINTANG TIMUR APOTEK · Sistem Informasi Apotek Berbasis Laravel
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>