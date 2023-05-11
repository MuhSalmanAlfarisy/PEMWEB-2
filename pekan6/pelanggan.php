<?php
//batas edit
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pelanggan";
$rs = $dbh->query($sql);
?>
<!-- <h1 class="mt-4">Tables</h1> -->
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php?hal=dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active">Pelanggan</li>
</ol>
<!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <a class="btn btn-primary" href="index.php?hal=form_pelanggan">Create</a>

    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($rs as $row) {
                ?>
                    <tr>
                        <td>
                            <?= $nomor ?>
                        </td>
                        <td>
                            <?= $row['kode'] ?>
                        </td>
                        <td>
                            <?= $row['nama'] ?>
                        </td>
                        <td>
                            <?= $row['jk'] ?>
                        </td>
                        <td>
                            <?= $row['tmp_lahir'] ?>
                        </td>
                        <td>
                            <?= $row['tgl_lahir'] ?>
                        </td>
                        <td>
                            <?= $row['email'] ?>
                        </td>
                        <td>
                            <?= $row['kartu_id'] ?>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="index.php?hal=view_pelanggan&id=<?= $row['id'] ?>">View</a>
                            <a class="btn btn-sm btn-primary" href="index.php?hal=form_pelanggan&idedit=<?= $row['id'] ?>">Edit</a>
                            <a class="btn btn-sm btn-primary" href="index.php?hal=proses_pelanggan&iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>

        </table>
    </div>
</div>