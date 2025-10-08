<?php
// incluir la conexión
include("db/conexiones.php");

// validar que el formato fue enviado
if ($_SERVER['REQUEST_METHOD']== "POST") {
  $nombre = $_POST["nombre"];
  $correo = $_POST["email"];
  $telefono = $_POST["telefono"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];

  // prepara consulta (sql injection seguro)
    $stmt = $conn->prepare("INSERT INTO formulario (nombre, correo, telefono, asunto, mensaje) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $correo, $telefono, $asunto, $mensaje);

    if ($stmt->execute()) {
      $msg = "✅ Tu mensaje se envió correctamente.";
      echo "<script>document.addEventListener('DOMContentLoaded', function(){ var m = " . json_encode($msg) . ";
      var d = document.createElement('div');
      d.textContent = m;
      Object.assign(d.style, {position:'fixed', left:'50%', top:'20px', transform:'translateX(-50%)', background:'#1f2937', color:'#fff', padding:'12px 18px', borderRadius:'6px', zIndex:9999, fontSize:'16px', boxShadow:'0 2px 10px rgba(0,0,0,0.2)'});
      document.body.appendChild(d);
      setTimeout(function(){
        try { window.close(); } catch(e) {}
        setTimeout(function(){
        if (!window.closed) { window.location = 'Inicio.php'; }
        }, 200);
      }, 3000);
      });</script>";
    } else {
      $err = "❌ Error: " . $stmt->error;
      echo "<script>document.addEventListener('DOMContentLoaded', function(){ var m = " . json_encode($err) . ";
      var d = document.createElement('div');
      d.textContent = m;
      Object.assign(d.style, {position:'fixed', left:'50%', top:'20px', transform:'translateX(-50%)', background:'#7f1d1d', color:'#fff', padding:'12px 18px', borderRadius:'6px', zIndex:9999, fontSize:'16px', boxShadow:'0 2px 10px rgba(0,0,0,0.2)'});
      document.body.appendChild(d);
      setTimeout(function(){
        try { window.close(); } catch(e) {}
        setTimeout(function(){
        if (!window.closed) { window.location = 'Inicio.php'; }
        }, 200);
      }, 3000);
      });</script>";
    }
    
      // code...
    }


?>


<!DOCTYPE html>
<html Lang="es">
<head>
 <Meta chartset="UTF-8">
 <Meta name="viewport" Content="width=device-width, Initial-scale=1.0">
 <title>Pagina contacto de tour work</title>
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
      background: #0909E3;
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
    <div class="contact-container">
      <h2>contacto</h2>
	
      <!--formulario: ajunta action y method según tu backend -->
      <form action="contacto.php" method="post" novalidate>
        <div class="form-grid">
          <div class="form-group">
            <label for="nombre">nombre completo</label">
            <input id="nombre" name="nombre" type="text"placehoder="tu nombre" required>
          </div>

         <div class="form-group">
            <label for="email">correo eletronico</label>
            <input id="email"name="email" type="email" placeholder="tucorreo@ejemplo.com" required >
         </div>

         <div class="form-group">
            <label for="telefono">teléfono (opcional)</label>
            <input id="telefono" type="text" name="teléfono" placeholder="+34 600 000 000">
         <div>

          <div class="form-group">
            <label for="asunto">asunto</label>
            <input id="asunto" name="asunto" type="text"placehoder="breve resumen" required>
          </div>

          <div class="form-group" style="grid-column: 1/ -1;">
            <label for="mensaje"> mensaje</label>
            <textarea id="mensaje" name="mensaje" placeholder="escribe tu mensaje..." required></textarea>
            <div class="hint">máximo 2000 caracteres.</div>
           </div>

           <div class="action">
              <button type="reset" class="btn btn-secondary">limpiar</button>
              <button type="submit" class="btn btn-primary">enviar mensaje</button>
            <div>
          </form>
        <div>
	</main>

	<footer>
	<p>realizado por daniel felipe londoño</p>
	</footer>
</body>
</html>
