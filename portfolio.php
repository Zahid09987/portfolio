<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<div class="container">
    <h2 class="text-center mb-4"><?php echo gettext("Zahid's Projects"); ?></h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?php echo gettext("E-Commerce Website"); ?></h5>
                    <p class="card-text"><?php echo gettext("A full-stack shopping cart application built with PHP."); ?></p>
                    <a href="#" class="btn btn-outline-primary"><?php echo gettext("View Code"); ?></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?php echo gettext("Blog System"); ?></h5>
                    <p class="card-text"><?php echo gettext("A content management system with admin panel."); ?></p>
                    <a href="#" class="btn btn-outline-primary"><?php echo gettext("View Code"); ?></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?php echo gettext("Task Manager"); ?></h5>
                    <p class="card-text"><?php echo gettext("A JavaScript and PHP based To-Do list application."); ?></p>
                    <a href="#" class="btn btn-outline-primary"><?php echo gettext("View Code"); ?></a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'include/footer.php'; ?>