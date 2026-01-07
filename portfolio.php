<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<div class="container">
    <h2 class="text-center mb-4"><?php echo gettext("Zahid's Projects"); ?></h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?php echo t('portfolio_ecommerce'); ?></h5>
                    <p class="card-text"><?php echo t('portfolio_ecommerce_text'); ?></p>
                    <a href="#" class="btn btn-outline-primary"><?php echo t('portfolio_ecommerce_button'); ?></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?php echo t('portfolio_blog'); ?></h5>
                    <p class="card-text"><?php echo t('portfolio_blog_text'); ?></p>
                    <a href="#" class="btn btn-outline-primary"><?php echo t('portfolio_blog_button'); ?></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?php echo t('portfolio_task_manager'); ?></h5>
                    <p class="card-text"><?php echo t('portfolio_task_manager_text'); ?></p>
                    <a href="#" class="btn btn-outline-primary"><?php echo t('portfolio_task_manager_button'); ?></a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'include/footer.php'; ?>