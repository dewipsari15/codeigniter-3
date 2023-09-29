<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <h4>Selamat datang, <strong class="text-dark"><?php echo $this->session->userdata('username') ?></strong></h4>
  </div>
</nav>
<div class="mb-4"></div>
</body>
</html>