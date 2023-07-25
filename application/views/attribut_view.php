<!-- application/views/rekrutmen_report.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Rekrutmen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">
            Laporan Data Rekrutmen
        </h1>
        <div class="table-responsive">
            <table id="table-rekrutmen" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Satuan Kerja</th>
                        <th>Posisi yang Dipilih</th>
                        <th>Bahasa Pemrograman</th>
                        <th>Framework yang Dikuasai</th>
                        <th>Database yang Dikuasai</th>
                        <th>Tools yang Dikuasai</th>
                        <th>Pernah Membuat Mobile Apps</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataRekrutmen['Form Responses 1'] as $item): ?>
                        <tr>
                            <td><?= isset($item['id']) ? $item['id'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['nama']) ? $item['nama'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['nip'] ) ? $item['nip'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['satuan_kerja'] ) ? $item['satuan_kerja'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['posisi_yang_dipilih'] ) ? $item['posisi_yang_dipilih'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['bahasa_pemrograman_yang_dikuasai'] ) ? $item['bahasa_pemrograman_yang_dikuasai'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['framework_bahasa_pemrograman_yang_dikuasai'] ) ? $item['framework_bahasa_pemrograman_yang_dikuasai'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['database_yang_dikuasai'] ) ? $item['database_yang_dikuasai'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['tools_yang_dikuasai'] ) ? $item['tools_yang_dikuasai'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['pernah_membuat_mobile_apps'] ) ? $item['pernah_membuat_mobile_apps'] : '<b>Tidak Ada</b>';?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inisialisasi DataTables
            $('#table-rekrutmen').DataTable();
        });
    </script>
</body>
</html>
