<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'contact_form') or die('connection failed');

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if ($insert) {
      $message[] = 'Rendez-vous pris avec succès !';
   } else {
      $message[] = 'Prise de rendez-vous échouée';
   }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="./images/Cartoon-tooth-and-toothbrush-on-transparent-background-PNG.png">
   <title>Dental Care</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <header class="header fixed-top">

      <div class="container">

         <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">dental<span>Care.</span></a>

            <nav class="nav">
               <a href="#home">Accueil</a>
               <a href="#about">à propos</a>
               <a href="#services">services</a>
               <a href="#reviews">commentaires</a>
               <a href="#contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">prendre un rendez-vous</a>

            <div id="menu-btn" class="fas fa-bars"></div>

         </div>

      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="container">

         <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
               <h3>Soins dentaires à vie.</h3>
               <p>Vous faites un beau sourire une réalité.</p>
               <a href="#contact" class="link-btn">Prendre un rendez-vous</a>
            </div>
         </div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <div class="container">

         <div class="row align-items-center">

            <div class="col-md-6 image">
               <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
               <span>à propos de nous</span>
               <h3>De vrais soins de santé pour votre famille</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
               <a href="#contact" class="link-btn">Prendre un rendez-vous</a>
            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading">Nos services</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/icon-1.svg" alt="">
            <h3>Spécialiste de l'alignement</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
         </div>

         <div class="box">
            <img src="images/icon-2.svg" alt="">
            <h3>Dentisterie cosmétique</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
         </div>

         <div class="box">
            <img src="images/icon-3.svg" alt="">
            <h3>Experts en hygiène bucco-dentaire</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
         </div>

         <div class="box">
            <img src="images/icon-4.svg" alt="">
            <h3>Spécialiste des canaux radiculaires</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
         </div>

         <div class="box">
            <img src="images/icon-5.svg" alt="">
            <h3>Consultation dentaire en direct</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
         </div>

         <div class="box">
            <img src="images/icon-6.svg" alt="">
            <h3>Inspection de la cavité</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- process section starts  -->

   <section class="process">

      <h1 class="heading">Processus de travail</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/process-1.png" alt="">
            <h3>Dentisterie cosmétique</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

         <div class="box">
            <img src="images/process-2.png" alt="">
            <h3>Dentisterie pédiatrique</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

         <div class="box">
            <img src="images/process-3.png" alt="">
            <h3>Implants dentaires</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
         </div>

      </div>

   </section>

   <!-- process section ends -->

   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading">Clients satisfaits</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
         </div>

         <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
            <span>satisfied client</span>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading">Prendre un rendez-vous</h1>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<p class="message">' . $message . '</p>';
            }
         }
         ?>
         <span>votre nom :</span>
         <input type="text" name="name" placeholder="enter your name" class="box" required>
         <span>votre adresse-email :</span>
         <input type="email" name="email" placeholder="enter your email" class="box" required>
         <span>votre numéro :</span>
         <input type="number" name="number" placeholder="enter your number" class="box" required>
         <span>date de rendez-vous :</span>
         <input type="datetime-local" name="date" class="box" required>
         <input type="submit" value="prendre un rendez-vous" name="submit" class="link-btn">
      </form>

   </section>

   <!-- contact section ends -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>numéro de téléphone</h3>
            <p>+33-03-00-00-00-00</p>
            <p>+33-03-00-00-00-00</p>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>notre addresse</h3>
            <p>4 Rue du Dôme - 67000 Strasbourg</p>
         </div>

         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Heures d'ouverture</h3>
            <p>07h:00 à 23h:00</p>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>adresse-email</h3>
            <p>metazo0412@gmail.com</p>
            <p>metambp5@gmail.com</p>
         </div>

      </div>

      <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>MED DEV</span> </div>

   </section>

   <!-- footer section ends -->










   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>