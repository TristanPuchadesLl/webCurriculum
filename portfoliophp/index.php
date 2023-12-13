<?php

/*En mi base de datos funciona correctamente*/
 $servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
$usuario = "userportfolio"; // El usuario que acabamos de crear en la base de datos 
$contraseña = "portfolio"; // La contraseña del usuario que utilizaremos 
$BD = "userportfolio"; // El nombre de la base de datos 

    $conexion = new mysqli($servidor, $usuario, $contraseña, $BD);

    if ($conexion->connect_error) {
        die("No pudo conectarse: " . $conexion->connect_error);
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeoTour</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div id="brand">
            <a href="/" class="RinconesValencianos">RinconesValencianos</a>
        </div>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Conócenos</a></li>
            <li><a href="portfolio.html">Nosotros</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="#">Signup</a></li>
        </ul>
    </header>
    
    <script>
        function toggleMenu(menu) {
            menu.classList.toggle('open');
        }
    </script>
    <main>
        <div id="carrusel">
            <button id="anterior" class="boton-navegacion">Anterior</button>
            <img id="carrusel-img" src="img/ayunt.jpg" alt="IMG1">
            <button id="siguiente" class="boton-navegacion">Siguiente</button>
        </div>
        <div id="lugares-de-interes">
            <h2>Lugares de Interés</h2>
            <div class="caja-lugar">
                <img src="img/Arts26Ciencias33.jpg" alt="Lugar 1">
                <h3>Ciudad de las artes y las ciencias</h3>
                <p>Este complejo arquitectónico futurista es un símbolo de la modernidad de Valencia. Incluye el Museo
                    de las Ciencias, el Oceanografico, el Hemisférico y otros edificios impresionantes, todos diseñados
                    por Santiago Calatrava.</p>
            </div>
            <div class="caja-lugar">
                <img src="img/LonjaSeda.jpg" alt="Lugar 2">
                <h3>La Lonja de la Seda</h3>
                <p>Este magnífico edificio gótico es un Patrimonio de la Humanidad de la UNESCO y una joya
                    arquitectónica de Valencia. La Lonja sirvió como centro de comercio de la seda en el siglo XV y
                    muestra una arquitectura impresionante y detalles ornamentales.</p>
            </div>
            <div class="caja-lugar">
                <img src="img/barrioCarmen.jpg" alt="Lugar 3">
                <h3>Barrio del Carmen</h3>
                <p> Este histórico barrio en el centro de Valencia es conocido por sus calles estrechas, edificios
                    antiguos y ambiente bohemio. Es un lugar perfecto para explorar arte callejero, tiendas de diseño y
                    bares con encanto.</p>
            </div>
            <div class="caja-lugar">
                <img src="img/mercadocentral.jpg" alt="Lugar 4">
                <h3>Mercado Central</h3>
                <p>Este mercado cubierto es uno de los mercados más grandes de Europa y ofrece una impresionante
                    variedad de productos locales frescos, desde frutas y verduras hasta pescado y carnes. Es un lugar
                    vibrante donde puedes sumergirte en la cultura culinaria valenciana.</p>
            </div>
            <div class="caja-lugar">
                <img src="img/turia.jpg" alt="Lugar 5">
                <h3>Jardín de Turia</h3>
                <p>Este hermoso parque fluvial se encuentra en el antiguo cauce del río Turia y ofrece un oasis verde en
                    el corazón de la ciudad. Puedes pasear, andar en bicicleta, hacer picnic o simplemente relajarte en
                    sus jardines y disfrutar de la naturaleza.</p>
            </div>
            <div class="caja-lugar">
                <img src="img/albufera.jpg" alt="Lugar 6">
                <h3>La Albufera</h3>
                <p>Este impresionante humedal, ubicado a pocos kilómetros al sur de la ciudad de Valencia, es un rincón
                    natural de gran belleza e importancia ecológica. Con sus 21,120 hectáreas de lagunas, canales y
                    marismas rodeados de arrozales y bosques, la Albufera es un refugio para una variada fauna acuática
                    y aves migratorias.</p>
            </div>
        </div>
        <div id="conocenos">
            <!-- Título de "Conócenos" -->
            <h2>Conócenos</h2>  
            <!-- Contenedor de Formulario y Mapa -->
            <div id="formulario-y-mapa">
                <!-- Formulario -->
                <div id="formulario">
                    <h3>Contacto</h3>
                    <form action="#" method="post">
                        <div class="input-container">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>               
                        <div class="input-container">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" id="apellidos" name="apellidos" required>
                        </div>
                
                        <div class="input-container">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" name="email" required>
                        </div>               
                        <div class="input-container">
                            <label for="mensaje">Mensaje:</label>
                            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                        </div>                
                        <button type="submit">Enviar</button>
                    </form>
                </div>
                <!-- Mapa -->
                <div id="mapa">
                    <h3>Mapa</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.542966481931!2d-0.46173102403173977!3d39.54736307159262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd605bc401aec5b3%3A0x8968665575dd9e1a!2sCampus%20C%C3%A1mara%20FP!5e0!3m2!1ses!2ses!4v1695726317452!5m2!1ses!2ses" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                       </div>
    </main>
    <footer>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium qui dignissimos, facere pariatur quae earum
        reprehenderit suscipit consectetur fuga maxime quaerat hic a voluptatum laborum magni laboriosam eveniet
        deserunt quasi.
    </footer>
    <script>
        var currentImageIndex = 0;
        var images = [
            "img/ayunt.jpg",
            "img/artes.jpg",
            "img/torres.jpg",
            "img/elalbir.jpg"
        ];
        var carruselImg = document.getElementById("carrusel-img");
        var carrusel = document.getElementById("carrusel"); // Elemento del carrusel
        var btnAnterior = document.getElementById("anterior");
        var btnSiguiente = document.getElementById("siguiente");
        var isTransitioning = false; // Variable para rastrear si está en curso una transición

        function mostrarSiguienteImagen() {
            if (isTransitioning) return; // Evitar cambios mientras esté en curso una transición
            isTransitioning = true;

            currentImageIndex = (currentImageIndex + 1) % images.length;

            // Cambia el fondo del carrusel al color deseado
            carrusel.style.backgroundColor = "#FAEBD7";

            // Espera un breve momento antes de cambiar la imagen
            setTimeout(function () {
                // Cambia la opacidad de la imagen para lograr una transición suave de 0.5 segundos
                carruselImg.style.transition = "opacity 0.5s ease-in-out";
                carruselImg.style.opacity = 0;
            }, 10); // Espera 10 milisegundos

            carruselImg.addEventListener("transitionend", function () {
                // Este evento se disparará cuando termine la transición de opacidad
                carruselImg.src = images[currentImageIndex];
                carruselImg.style.opacity = 1;

                // Restablece el fondo del carrusel
                carrusel.style.backgroundColor = "";

                isTransitioning = false; // Restablecer la bandera después de la transición
                carruselImg.style.transition = ""; // Restablecer la propiedad de transición
                reiniciarTemporizador();
            }, { once: true }); // { once: true } garantiza que el evento solo se ejecute una vez
        }

        function mostrarImagenAnterior() {
            if (isTransitioning) return; // Evitar cambios mientras esté en curso una transición
            isTransitioning = true;

            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;

            // Cambia el fondo del carrusel al color deseado
            carrusel.style.backgroundColor = "#FAEBD7";

            // Espera un breve momento antes de cambiar la imagen
            setTimeout(function () {
                // Cambia la opacidad de la imagen para lograr una transición suave de 0.5 segundos
                carruselImg.style.transition = "opacity 0.5s ease-in-out";
                carruselImg.style.opacity = 0;
            }, 10); // Espera 10 milisegundos

            carruselImg.addEventListener("transitionend", function () {
                // Este evento se disparará cuando termine la transición de opacidad
                carruselImg.src = images[currentImageIndex];
                carruselImg.style.opacity = 1;

                // Restablece el fondo del carrusel
                carrusel.style.backgroundColor = "";

                isTransitioning = false; // Restablecer la bandera después de la transición
                carruselImg.style.transition = ""; // Restablecer la propiedad de transición
                reiniciarTemporizador();
            }, { once: true }); // { once: true } garantiza que el evento solo se ejecute una vez
        }

        function reiniciarTemporizador() {
            // Detener el temporizador actual si existe
            if (intervalId) {
                clearInterval(intervalId);
            }
            // Iniciar un nuevo temporizador
            intervalId = setInterval(mostrarSiguienteImagen, 8000);
        }

        btnAnterior.addEventListener("click", function () {
            mostrarImagenAnterior();
            reiniciarTemporizador(); // Reiniciar el temporizador al hacer clic en "Anterior"
        });

        btnSiguiente.addEventListener("click", function () {
            mostrarSiguienteImagen();
            reiniciarTemporizador(); // Reiniciar el temporizador al hacer clic en "Siguiente"
        });

        // Mostrar la primera imagen al cargar la página y comenzar el temporizador
        carruselImg.src = images[currentImageIndex];
        intervalId = setInterval(mostrarSiguienteImagen, 3000);
    </script>

</body>

</html>