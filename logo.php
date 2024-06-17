<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link rel="icon" href="logo.png">
<style>
  body {
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

img {
  max-width: 100%;
  max-height: 100%;
}

.scale-up-center {
	-webkit-animation: scale-up-center 0.5s cubic-bezier(0.390, 0.575, 0.565, 1.000) forwards;
	        animation: scale-up-center 0.5s cubic-bezier(0.390, 0.575, 0.565, 1.000) forwards;
}
@-webkit-keyframes scale-up-center {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes scale-up-center {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

.flip-scale-2-hor-top {
	-webkit-animation: flip-scale-2-hor-top 0.5s linear 1.3s both;
	        animation: flip-scale-2-hor-top 0.5s linear 1.3s both;
}
@-webkit-keyframes flip-scale-2-hor-top {
  0% {
    -webkit-transform: translateY(0) rotateX(0) scale(1);
            transform: translateY(0) rotateX(0) scale(1);
    -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
  }
  50% {
    -webkit-transform: translateY(-50%) rotateX(-90deg) scale(2);
            transform: translateY(-50%) rotateX(-90deg) scale(2);
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
  }
  100% {
    -webkit-transform: translateY(-100%) rotateX(-180deg) scale(1);
            transform: translateY(-100%) rotateX(-180deg) scale(1);
    -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
  }
}
@keyframes flip-scale-2-hor-top {
  0% {
    -webkit-transform: translateY(0) rotateX(0) scale(1);
            transform: translateY(0) rotateX(0) scale(1);
    -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
  }
  50% {
    -webkit-transform: translateY(-50%) rotateX(-90deg) scale(2);
            transform: translateY(-50%) rotateX(-90deg) scale(2);
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
  }
  100% {
    -webkit-transform: translateY(-100%) rotateX(-180deg) scale(1);
            transform: translateY(-100%) rotateX(-180deg) scale(1);
    -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
  }
}
</style>
    <script>
  setTimeout(function() {
    window.location.href = "login.php";
  }, 1500); // 5000 milliseconds = 5 seconds
</script>
  </head>
  <body class="flip-scale-2-hor-top">
    <img class="scale-up-center" src="logo.png" alt="Logo" width="2024" hight="2000">
  </body>
</html> 