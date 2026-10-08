<?php
include 'config.php';
$query = new Database();
$aboutData = $query->select('about');
$serviceItems  = $query->select('about_ul_items');
$statistics = $query->select('statistics');

// Prepare the about items array
$aboutItems = [];
foreach ($aboutData as $about) {
  $aboutItems[$about['id']] = [
    'title' => $about['title'],
    'p1' => $about['p1'],
    'p2' => $about['p2'],
    'image' => $about['image'],
    'list_items' => []
  ];
}

// Add service items to the about items
foreach ($serviceItems as $item) {
  $aboutItems[$item['about_id']]['list_items'][] = $item['list_item'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <link rel="stylesheet" href="assets\css\leadership.css">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Leadership</title>
  
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="about-page">

  <?php include 'includes/header.php' ?>

  <main class="main">

   <section class="about-section">
        <div class="image-box">
            <img src="assets\img\profile.jpg" alt="Sample Image">
        </div>

        <div class="content-box">
            <h2>Laxman Malla</h2>
            <h6> Chief Executive Officer of Simrik Technology Enterprises</h6>
            <p>
                "Our focus on operational excellence ensures that we consistently deliver on our promises. At Uranus Tech Nepal, we are committed to driving efficiency and fostering innovation across all aspects of our business. By aligning our operations with our clients' goals, we create strategies that not only meet but exceed expectations."
            </p>
        </div>
    </section>


  </main>




  <?php include 'includes/footer.php' ?>


  <!-- Scroll to Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>