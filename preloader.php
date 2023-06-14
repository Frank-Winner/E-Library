<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    body {
      height: 100vh;
      background: linear-gradient(coral, skyblue);
      margin: 0;
      padding: 0;
    }

    img {
      width: 100px;
      border-radius: 50px;
    }

    .img {
      margin-top: 10%;
      margin-left: 40%;
      width: fit-content;
      position: absolute;
      animation-name: moving;
      animation-duration: 4s;
      animation-delay: 1s;
    }

    @keyframes moving {
      0% {
        left: 0px;
        top: 0px;
      }

      25% {
        left: 200px;
        top: 0px;
      }

      50% {
        left: 200px;
        top: 200px;
      }

      75% {
        left: 0px;
        top: 200px;
      }

      100% {
        left: 0px;
        top: 0px;
      }
    }
  </style>
</head>

<body>
  <div class="img">
    <img src="img/cart.jpeg" alt="" />
  </div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script>
  setTimeout(() => {
    window.location.href = "cart.php";
  }, 5000);
</script>

</html>