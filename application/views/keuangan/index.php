<!DOCTYPE html>
<html>
<title>Keuangan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<body>
<div class="d-flex">
<?php $this->load->view('components/sidebarKeuangan') ?>
  <div class="main w-100">
  <?php $this->load->view('components/navbar') ?>
    <main class="page-content">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pembayaran SPP</h5>
              <p class="card-text">
                Rp. 10.000.000,00
              </p>
            </div>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pembayaran Uang Gedung</h5>
              <p class="card-text">
                Rp. 10.000.000,00
              </p>
            </div>
          </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pembayaran Seragam</h5>
              <p class="card-text">
                Rp. 10.000.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
