<section class="contact-section">
    <div class="contact-info">
        <p class="datos-de-contacto">DATOS DE CONTACTO</p>
        <h2>Contáctanos</h2>
        <p><strong>Dirección:</strong> Bogotá D.C, Colombia</p>
        <p><strong>Correo Electrónico:</strong> quintamuebles@gmail.com</p>
        <p><strong>Teléfono:</strong> +57 (320) 324 7553</p>
        <div class="social-icons">
            <a href="https://www.instagram.com/quinta.muebles_" target="_blank"><img src="../assets/img/icono/instagram.png" alt="Instagram"></a> 
            </div>
    </div>
     <div class="contact-form">
        <form action="https://formspree.io/f/mgvzvnvn" method="POST" id="contact-form"> 
            <div class="form-row">
                <input type="text" name="Nombre" placeholder="Nombre" required>
                <input type="text" name="Apellido" placeholder="Apellido" required>
            </div>
            <input type="email" name="_replyto" placeholder="Correo Electrónico" required> <textarea name="Mensaje" placeholder="Mensaje" required></textarea>
            <div class="checkbox-group">
                <input type="checkbox" id="privacy" name="Acepta_Privacidad" value="Sí" required>
                <label for="privacy">He leído y acepto la <a href="#" onclick="abrirModal('politica-privacidad.html')">Política de Privacidad</a>*</label>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="promotions" name="Acepta_Promociones" value="Sí">
                <label for="promotions">Acepto recibir información y promociones por correo electrónico*</label>
            </div>
            <button type="submit">ENVIAR MENSAJE</button>
        </form>
    </div>
</section>