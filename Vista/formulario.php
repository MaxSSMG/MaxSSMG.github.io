<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./Controlador/controlador.php" method="post">
        Elegir una BD:<br>
        <select name="bd" id="selBd">
            <?php
                $bbdd=bbdd();
                for($i=0; $i<count($bbdd); $i++) {
                    echo "<option value =".$bbdd[$i].">".$bbdd[$i]."</option>";
                }
            ?>
            <br><br>
            Consulta a realizar: <br>
            <textarea name="consulta" id="consulta"></textarea>
            <input type="submit" name="continuar" value="continuar">
        </select>
    </form>
</body>
</html>