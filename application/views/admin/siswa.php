<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex">
        <?php $this->load->view('components/sidebar') ?>
        <div class="container w-100">
            <?php $this->load->view('components/navbar') ?>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Siswa</h3>
                    <div class="d-flex">
                        <a href="<?php echo base_url('admin/export'); ?>" class="btn btn-sm btn-primary m-2"><i
                                class="fa fa-download m-1"></i>Export</a>
                        <a href="<?php echo base_url('admin/tambah_siswa'); ?>" class="btn btn-sm btn-primary m-2"><i
                                class="fa fa-plus m-1"></i>Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Profile</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Gender</th>
                                <th>Kelas</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php $no=0;foreach($siswa as $row): $no++ ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><img src="<?php echo base_url('images/siswa/' .$row->foto) ?>" alt="" width='50'>
                                </td>
                                <td><?php echo $row->nama_siswa ?></td>
                                <td><?php echo $row->nisn ?></td>
                                <td><?php echo $row->gender ?></td>
                                <td><?php echo tampil_full_kelas_byid($row->id_kelas) ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('admin/update_siswa/'). $row->id_siswa; ?>"
                                        class="btn btn-sm btn-primary">Update</a>
                                    <button onclick="hapus(<?php echo $row->id_siswa; ?>)"
                                        class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <form action="<?= base_url('admin/import') ?>" method="post" enctype="multipart/form-data"
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
            window.location.href = "<?php echo base_url('admin/hapus_siswa/'); ?>" + id;
        }
    }
    </script>

</body>

</html>