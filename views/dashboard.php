<section>
    <div class="dashboard">

        <div class="dashboard__contenido">
            <h1>Nuevos Reportes</h1>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Sede</th>
                            <th>Salón</th>
                            <th>N° Computador</th>
                            <th>Descripción</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($reportes['no-solucionado'])) {
                            foreach ($reportes['no-solucionado'] as $reporte) { ?>
                                <tr>
                                    <td> <?php switch ($reporte->sede) {
                                                case 1:
                                                    echo "Bicentenario";
                                                    break;
                                                case 2:
                                                    echo "Encarnación";
                                                    break;
                                                case 3:
                                                    echo "Casa Obando";
                                                    break;
                                                case 4:
                                                    echo "Mi Vaquita";
                                                    break;
                                            }; ?> </td>
                                    <td><?php echo $reporte->salon; ?></td>
                                    <td><?php echo $reporte->numero_computador; ?></td>
                                    <td><?php echo $reporte->descripcion; ?></td>
                                    <td>
                                        <form method="POST">
                                            <input type="hidden" name="reporte_id" value="<?php echo $reporte->id; ?>">
                                            <input type="hidden" name="tecnico_id" value="<?php echo $_SESSION['id']; ?>">
                                            <button id="btn-terminar" class="btnTerminar">
                                                Terminar Reporte
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="dashboard__contenido">
            <h1>Reportes Finalizados</h1>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Sede</th>
                            <th>Salón</th>
                            <th>N° Computador</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($reportes['solucionado'])) {
                            foreach ($reportes['solucionado'] as $reporte) { ?>
                                <tr>
                                    <td> <?php switch ($reporte->sede) {
                                                case 1:
                                                    echo "Bicentenario";
                                                    break;
                                                case 2:
                                                    echo "Encarnación";
                                                    break;
                                                case 3:
                                                    echo "Casa Obando";
                                                    break;
                                                case 4:
                                                    echo "Mi Vaquita";
                                                    break;
                                            }; ?> </td>
                                    <td><?php echo $reporte->salon; ?></td>
                                    <td><?php echo $reporte->numero_computador; ?></td>
                                    <td><?php echo $reporte->descripcion; ?></td>

                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>