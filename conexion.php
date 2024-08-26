<?php

echo "HOLA";

// Configuración de conexión
$database = "bludb";
$hostname = "c7702170-2522-4ac8-821f-d35f5032d9cf.c3n41cmd0nqnrk39u98g.private.databases.appdomain.cloud";
$port = 30564;
$user = "user_tone2";
$password = "DBTone.20230728";
$connectionString = "DATABASE=$database;HOSTNAME=$hostname;PORT=$port;PROTOCOL=TCPIP;UID=$user;PWD=$password;SECURITY=SSL;";

try {
    // Probar la conexión
    $conn = db2_connect($connectionString, '', '');
    if ($conn) {
        echo "Conexión exitosa.\n";
    } else {
        throw new Exception("Error al conectar a la base de datos: " . db2_conn_errormsg());
    }
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
?>
