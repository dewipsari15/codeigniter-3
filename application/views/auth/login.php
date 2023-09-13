<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: whitesmoke;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 500PX;
    text-align: center;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
    outline: none;
}
    </style>
</head>
<body>
<div class="login-container">
    <div class="logo text-center">
        <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="logo binus" style="width: 30%;">
    </div>
    <br>
    <h6>SISTEM INFORMASI SEKOLAH</h6>
        <form class="login-form">
            <label for="username">username</label>
            <input type="text" name="username" placeholder="Username" required>
            <label for="password">password</label>
            <input type="password" name="password" placeholder="Password" required>
            <button class="btn btn-sm btn-primary" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
