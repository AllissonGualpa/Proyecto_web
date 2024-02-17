<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Gallery Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .image-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .image-container > div {
      display: flex;
      gap: 20px;
    }

    .image {
      max-width: 300px;
      max-height: 200px;
    }

    .text-container {
      flex: 1;
      max-width: 700px; /* Ancho máximo para el contenedor de texto */
    }

    .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .description {
      font-size: 16px;
      text-align: justify; /* Alinear el texto justificado */
    }
  </style>
</head>

<body>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <i class="bi bi-camera"></i>
        <h1>Reseña Películas</h1>
      </a>
    </div>
  </header>

  <body>
    <div class="image-container">
      <div>
        <div>
          <img src="assets/img/gallery/veronica.jpg" class="img-fluid image" alt="" width="400px" height="500px">
        </div>
        <div class="text-container">
          <h2 class="title">Verónica</h2>
          <p class="description">Verónica es una película de terror española estrenada en 2017 y dirigida por Paco Plaza. Está inspirada en un caso real, 
          el de la joven de 18 años Estefanía Gutiérrez Lázaro, que murió en extrañas circunstancias en el verano de 1991. La investigación posterior, 
          conocida como Expediente Vallecas, fue la primera en España que barajaba circunstancias «paranormales» en torno al caso.
          Para su realización, el director contó con cuatro jóvenes debutantes: Sandra Escacena, Bruna González, Claudia Placer e Iván Chavero, 
          además de la conocida actriz Ana Torrent.</p>
        </div>
      </div>
      <div>
        <div>
          <img src="assets/img/gallery/annabelle.jpg" class="img-fluid image" alt="" width="400px" height="500px">
        </div>
        <div class="text-container">
          <h2 class="title">Annabelle</h2>
          <p class="description">Annabelle es una película de terror sobrenatural estadounidense de 2014, dirigida por John R. Leonetti,
               y escrita por Gary Dauberman. Se trata de un spin-off de la película The Conjuring, siendo además la segunda entrega de 
               The Conjuring Universe. Protagonizada por Annabelle Wallis y Ward Horton, se estrenó el 3 de octubre de 2014 en Estados Unidos.
               Las críticas fueron mayormente negativas, pero esto no impidió que se posicionara en el segundo lugar en su primera semana de estreno.
               Además, recaudó un total de 257 millones de dólares habiendo tenido un presupuesto de $6,5 millones.</p>
        </div>
      </div>
      <div>
        <div>
          <img src="assets/img/gallery/el aro.jpg" class="img-fluid image" alt="" width="400px" height="500px">
        </div>
        <div class="text-container">
          <h2 class="title">El Aro</h2>
          <p class="description">The Ring es una película estadounidense de terror psicológico sobrenatural, estrenada en 2002, 
              dirigida por Gore Verbinski a partir de un guion de Ehren Kruger y protagonizada por Naomi Watts, Martin Henderson, 
              Brian Cox, David Dorfman y Daveigh Chase. Se trata de un remake occidentalizado de la película de terror japonesa de 1998, 
              Ringu de Hideo Nakata, que a su vez se basó en la novela del mismo nombre de Kōji Suzuki (que también ayudó a coescribir las 
              dos versiones de la película). La trama de la película se centra en Rachel Keller, una periodista que debe encontrar una 
              manera de escapar de la muerte después de ver una cinta maldita que aparentemente mata al espectador siete días después de 
              verla.</p>
        </div>
      </div>
    </div>

  </body>

</html>
