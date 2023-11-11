<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data2 WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <title>Curriculum Vitae</title>
</head>

<body class="p-3">
  <nav class="navbar sticky-top navbar-custom">
    <div class="container-fluid">
      <h1 class="font-custom">CURRICULUM VITAE</h1>
      <!-- <button type="button" class="btn btn-primary" href="admin.php">UPDATE</button> -->
      <a class="btn btn-custom-bg btn-custom-text" href="admin.php">UPDATE</a>
      <!-- <a class="navbar-brand" type="button" href="admin.php">Update</a> -->
    </div>
  </nav>
  <div class="card">
    <div class="mx-auto">
      <style>
        .custom-img {
          width: 100%;
          height: auto;
          max-width: 400px;
          display: block;
          margin: 0 auto;
        }
      </style>
      <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil" class="custom-img">
    </div>
    <div class="card-body p-3">
      <div class="card-body">
        <h1 class="card-title">
          <?php echo $data['nama']; ?>
        </h1>
        <p class="card-text">
          <?php echo $data['alamat']; ?>
        </p>
        <p class="card-text">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
          <?php echo $data['telepon']; ?>
        </p>
        <p class="card-text">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512"><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
          <?php echo $data['email']; ?>
        </p>
        <p class="card-text">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
          <?php echo $data['linkedin']; ?>
        </p>
        <h2>Pendidikan</h2>
        <p class="card-text">
          <?php echo $data['pendidikan']; ?>
        </p>
        <h2>Pengalaman Kerja</h2>
        <p class="card-text">
          <?php echo $data['pengalaman_kerja']; ?>
        </p>
        <h2>Keterampilan</h2>
        <p class="card-text">
          <?php echo $data['keterampilan']; ?>
        </p>
      </div>
    </div>
  </div>
</body>

</html>