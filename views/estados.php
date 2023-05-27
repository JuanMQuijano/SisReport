<main class="contenedor">
    <section class="formulario__container">
        <form class="formulario__consultar" method="post" id="formulario-estados">
            <h1>Consulta tu reporte!</h1>

            <div class="formulario__identificacion">
                <label for="cc_est">Número de Identificación</label>
                <input autofocus type="text" name="cc_est" id="cc_est" placeholder="Ingresa tu número de identificación" autoComplete='off'>
            </div>

            <div class="formulario__btn">
                <button type="submit" class="btn">Consultar</button>
            </div>
        </form>

        <div class="resultado">
            <table>
                <thead>
                    <tr>
                        <th>Numero Computador</th>
                        <th>Estado Computador</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Reparado</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>En Proceso</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>
</main>