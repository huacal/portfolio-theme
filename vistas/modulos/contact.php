
<article class="content contact white-bg" id="chaptercontact">
        <div class="inner">
          <h2>Contacto</h2>
          <div class="title-divider"></div>
          <h3> Mantengámonos en contacto</h3>
          <p>Llámame o escribe para resolver todas tus dudas, estaré encantado de conversar contigo.</p>
          <div class="full-divider"></div>
          <div class="contact-con margin-top50">
            <div class="container-sub">
              <div class="row">
                <div class="contact-details">
                  <div class="col-6">
                    <div class="contact-text">
                      <div class="col-2 icon-block address"><i class="linearicons-map2"></i></div>
                      <div class="flot-left"> <strong>Dirección</strong><br>
                        Carrera 8f este # 36g -69,<br>
                        Bogotá, Colombia </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block phone"><i class="linearicons-telephone"></i></div>
                      <div class="flot-left"> <strong>Teléfono</strong><br>
                        +57 301 459 5097</div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block email"><i class="linearicons-envelope"></i></div>
                      <div class="flot-left"> <strong>Correo Electrónico</strong><br>
                        <a href="mailto:contacto@larrymartinez.com.co">contacto@larrymartinez.com.co</a></div>
                    </div>
                  </div>
                  <div class="col-6 m-margin-top30">
                    <h3>Redes sociales</h3>
                    Puedes encontrarme en mis redes sociales para mantenernos en contacto.
                    <div class="contact-social margin-top30">
                        <!-- <a href="https://www.instagram.com/larryrozo/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a> -->
                        <a href="https://twitter.com/larry43889118" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a> 
                        <a href="https://github.com/huacal" target="_blank" class="git-hub"><i class="fab fa-github"></i></a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <div class="contact-form">

                  <h3>Envíame un mensaje</h3>

                  <form id="formContact" name="form-contact" method="post" >

                    <div class="input-group" id="inputGroupName">
                        <input name="name" type="text" id="name" class="name" placeholder="Nombres..." />
                    </div>
                    <div class="input-group" id="inputGroupEmail">
                        <input name="email" type="text" id="email" class="icon-msg" placeholder="Correo Electrónico..." />
                    </div>
                    <div class="input-group" id="inputGroupSubject">
                        <input name="subject" type="text" id="subject" class="icon-msg" placeholder="Asunto..." />
                    </div>
                    
                    <div class="input-group" id="inputGroupMessage">
                    <textarea name="message" id="message" cols="45" rows="5" placeholder="Mensaje..."></textarea>
                    </div>

                    <div id="successmsg"></div>

                    <input type="submit" name="send" id="send" value="Enviar" >
                  </form>
                  <?php
                     include ("mail.php");
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      
      