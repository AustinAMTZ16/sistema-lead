# MexiClientes (Sistema + APi REST)
# sistema-lead
SISTEMA DE REGISTRO DE CLIENTES


// if ($arregloLogo->num_rows > 0) {
//   echo "<table border='1'>";
//   echo "<tr><th>ID</th><th>Nombre</th><th>Edad</th></tr>";

//   // Recorrer los resultados y mostrar cada fila
//   while ($fila = $arregloLogo->fetch_assoc()) {
//       echo "<tr>";
//       echo "<td>" . $fila["id_empresa"] . "</td>";
//       echo "<td>" . $fila["nombreEmpresa"] . "</td>";
//       echo "<td>" . $fila["dominioEmpresa"] . "</td>";
//       echo "<td>" . $fila["logotipoEmpresa"] . "</td>";
//       echo "<td>" . $fila["id_login"] . "</td>";
//       echo "</tr>";
//   }

//     echo "</table>";
//   } else {
//     echo "No se encontraron resultados.".$usuario = $_SESSION["usuario"];; 
//   }

CRUD DIRECCION PARA POSTMAN TEST


//traer todos GET
http://apirest-php.test/prospecto/seleccionar.php

//trear en espesifico GET
http://apirest-php.test/prospecto/seleccionar.php?idProspecto=1

//agregar POST
http://apirest-php.test/prospecto/agregar.php

//editar PUT
http://apirest-php.test/prospecto/editar.php

//eliminar DELETE
http://apirest-php.test/prospecto/eliminar.php?idProspecto=3