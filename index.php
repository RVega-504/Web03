<!DOCTYPE html>
<html>
    <head>
        <link href="Estilo/CSS.css" rel="stylesheet" type="text/css"/>
        <script src="script.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Validador</title>
    </head>
    <body>
        <div id="divFormulario">
            <form id="formulario" action="" method="get" onsubmit="validar();">
                <h2>Validador de rut</h2><br>
                <label class="mensaje">RUT (Sin puntos)</label><br>
                <input type="number" id="rut" placeholder="Ingrese RUT">
                <label>-</label>
                <select id="dv">
                    <option value="" disabled selected>DV</option>
                    <option value="11">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="k">k</option>
                </select><br>
                <input type="submit" class="boton"><br>
                <label class="mensaje" id="test"></label>
            </form>
        </div>
    </body>
</html>
