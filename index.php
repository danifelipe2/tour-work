<php>
</php>


<!DOCTYPE html>
<html Lang="es">
<head>
 <Meta chartset="UTF-8">
 <Meta name="viewport" Content="width=device-width, Initial-scale=1.0">
 <title>tour work</title>
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ====== Header ====== */
    header {
      background: #27A3F5;
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 22px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      color: #FF0000;
    }

    /* ====== Contenido principal ====== */
    main {
      flex: 1;
      padding: 40px;
      background: #FFFFFF;
    }

    main h2 {
      margin-bottom: 15px;
    }

    /* ====== Footer ====== */
    footer {
      background: #FF0000;
      color: white;
      text-align: center;
      padding: 15px 0;
    }
  </style>
</head>
<body>
<?php include("menu.php"); ?>
	

	<main>
	<h1>Bienvenido a mi sitio web</h1>
	<p>esta es el inicio de esta pagina</p>
	</main>

	<footer>
	<p>realizado por daniel felipe londoño </p>
	</footer>
</body>
</html>
