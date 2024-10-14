<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN PAGE</h1>
<div class="login">

<?= $this->session->flashdata('message'); ?>

<form action=" <?= base_url() ?>login/validasi" method="POST">
        <input type="text" name="username" placeholder="masukkan Username">
        <br>
        <input type="text" name="password" placeholder="masukkan Password">
        <br>
        <input type="submit" velue="LOGIN">
        <br><br>
        <p>Belum punya account? <a href="<?= base_url('daftar')?>">Daftar</a></p>
</form>

</div>
</body>
</html>

