<?=$this->extend('layouts/primary') ?>
<?=$this->section('content') ?>
<main>

<h1>form pembuatan penguna baru </h1>
<form method ="post">

<input type="text" name="nama" id="nama" placeholder="nama kamu">
<input type="email" name="email" id="email" placeholder="alamat email kamu">
<input type="text" name="alamat" id="alamat" placeholder="alamat rumah kamu">
<input type="submit" value="buat pengguna baru">
</form>
</main>
<?=$this->endsection() ?>