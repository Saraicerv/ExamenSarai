<!DOCTYPE html>
<html>

<head>
    <title>Examen Sarai Cervantes Robles</title>
</head>

<body>

<h2>ASCII Table</h2>

<form onsubmit="return false;">
    <!-- Evitar que el formulario se envíe al presionar Enter -->
    <label for="number">Ingrese un número del 1 al 20:</label>
    <input type="number" id="number" min="1" max="20" required>
    <!-- Cambiado type de button a submit para usar la validación del formulario -->
    <input type="submit" value="Mostrar Carácter ASCII" onclick="showAsciiCharacter()">
</form>

<p id="result"></p>

<script>
    function showAsciiCharacter() {
        var inputNumber = document.getElementById("number").value;
        var decimalValue = parseInt(inputNumber) + 31; // Ajustar el rango a partir del espacio (32)

        if (decimalValue >= 32 && decimalValue <= 126) {
            var asciiCharacter = String.fromCharCode(decimalValue);
            document.getElementById("result").innerHTML = "El carácter ASCII correspondiente es: " + asciiCharacter;
        } else {
            document.getElementById("result").innerHTML = "Por favor, ingrese un número del 1 al 20.";
        }
    }

    // Agregado el evento submit al formulario para llamar a la función showAsciiCharacter()
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault(); // Evitar el envío del formulario
        showAsciiCharacter();
    });
</script>

</body>

</html>
