<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
  <title>Karirsuka</title>

  <style>
    body,
    footer {
      font-family: 'Poppins';
    }

    #contentjob {
      border-radius: 30px;
      text-align: center;
    }

    #inputGroupSelect04,
    #buttons,
    #keyword {
      border-radius: 10px;
    }

    #formsearch {
      width: 800px;
      margin: 40px 250px;
    }
  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light mt-1 ms-2 mb-2">
      <a href="<?= BASE_URL; ?>"><img src="<?= BASE_URL; ?>image/logo.png" alt="Logo" width="130" height="45"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-5">
          <a class="nav-link active ms-5" href="<?= BASE_URL; ?>perusahaan/postJob">Post a Job</a>
        </div>
      </div>

      <?php if (isset($_SESSION["perushLogin"])) { ?>
        <a class="nav-link ms-5 ms-5" style="color:#0b0c0c" href="<?= BASE_URL; ?>perusahaan/profile"><span><i class='fas fa-user-alt ms-1' style='font-size:17px'></i> Profile</span></a>
      <?php } else { ?>
        <a class="nav-link ms-5 ms-5" style="color:#0b0c0c" href="<?= BASE_URL; ?>perusahaan/login">Sign in</a>
      <a class="btn rounded-3" style="background-color:#DEBD7E; color:#FBFBFB" href="<?= BASE_URL; ?>" role="button">Alumni</a>

      <?php } ?>
    </nav>
  </div>

  <hr>