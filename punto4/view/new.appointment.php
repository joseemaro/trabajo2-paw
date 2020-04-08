<!doctype html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de turnos</title>
    </head>
    <body>
    <header>
        <nav>
            <ul>
                <li> <a href="/">Inicio</a> </li>
                <li> <a href="/new_appointment">Solicitar turno</a> </li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="/save_appointment" method="post" enctype="multipart/form-data">
            <label> Nombre: <input type="text" name="nombre" minlength="3" maxlength="30" required pattern="[A-Za-z]+"> </label><br>
            <label> Email:  <input type="email" name="email" required> </label><br>
            <label> Telefono: <input type="tel" name="telefono" required> </label><br>
            <label> Edad: <input type="text" name="edad" maxlength="2" max="99"> </label><br>
            <label> Talla de calzado: <input type="text" name="talla" maxlength="2"></label><br>
            <label> Altura : <input type="range" name="altura" min="100" max="200" step="10" value="150" list="tickmarks"> </label><br>
            <datalist id="tickmarks">
                <option value="100" label="1mts">
                <option value="110">
                <option value="120">
                <option value="130">
                <option value="140">
                <option value="150" label="1,50">
                <option value="160">
                <option value="170">
                <option value="180">
                <option value="190">
                <option value="200" label="2mts">
            </datalist>
            <label>Fecha de nacimiento: <input type="date" name="fecha_nacimiento" required></label><br>
            <label>Color de pelo:
                <select name="color">
                    <option>morocho</option>
                    <option>rubio</option>
                    <option>colorado</option>
                    <option>castanio</option>
                </select> </label><br>
            <label> Fecha de turno: <input type="date" name="fecha_turno" required> </label><br>
            <label> Horiario de turno(hh:min): <input type="time" name="horario_turno" required> </label><br>
            <label> Adjunto <input type="file" name="adjunto" accept="image/jpeg, image/x-png"> </label><br>
            <input type="submit" value="Enviar" />
            <input type="reset" value="Limpiar"  />
        </form>
    </main>
    </body>
</html>
