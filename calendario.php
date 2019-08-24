<?php include_once 'includes/templates/header.php'; ?>

        <section class="seccion contenedor">
          <h2>Calendario de eventos</h2>

          <?php
            try {
              require_once('includes/functions/db_connection.php');
              $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
              $sql .= "FROM `eventos` ";
              $sql .= "INNER JOIN `categoria_evento` ";
              $sql .= "ON eventos.id_cat_evento=categoria_evento.id_categoria ";
              $sql .= "INNER JOIN `invitados` ";
              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
              $sql .= "ORDER BY `evento_id` ";
              $resultado = $conn->query($sql);
            } catch (Exception $e) {
              $error = $e->getMessage();
            }
          ?>

          <div class="calendario">

                 <?php $contador = 0; ?>
                 <?php while($eventos = $resultado->fetch_assoc()) { ?>

                       <?php $dias = array(); ?>
                       <?php foreach(array($eventos) as $evento) {
                          $dias[] = $evento['fecha_evento'];
                       } ?>


                       <?php $dias = array_values(array_unique($dias)); ?>
<pre><?php var_dump($_SERVER); ?></pre>
                       <?php foreach(array($eventos) as $evento): ?>

                              <?php $dia_actual = $evento['fecha_evento']; ?>
                              <?php if($dia_actual == $dias[$contador]): ?>
                                    <h3>
                                          <i class="fa fa-calendar" aria-hidden="true"></i>
                                          <?php echo $evento['fecha_evento']; ?>
                                    </h3>

                                    <?php

                                    $contador++;

                                    ?>
                              <?php endif; ?>

                             <div class="dia">
                                   <p class="titulo"><?php echo utf8_encode($evento['nombre_evento']); ?></p>
                                   <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $evento['fecha_evento'] . " " . $evento['hora_evento'] . " hrs"; ?>
                                  <p>
                                        <?php $categoria_evento = $evento['cat_evento']; ?>

                                        <?php
                                        switch ($categoria_evento) {
                                          case 'Talleres':
                                            echo '<i class="fa fa-code" aria-hidden="true"></i> Taller';
                                            break;
                                          case 'Conferencias':
                                            echo '<i class="fa fa-comment" aria-hidden="true"></i> Conferencias';
                                            break;
                                          case 'Seminario':
                                            echo '<i class="fa fa-university" aria-hidden="true"></i> Seminarios';
                                            break;
                                          default:
                                              echo "";
                                              break;
                                            }
                                         ?>
                                  </p>
                                  <p><i class="fa fa-user" aria-hidden="true"></i>
                                        <?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?>
                                  </p>

                             </div>

                       <?php endforeach; ?>
                     <?php } ?>
                   </div> <!--.calendario-->

        </section>

<?php include_once 'includes/templates/footer.php'; ?>
