<?php include_once 'includes/templates/header.php'; ?>

        <section class="seccion contenedor">
          <h2>La mejor conferencia de diseño web en español</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section><!--.seccion-->

        <section class="programa">
          <div class="contenedor-video">
            <video autoplay loop poster="bg-talleres.jpg">
              <source src="video/video.mp4" type="video/mp4">
              <source src="video/video.webm" type="video/webm">
              <source src="video/video.ogv" type="video/ogg">
            </video>
          </div><!--.contenedor-video-->
          <div class="contenido-programa">
            <div class="contenedor">
              <div class="programa-evento">
                <h2>Programa del evento</h2>
                <nav class="menu-programa">
                  <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i> Talleres</a>
                  <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias</a>
                  <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i> Seminarios</a>
                </nav>

                <div id="talleres" class="info-curso ocultar clearfix">
                  <div class="detalle-evento">
                    <h3>HTML5, CSS3 y JavaScript</h3>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 16:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo De la torre Valdez</p>
                  </div>
                  <div class="detalle-evento">
                    <h3>Responsive Web Design</h3>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 20:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo De la torre Valdez</p>
                  </div>
                  <a href="#" class="button float-right">Ver todos</a>
                </div><!--#talleres-->
                <div id="conferencias" class="info-curso ocultar clearfix">
                  <div class="detalle-evento">
                    <h3>Como ser freelancer</h3>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Gregorio Sanchez</p>
                  </div>
                  <div class="detalle-evento">
                    <h3>Tecnologias del Futuro</h3>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez</p>
                  </div>
                  <a href="#" class="button float-right">Ver todos</a>
                </div><!--#conferencias-->
                <div id="seminarios" class="info-curso ocultar clearfix">
                  <div class="detalle-evento">
                    <h3>Diseño UI/UX para moviles</h3>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia</p>
                  </div>
                  <div class="detalle-evento">
                    <h3>Aprende a programar en una mañana</h3>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera</p>
                  </div>
                  <a href="#" class="button float-right">Ver todos</a>
                </div><!--#seminarios-->
              </div><!--.programa-evento-->
            </div><!--.contenedor-->
          </div><!--.contenido-programa-->
        </section><!--.programa-->

        <section class="invitados contenedor seccion">
          <h2>Nuestros invitados</h2>
          <ul class="lista-invitados clearfix">
            <li>
              <div class="invitado">
                <img src="img/invitado1.jpg" alt="imagen invitado">
                <p>Rafael Bautista</p>
              </div>
            </li>
            <li>
              <div class="invitado">
                <img src="img/invitado2.jpg" alt="imagen invitado">
                <p>Shari Herrera</p>
              </div>
            </li>
            <li>
              <div class="invitado">
                <img src="img/invitado3.jpg" alt="imagen invitado">
                <p>Gregorio Sanchez</p>
              </div>
            </li>
            <li>
              <div class="invitado">
                <img src="img/invitado4.jpg" alt="imagen invitado">
                <p>Susana Rivera</p>
              </div>
            </li>
            <li>
              <div class="invitado">
                <img src="img/invitado5.jpg" alt="imagen invitado">
                <p>Harold Garcia</p>
              </div>
            </li>
            <li>
              <div class="invitado">
                <img src="img/invitado6.jpg" alt="imagen invitado">
                <p>Susan Sanchez</p>
              </div>
            </li>
          </ul>
        </section>

        <div class="contador parallax">
          <div class="contenedor">
            <ul class="resumen-evento clearfix">
              <li><p class="numero"></p> Invitados</li>
              <li><p class="numero"></p> Talleres</li>
              <li><p class="numero"></p> Dias</li>
              <li><p class="numero"></p> Conferencias</li>
            </ul>
          </div>
        </div>

        <section class="precios seccion">
          <h2>Precios</h2>
          <div class="contenedor">
            <ul class="lista-precios clearfix">
              <li>
                <div class="tabla-precio">
                  <h3>Pase por dia</h3>
                  <p class="numero">$30</p>
                  <ul>
                    <li>Bocadillos gratis</li>
                    <li>Todas las conferencias</li>
                    <li>Todos los talleres</li>
                  </ul>
                  <a href="#" class="button hollow">Comprar</a>
                </div>
              </li>
              <li>
                <div class="tabla-precio">
                  <h3>Todos los dias</h3>
                  <p class="numero">$50</p>
                  <ul>
                    <li>Bocadillos gratis</li>
                    <li>Todas las conferencias</li>
                    <li>Todos los talleres</li>
                  </ul>
                  <a href="#" class="button">Comprar</a>
                </div>
              </li>
              <li>
                <div class="tabla-precio">
                  <h3>Pase por 2 dias</h3>
                  <p class="numero">$45</p>
                  <ul>
                    <li>Bocadillos gratis</li>
                    <li>Todas las conferencias</li>
                    <li>Todos los talleres</li>
                  </ul>
                  <a href="#" class="button hollow">Comprar</a>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <div id="mapa" class="mapa">
        </div>

        <section class="seccion">
          <h2>Testimoniales</h2>
          <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <footer class="info-testimonial clearfix">
                  <img src="img/testimonial.jpg" alt="imagen testimonial">
                  <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                </footer>
              </blockquote>
            </div><!--.testimonial-->
            <div class="testimonial">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <footer class="info-testimonial clearfix">
                  <img src="img/testimonial.jpg" alt="imagen testimonial">
                  <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                </footer>
              </blockquote>
            </div><!--.testimonial-->
            <div class="testimonial">
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <footer class="info-testimonial clearfix">
                  <img src="img/testimonial.jpg" alt="imagen testimonial">
                  <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                </footer>
              </blockquote>
            </div><!--.testimonial-->
          </div><!--.testimoniales-->
        </section>

        <div class="newsletter parallax">
          <div class="contenido contenedor">
            <p>Registrate al newsletter:</p>
            <h3>gdlwebcamp</h3>
            <a href="#" class="button transparente">Registro</a>
          </div><!--.contenido-->
        </div><!--.newsletter-->

        <section class="seccion">
          <h2>Faltan</h2>
          <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
              <li><p id="dias" class="numero"></p> dias</li>
              <li><p id="horas" class="numero"></p> horas</li>
              <li><p id="minutos" class="numero"></p> minutos</li>
              <li><p id="segundos" class="numero"></p> segundos</li>
            </ul>
          </div>
        </section>

<?php include_once 'includes/templates/footer.php'; ?>
