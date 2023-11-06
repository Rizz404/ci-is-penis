<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator Made With Tears</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<?php  ?>

<body>
  <?= validation_errors(); ?>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container p-3 w-50 border">
      <form action="<?= base_url('calculator/calculate') ?>" method="post">
        <div class="form-group mb-2">
          <label for="number1">Bilangan 1</label>
          <input type="number" name="number1" id="number1">
        </div>
        <div class="form-group mb-2">
          <label for="number2">Bilangan 2</label>
          <input type="number" name="number2" id="number2">
        </div>

        <div class="text-end">
          <select name="operation" id="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
          </select>

          <button type="submit">Submit</button>
        </div>
      </form>
      <strong>
        <!-- harus pakai isset agar bisa melacak variabel kosong -->
        Hasil <?= isset($result) ? $result : '' ?>
      </strong>
    </div>
  </div>


  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>