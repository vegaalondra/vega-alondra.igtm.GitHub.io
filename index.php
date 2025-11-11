<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo JS</title>
</head>
<body>
    <h1>Hola Mundo con JavaScript</h1>
    <button id="saludar">Haz clic aquí</button>

    <script>
        // Mostrar mensaje en la consola
        console.log("Hola Mundo desde la consola");

        // Mostrar mensaje en la página al hacer clic
        const boton = document.getElementById("saludar");
        boton.addEventListener("click", function() {
            alert("¡Hola Mundo desde JavaScript!");
        });
    </script>
</body>
</html>
