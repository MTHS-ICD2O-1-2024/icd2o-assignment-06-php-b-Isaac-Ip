<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Breaking Bad Quotes, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Isaac Ip" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Breaking Bad Quotes, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Breaking Bad Quotes, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/breakingbad.png" alt="Breaking Bad">
      </div>
      <div class="page-content">Random Quote From Breaking Bad</div>
      <br>
      <?php
      // OpenWeatherMap API URL
      $apiUrl = "https://api.breakingbadquotes.xyz/v1/quotes";

      // Fetch the weather data
      $resultJSON = file_get_contents($apiUrl);

      if ($resultJSON === FALSE) {
        // If data fetch fails
        echo "<div class='page-content'>Sorry, an error has occurred. Please try again later.</div>";
        return;
      }

      $jsonData = json_decode($resultJSON, true);

      // Process
      $quote = $jsonData[0]['quote'];
      $author = $jsonData[0]['author'];

      // Output
      echo "<div class='page-content'>";
      echo "<p>Quote: " /". $quote . "/"</p>";
      echo "<p>Author: " . $author . ".</p>";
      echo "</div>";
      ?>
  </div>
  </main>
  </div>
</body>

</html>