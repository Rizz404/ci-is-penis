<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
</head>

<body>
  <?= validation_errors(); ?>

  <form action="<?= base_url('hotel/calculate'); ?>" method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" placeholder="nama lengkap">

    <label for="type_kamar">Tipe Kamar</label>
    <select name="type_kamar" id="type_kamar">
      <option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
    </select>

    <label for="lama_inap">Lama Inap</label>
    <input type="text" name="lama_inap" id="lama_inap">

    <button type="submit">Checkin</button>
  </form>

  <!-- kalau satu halaman harus pakai isset -->
  <?php if (!empty($not_found)) : ?>
    <p><?= $not_found ?></p>
  <?php endif; ?>

  <table>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?= isset($nama) ? $nama : ''; ?></td>
    </tr>
    <tr>
      <td>type_kamar</td>
      <td>:</td>
      <td><?= isset($type_kamar) ? $type_kamar : ''; ?></td>
    </tr>
    <tr>
      <td>lama_inap</td>
      <td>:</td>
      <td><?= isset($lama_inap) ? $lama_inap : ''; ?></td>
    </tr>
    <tr>
      <td>Harga Kamar</td>
      <td>:</td>
      <td><?= isset($harga_kamar) ? $harga_kamar : ''; ?></td>
    </tr>
    <tr>
      <td>subtotal</td>
      <td>:</td>
      <td><?= isset($subtotal) ? $subtotal : ''; ?></td>
    </tr>
    <tr>
      <td>diskon</td>
      <td>:</td>
      <td><?= isset($diskon) ? $diskon : ''; ?></td>
    </tr>
    <tr>
      <td>total</td>
      <td>:</td>
      <td><?= isset($total) ? $total : ''; ?></td>
    </tr>
    <tr>
      <td>ppn</td>
      <td>:</td>
      <td><?= isset($ppn) ? $ppn : ''; ?></td>
    </tr>
    <tr>
      <td>total_dibayar</td>
      <td>:</td>
      <td><?= isset($total_dibayar) ? $total_dibayar : ''; ?></td>
    </tr>
  </table>
</body>

</html>