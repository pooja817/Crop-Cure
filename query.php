<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CC Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
   <link href="./blogmaterial/photos/WhatsApp Image 2023-05-08 at 10.46.07 PM.jpeg" rel="icon">

  <link href="blogmaterial/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <link href="blogmaterial/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="blogmaterial/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="blogmaterial/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="blogmaterial/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="blogmaterial/vendor/aos/aos.css" rel="stylesheet">

  <link href="blogmaterial/css/variables.css" rel="stylesheet">
  <link href="blogmaterial/css/main.css" rel="stylesheet">

  <style>
    /* Style the table */
    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
    }

     /* Set the table headers background color */
     th {
      background-color:darkgreen;
      color: #fff;
      font-weight: bold;
    }

    /* Style the table rows */
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    /* Style the table cells */
    td, th {
      padding: 12px;
      text-align: left;
      border: 1px solid #ddd;
    }

    /* Style the table heading */
  
  </style>

</head>

<body>

  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: black;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="background-color: black;" >

      <a href="index.php" class="logo d-flex align-items-center">

        <h1 style="color: green;">CropCure</h1>
      </a>

      <div class="position-relative">

        <a href="#" class="mx-2 js-search-open"><span class="bi-search" style="color: green;"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div>

      </div>

    </div>

  </header>

  <main id="main" style="text-align: center;">

  <?php
  // Connect to the database
  $servername = "localhost";
  $username = "kiranreddy";
  $password = "Kiran@1804";
  $dbname = "dbms";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Query the database
  $sql = "SELECT * FROM queststore";
  $result = $conn->query($sql);
  ?>

  <h1>Query Table</h1>
  <br>

  <!-- Display the table -->
  <table>
    <tr>
      <th>Plant Name</th>
      <th>Symptom</th>
      
    </tr>
    <?php
    if ($result->num_rows > 0) {
      // Output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["plant name"] . "</td>";
        echo "<td>" . $row["symptom"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "0 results";
    }

    // Close the database connection
    $conn->close();
    ?>
  </table>



  </main>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="blogmaterial/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="blogmaterial/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="blogmaterial/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="blogmaterial/vendor/aos/aos.js"></script>
  <script src="blogmaterial/vendor/php-email-form/validate.js"></script>
  <script src="blogmaterial/js/main.js"></script>

</body>

</html>