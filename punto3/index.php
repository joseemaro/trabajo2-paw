<html>
    <body>
        <form action="validaciones.php" method="get">
            Nombre: <input type="text" name="nombre" minlength="3" maxlength="30" required pattern="[A-Za-z]+"><br>
            Email:  <input type="email" name="email" required><br>
            Telefono: <input type="tel" name="telefono" required><br>
            Edad: <input type="text" name="edad" maxlength="2" max="99" ><br>
            Talla de calzado: <input type="text" name="talla" maxlength="2"><br>
            Altura : <input type="range" name="altura" min="100" max="200" step="10" value="150" list="tickmarks"><br>
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
            Fecha de nacimiento: <input type="date" name="fecha_nacimiento" required><br>
            Color de pelo: <select name="color">
            <option>morocho</option>
            <option>rubio</option>
            <option>colorado</option>
            <option>castanio</option>
            </select> <br>
            Fecha de turno: <input type="date" name="fecha_turno"><br>
            Horiario de turno(hh:min): <input type="time" name="horario_turno" required><br>
            <input type="submit" value="Enviar" />
            <input type="reset" value="Limpiar"  />          
        </form>
        
    </body>
</html>


