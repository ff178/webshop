<?php include MODULE."header.php"; ?>
<body>
  <?php include MODULE."nav.php"; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php print(URL); ?>">Inicio</a></li>
                    <li class="active">Contacto</li>
                </ol>
            </div>
        </div>
        <!-- contact -->
        <div class="contact">
            <div class="container">
                <h3>Contactanos</h3>
                <div class="contact-content">

                  <form id="ajax-contact" method="post" action="<?php print(URL); ?>Usuario/sendEmail">
                      <div class="field">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                      </div>

                      <div class="field">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                      </div>

                      <div class="field">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>
                      </div>

                      <div class="field">
                        <button type="submit">Send</button>
                      </div>
                    </form>
                    <div id="form-messages"></div>
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
                    </div>
                </div>
            </div>
        </div>
	   <?php include MODULE."footer.php"; ?>
    </body>
</html>
