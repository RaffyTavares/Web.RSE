<?php
// Variables globales del sitio
$site_title = "Rafael soluciones electrónica";
$current_year = date("Y");
$phone_number = "829-596-5912";
$whatsapp = "18297470675";
$email = "info@rselectronicas.com";
$address = "Calle Barahona #163, San Carlos, Santo Domingo, R.D.";
$schedule = "Lunes a viernes: 9:00 a.m. - 5:30 p.m. | Sábados: 9:00 a.m. - 1:00 p.m.";
$instagram = "https://www.instagram.com/rafael_soluciones_electronica";
?>

<!DOCTYPE html>
<html lang="es">

<?php include 'components/head.php'; ?>

<body>
    <?php include 'components/navbar.php'; ?>
    <?php include 'components/header.php'; ?>
    <?php include 'components/services.php'; ?>
    <?php include 'components/service-modals.php'; ?>
    <?php include 'components/process.php'; ?>
    <?php include 'components/cards-carousel.php'; ?>
    <?php include 'components/about.php'; ?>
    <?php include 'components/about-modal.php'; ?>
    <?php include 'components/values.php'; ?>
    <?php include 'components/blog.php'; ?>
    <?php include 'components/blog-modals.php'; ?>
    <?php include 'components/news.php'; ?>
    <?php include 'components/faq.php'; ?>
    <?php include 'components/contact.php'; ?>
    <?php include 'components/footer.php'; ?>
    <?php include 'components/scripts.php'; ?>

    <!-- Chat de WhatsApp Flotante -->
    <a href="https://wa.me/<?php echo $whatsapp; ?>?text=Hola%20Rafael%2C%20me%20gustaría%20recibir%20información%20profesional%20sobre%20el%20servicio%20de%20reparación%20de%20tarjetas%20electrónicas%20inverter.%20Gracias." 
       class="btn btn-success rounded-circle shadow-lg position-fixed animate__animated animate__heartBeat animate__infinite" 
       style="bottom:30px; right:30px; z-index: 1050;" 
       target="_blank" 
       aria-label="WhatsApp">
        <i class="bi bi-whatsapp" style="font-size: 2rem;"></i>
    </a>
</body>
</html>