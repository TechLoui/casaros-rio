<?php
declare(strict_types=1);

$site = require __DIR__ . '/app/config/site.php';

require __DIR__ . '/app/helpers.php';
require __DIR__ . '/app/components.php';
?>
<?php require __DIR__ . '/app/partials/head.php'; ?>
<body class="bg-gray-50">
    <?php require __DIR__ . '/app/partials/floating-buttons.php'; ?>

    <main>
        <?php
        require __DIR__ . '/app/sections/hero.php';
        require __DIR__ . '/app/sections/about.php';
        require __DIR__ . '/app/sections/gallery.php';
        require __DIR__ . '/app/sections/pre-room-features.php';
        require __DIR__ . '/app/sections/rooms.php';
        require __DIR__ . '/app/sections/amenities.php';
        require __DIR__ . '/app/sections/location.php';
        require __DIR__ . '/app/sections/policies.php';
        require __DIR__ . '/app/sections/booking.php';
        ?>
    </main>

    <?php require __DIR__ . '/app/partials/footer.php'; ?>
    <?php require __DIR__ . '/app/partials/lightbox.php'; ?>

    <script src="assets/js/app.js"></script>
</body>
</html>
