<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto pide-cita ">
            <div class="content">
                <p><a href="/cita/">Pide hoy tu cita</a> con uno de nuestros expertos</p>
                <ul>
                    <?php $telefono = get_field("telefono", 'option'); ?>
                    <li><a href="tel:<?php echo $telefono; ?>">
                            <?php echo $telefono; ?></a></li>
                    <li><a href="/contacto/">Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>