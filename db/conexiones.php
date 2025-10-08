<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour_work";

// crea coneción
$conn = new mysqli($servername, $username, $password, $dbname);

// verificar conexión
if ($conn->connect_error){die("conexion fallida: " .$conn->connect_error);}

?>