<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Glowing Signboard</title>
  <style>
    /* (A) DARK BACKGROUND */
    body {
      background: #000;
      margin: 0; /* Remove default margin */
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    /* (B) GLOWING SIGNBOARD */
    .signboard {
      /* (B1) SIZING */
      width: 300px;
      padding: 30px;

      /* (B2) FONT */
      font-family: Arial, Helvetica, sans-serif;
      font-size: 2em;
      text-align: center;
      color: #fff; /* Change text color */
     

      /* (B3) BORDER */
      border: 1px solid #00e1ff;
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.8);
    }
  </style>
</head>
<body>
  <div class="signboard">ENJOY PANDAGOW </div>
</body>
</html>
