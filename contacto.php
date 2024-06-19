<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Molcajete" />
    <meta name="description" content="">

    <meta name="Keywords" content="">

    <meta name="robots" content="all" />
    <meta property="og:title" content="HANNOVER MEDICAL" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="img/icono.png" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:site_name" content="HANNOVER MEDICAL" />
    <meta name="msapplication-TileColor" content="rgb(16, 48, 55)">
    <meta name="theme-color" content="rgb(16, 48, 55)">
    <link rel="canonical" href="">

    <?php include 'elementos/estilos.php' ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CommunityHealth",
            "name": "HANNOVER MEDICAL",
            "image": "https://audiologiaintegral.com.mx/img/logo.png",
            "@id": "",
            "url": "https://audiologiaintegral.com.mx/",
            "telephone": "7531394249",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Mariano Matamoros 158",
                "addressLocality": "Lázaro Cárdenas",
                "postalCode": "60950",
                "addressCountry": "MX"
            },
            "sameAs": [
                "https://www.facebook.com/apoyosauditivosintegrales",
                "https://www.instagram.com/audiologiaintegrallzc"
            ]
        }
    </script>

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>HANNOVER MEDICAL</title>
</head>

<body>


    <?php include 'elementos/whats.php' ?>

    <!-- <div class="loader__screen" id="loader">
    <div class="heartbeatloader">
      <svg class="svgdraw" width="100%" height="100%" viewBox="0 0 150 400" xmlns="http://www.w3.org/2000/svg">
        <path class="path" d="M 0 200 l 40 0 l 5 -40 l 5 40 l 10 0 l 5 15 l 10 -140 l 10 220 l 5 -95 l 10 0 l 5 20 l 5 -20 l 30 0" fill="transparent" stroke-width="4" stroke="black"></path>
      </svg>
      <div class="innercircle"></div>
      <div class="outercircle"></div>
    </div>

  </div> -->

    <?php include 'elementos/header.php' ?>
    <main>

        <section id="contacto">
            <div class="container">
                <div class="left">
                    <h2>¿Tienes alguna
                        pregunta?</h2>

                    <p>Llena el siguiente formulario para ponerte en contacto con nuestro equipo y en breve estaremos respondiendo tu solicitud:</p>

                    <form action="">
                        <input type="text" name="name" id="name" placeholder="Nombre" required>
                        <input type="tel" name="phone" id="phone" placeholder="Telefono" required>
                        <input type="email" name="email" id="email" placeholder="Correo" required>
                        <input type="text" name="especialidad" id="especialidad" placeholder="Especialidad" required>
                        <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                        <button type="submit" class="button"><i class="fas fa-star"></i>&nbsp; Enviar</button>
                    </form>

                </div>
                <div class="right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.91400559884!2d-90.52115172489377!3d14.603974385882749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a37dcbfc9779%3A0xd2c66c88edb69ce5!2sDiagnostico%20Profesional%20Zona%20Medica!5e0!3m2!1ses-419!2smx!4v1718753683945!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

    </main>

    <?php include 'elementos/footer.php' ?>
</body>
<script src="js/loader.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</html>