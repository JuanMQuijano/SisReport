<section>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr);">
        <div>
            <h1>Nuevos Reportes</h1>

            <div style="display: flex;">

                <?php
                if (isset($reportes['no-solucionado'])) {
                    foreach ($reportes['no-solucionado'] as $reporte) { ?>
                        <div>
                            <h1>Sede:
                                <?php switch ($reporte->sede) {
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
                                }; ?> - Salón: <?php echo $reporte->salon; ?></h1>
                            <p>Computador Número: <?php echo $reporte->numero_computador; ?></p>
                            <p>descripcion:
                                <br>
                                <?php echo $reporte->descripcion; ?>
                            </p>

                            <form method="POST">
                                <input type="hidden" name="reporte_id" value="<?php echo $reporte->id; ?>">
                                <input type="hidden" name="tecnico_id" value="<?php echo $_SESSION['id']; ?>">
                                <button id="btn-terminar">
                                    Terminar Reporte
                                </button>
                            </form>
                        </div>
                <?php }
                } ?>
            </div>
        </div>

        <div>
            <h1>Reportes Finalizados</h1>

            <div style="display: flex; gap: 5rem;">
                <?php
                if (isset($reportes['solucionado'])) {
                    foreach ($reportes['solucionado'] as $reporte) { ?>
                        <div>
                            <h1>Sede:
                                <?php switch ($reporte->sede) {
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
                                }; ?> - Salón: <?php echo $reporte->salon; ?></h1>
                            <p>Computador Número: <?php echo $reporte->numero_computador; ?></p>
                            <p>descripcion:
                                <br>
                                <?php echo $reporte->descripcion; ?>
                            </p>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</section>