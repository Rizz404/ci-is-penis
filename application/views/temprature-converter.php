<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Celcius to another temrature</title>
</head>

<body>
  <?= validation_errors(); ?>

  <form action="<?= base_url('temprature/converter'); ?>" method="post">
    <label for="temprature">Temprature</label>
    <input type="text" name="temprature" id="temprature" placeholder="in celcius">

    <label for="converter">Convert to</label>
    <select name="converter" id="converter">
      <option value="fahrenheit">fahrenheit</option>
      <option value="reamur">reamur</option>
      <option value="kelvin">kelvin</option>
    </select>

    <button type="submit">Convert</button>
  </form>

  <strong><?= isset($result) ? $result : ''; ?></strong>
</body>

</html>