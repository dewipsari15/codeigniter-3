<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="d-flex">
        <?php $this->load->view('components/sidebarKeuangan') ?>
        <div class="container w-100">
            <?php $this->load->view('components/navbar') ?>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Pembayaran</h3>
                    <div class="d-flex">
                        <a href="<?php echo base_url('keuangan/export'); ?>" class="btn btn-sm btn-primary m-2"><i
                                class="fa fa-download m-1"></i>Export</a>
                        <a href="<?php echo base_url('keuangan/tambah_pembayaran'); ?>"
                            class="btn btn-sm btn-primary m-2"><i class="fa fa-plus m-1"></i>Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Pembayaran</th>
                                <th>Total Bayar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php $no=0;foreach($pembayaran as $row): $no++ ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo tampil_nama_siswa($row->id_siswa) ?></td>
                                <td><?php echo $row->jenis_pembayaran ?></td>
                                <td><?php echo convRupiah($row->total_pembayaran); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('keuangan/update_pembayaran/'). $row->id; ?>"
                                        class="btn btn-sm btn-primary"><i class="fa fa-pen m-1"></i>Update</a>
                                    <button onclick="hapus(<?php echo $row->id; ?>)" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash m-1"></i>Delete
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <form action="<?= base_url('keuangan/import') ?>" method="post" enctype="multipart/form-data"
                        class="row">
                        <div class="col-6">
                            <input type="file" name="file" class="form-control col-6" id="inputGroupFile01">
                        </div>
                        <div class="col-6 text-end">
                            <input type="submit" name="import" class="btn btn-sm btn-primary m-2" value="Import" />
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Di Hapus?');
        if (yes == true) {
            window.location.href = "<?php echo base_url('keuangan/hapus_pembayaran/'); ?>" + id;
        }
    }
    </script>

</body>

</html>