<!-- application/views/rekrutmen_report.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Rekrutmen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .modal-dialog {
            max-width: 400px;
        }
    </style>

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
                        <th>Jenis Attribut</th>
                        <th>Nilai T1</th>
                        <th>Nilai T2</th>
                        <th>Nilai T3</th>
                        <th>URL FILE</th>
                        <!-- <th>Bahasa Pemrograman yang Dikuasai</th>
                        <th>Framework yang Dikuasai</th>
                        <th>Database yang Dikuasai</th>
                        <th>Tools yang Dikuasai</th>
                        <th>Pernah Membuat Mobile Apps</th> -->
                        <th style="width: 30px">Value</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mergedData as $item): ?>
                        <tr>
                            <td><?= isset($item['id']) ? $item['id'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['nama']) ? $item['nama'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['nip'] ) ? $item['nip'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['satuan_kerja'] ) ? $item['satuan_kerja'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['posisi_yang_dipilih'] ) ? $item['posisi_yang_dipilih'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['jenis_attr'] ) ? $item['jenis_attr'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['jenis_attr'] ) ? $item['jenis_attr'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['jenis_attr'] ) ? $item['jenis_attr'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['jenis_attr'] ) ? $item['jenis_attr'] : '<b>Tidak Ada</b>';?></td>
                            <td><?= isset($item['jenis_attr'] ) ? $item['jenis_attr'] : '<b>Tidak Ada</b>';?></td>
                            <td style="width: 30px"><?= isset($item['value'] ) ? $item['value'] : '<b>Tidak Ada</b>';?></td>
                            <td>                            
                                <button type="button" class="btn btn-primary btn-detail" data-toggle="modal" data-target="#modal-detail-<?php echo $item['id']; ?>">Detail</button>
                            </td>
                        </tr>

                        <div id="modal-detail-<?= $item['id']; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Detail Pendaftar - <b><?= $item['nama']; ?></b></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><b>Nama</b>: <?= $item['nama']; ?></p>
                                        <p><b>NIP</b>: <?= $item['nip']; ?></p>
                                        <p><b>Bahasa Pemrograman yang Dikuasai</b>: <?= $item['bahasa_pemrograman_yang_dikuasai']; ?></p>
                                        <p><b>Framework yang Dikuasai</b>: <?= $item['framework_bahasa_pemrograman_yang_dikuasai']; ?></p>
                                        <p><b>Database yang Dikuasai</b>: <?= $item['database_yang_dikuasai']; ?></p>
                                        <p><b>Tools yang Dikuasai</b>: <?= $item['tools_yang_dikuasai']; ?></p>
                                        <p><b>Pernah Membuat Mobile Apps</b>: <?= $item['pernah_membuat_mobile_apps']; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <h1>Laporan Rekrutmen</h1>
    <table border="1">
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
    </table> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
