<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata</title>
</head>

<body>
  <?= validation_errors(); ?>
  <form action="<?= base_url('biodata/save') ?>" method="post">
    <div>
      <label for="nama">nama</label>
      <input type="text" name="nama">
    </div>

    <div>
      <label for="email">email</label>
      <input type="text" name="email">
    </div>

    <div>
      <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria">Pria
      <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita">Wanita
    </div>

    <div>
      <label for="agama">Agama</label>
      <select name="agama" id="agama">
        <option value="islam">islam</option>
        <option value="kafir">kafir</option>
      </select>
    </div>

    <div>
      <label for="alamat">alamat</label>
      <textarea name="alamat" id="" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Simpan</button>

  </form>
</body>

</html>