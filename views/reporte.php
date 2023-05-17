<main class="contenedor-sm">
    <form class="formulario" method="post">
        <h1>Realiza tu Reporte!</h1>

        <div class="campo">
            <label for="cc_est">Número de Identificación</label>
            <input type="text" name="cc_est" id="cc_est" placeholder="Ingresa tu número de identificación">
        </div>

        <div class="campo">
            <label for="sede">Sede</label>
            <select name="sede" id="sede">
                <option value="1">Bicentenario</option>
                <option value="2">Encarnación</option>
                <option value="3">Casa Obando</option>
                <option value="4">Mi Vaquita</option>
            </select>
        </div>

        <div class="campo">
            <label for="salon">Salón</label>
            <select name="salon" id="salon">
            </select>
        </div>

        <div class="campo">
            <label for="numero_computador">Número Computador</label>
            <select name="numero_computador" id="numero_computador">
            </select>
        </div>

        <div class="campo">
            <label for="descripcion">Descripción del Problema</label>
            <textarea name="descripcion" id="descripcion" placeholder="Describe el Problema"></textarea>
        </div>

        <div class="acciones">
            <button type="submit" class="btn">Enviar Reporte</button>
        </div>
    </form>
</main>