<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siswa</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <div class="d-flex">
  <?php $this->load->view('components/sidebarKeuangan') ?>
<div class="container w-100">
<?php $this->load->view('components/navbar') ?>
<div class="card">
  <div class="card-header d-flex justify-content-between">
    <h3>Pembayaran</h3>
    <a href="<?php echo base_url('keuangan/tambah_pembayaran'); ?>" class="btn btn-sm btn-primary">Tambah</a>
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
                      <td>Rp.<?php echo $row->total_pembayaran ?></td> 
                      <td class="text-center"> 
                          <a href="<?php echo base_url('keuangan/update_pembayaran/'). $row->id; ?>" class="btn btn-sm btn-primary">Update</a> 
                          <button onclick="hapus(<?php echo $row->id; ?>)" class="btn btn-sm btn-danger">Delete</button> 
                      </td> 
                  </tr> 
            <?php endforeach ?> 
          </tbody> 
    </table>
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