<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Dashboard</h3>
  <a href="#" class="w3-bar-item w3-button">Siswa</a>
  <a href="#" class="w3-bar-item w3-button">Guru</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>Sistem Aplikasi Sekolah</h1>
</div>

<div class="row mx-2">
  <div class="card col-3 mb-3">
    <div class="card-body">
      This is some text within a card body.
    </div>
  </div>
  <div class="card col-3 mb-3">
    <div class="card-body">
      This is some text within a card body.
    </div>
  </div>
  <div class="card col-3 mb-3">
    <div class="card-body">
      This is some text within a card body.
    </div>
  </div>
  <div class="card col-3 mb-3">
    <div class="card-body">
      This is some text within a card body.
    </div>
  </div>
</div>

<div class="w3-container">
<h1>Selamat datang <?php echo $this->session->userdata('username') ?></h1>
</div>

</div>
      
</body>
</html>
