<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
      background: linear-gradient(black, rgb(233, 115, 134));
    }

    .container {
      padding: 0;
      margin: 0;
      width: 100%;
      height: 100vh;
    }

    .container video {
      height: 100vh;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="container">
    <video src="img/library.mp4" autoplay muted></video>
  </div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script>
  setTimeout(() => {
    window.location.href = "dahsboard.php";
  }, 2000);
</script>

</html>