<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos Toxic Shein | Repuestera La Nueva</title> 
    <style>
        body {
            background-color: #4c4b4b; 
            font-family: 'Poppins', sans-serif; 
            margin: 0;
            padding: 0;
        }

        .barra {
            background-color: #111; 
            color: white;
            padding: 6px 0;
            font-size: 14px;
            box-shadow: 0 2px 10px rgba(255, 0, 0, 0.3); 
        }

        .encabezado {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-image: url(/imagenes/TOXIC.jpeg);
            background-size: cover; 
            padding: 30px 20px;
            border-bottom: 3px solid red;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6); 
        }

        .logo img {
            display: block;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.3); 
        }

        .titulo {
            color: beige;
            font-size: 55px;
            font-weight: 700;
            text-shadow: 2px 2px 6px rgba(255, 0, 0, 0.4); 
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover {
            color: red; 
            text-shadow: 0 0 5px red; 
        }

        .texto-principal {
            color: beige;
            font-size: 36px;
            text-align: center;
            margin: 50px auto;
            max-width: 1000px;
            line-height: 1.5;
            background-color: rgba(0, 0, 0, 0.3); 
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.2); 
        }

        .galeria img {
            width: 450px;
            height: 400px;
            margin: 10px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
            transition: transform 0.3s;
        }

        .galeria img:hover {
            transform: scale(1.03); 
        }

        .texto-final {
            color: beige;
            font-size: 32px;
            text-align: center;
            margin: 40px auto;
            max-width: 900px;
            line-height: 1.4;
        }

        footer {
            background-color: #000;
            color: beige;
            font-size: 24px;
            border-top: 3px solid red; 
            padding-top: 20px;
            box-shadow: 0 -4px 10px rgba(255, 0, 0, 0.3); 
        }

        .redes img {
            width: 90px;
            height: 75px;
            margin: 16px;
            border-radius: 10px; 
            transition: transform 0.3s;
        }

        .redes img:hover {
            transform: scale(1.1);
        }

        .pagos img {
            width: 60px;
            margin: 0 10px;
            filter: grayscale(20%); 
        }
    </style>
</head>
<body>
    <div class="barra">
        <marquee behavior="scroll" direction="left" scrollamount="5">
            ⭐ Productos exclusivos de la línea Toxic Shein — ¡Disponibles en Repuestera La Nueva! ⭐ <!-- Cambié texto para hacerlo más profesional -->
        </marquee>
    </div>
    <div class="encabezado">
        <div class="logo">
            <img src="/imagenes/logorepuestera2.jpeg" width="130" height="100">
        </div>
        <div class="titulo">Repuestera La Nueva</div> 
        <div class="menu">
            <a href="/paginas/administrador.php">Administrador</a>
            <a href="/paginas/Nosotros.html">Nosotros</a>
            <a href="/paginas/productos.html">Volver</a>
            <a href="/paginas/principal.html">Inicio</a>
            <a href="/paginas/contacto.html">Ubicación</a> <!-- Corregí tilde -->
        </div>
    </div>
    <div class="texto-principal">
        <p>Conocé los productos más destacados de la línea <b>Toxic Shein</b> que ofrecemos en Repuestera La Nueva. Calidad, diseño y estilo únicos en cada pieza.</p> <!-- Reescribí el texto para hacerlo más profesional -->
    </div>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=repuestera;charset=utf8", "root", "");
    $imagenes = $pdo->query("SELECT * FROM toxicshein ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <center>
        <div class="galeria" style="color: aliceblue;">
            <?php foreach ($imagenes as $img): ?>
                <img src="<?= htmlspecialchars($img['ruta_imagen']) ?>" width="450" height="400" style="margin: 10px;border-radius: 16px;">
            <?php endforeach; ?>
        </div>
    </center>
    <div class="texto-final">
        <p>Si querés conocer más sobre nuestros productos, podés acercarte a nuestra sucursal o contactarnos a través de nuestras redes.</p> <!-- Reescribí texto final -->
    </div>
</body>
<footer>
    <center>
        <b>Seguinos en nuestras redes</b><br>
        <div class="redes">
            <a href="https://www.instagram.com/lanueva.repuestera">
                <img src="/imagenes/instagram.jpeg" alt="Ir a Instagram">
            </a>
            <a href="https://www.facebook.com/La_Nueva_Repuestera">
                <img src="/imagenes/facebook.jpeg" alt="Ir a Facebook">
            </a>
            <a href="tel:3888653765">
                <img src="/imagenes/contacto.jpeg" alt="Llamar a contacto">
            </a>
        </div>
    </center>
    <div style="text-align:center; margin-top: 20px;">
        <p style="font-size: 20px;">Medios de pago disponibles:</p> <!-- Cambié texto -->
        <div class="pagos">
            <img src="/imagenes/bbva.jpeg" alt="Visa">
            <img src="/imagenes/MasterCard.jpeg" alt="Mastercard">
            <img src="/imagenes/mercadoPago.jpeg" alt="Mercado Pago">
            <img src="/imagenes/efectivo.jpeg" alt="Efectivo">
        </div>
    </div>
    <div style="text-align:center; margin:20px 0;">
        <p style="font-size: 20px; color: #ddd;">Más de 20 años ofreciendo repuestos de calidad.</p>
        <p style="font-size: 20px; color: #ddd;">Envíos a todo el país y atención personalizada.</p>
    </div>
    <div style="border-top: 1px solid #444; padding-top: 10px; font-size: 14px; color: #aaa; text-align:center;">
        <p>© 2025 Repuestera La Nueva | Desarrollado por <strong>Gaspar Gastón</strong></p>
    </div>
</footer>
</html>