<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PROFESSOR</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
      color: #00ffcc;
      font-family: 'Arial', sans-serif;
      height: 100vh;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .scrolling-text {
      font-size: 4rem;
      font-weight: bold;
      white-space: nowrap;
      animation: scroll 10s linear infinite;
      position: absolute;
    }

    @keyframes scroll {
      0%   { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }
  </style>
</head>
<body>
  <div class="scrolling-text">PROFESSOR</div>
</body>
</html>
