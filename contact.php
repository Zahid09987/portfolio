<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4"><?php echo t('contact_title'); ?></h2>

            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label"><?php echo t('contact_name'); ?></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><?php echo t('contact_email'); ?></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label"><?php echo t('contact_message'); ?></label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo t('contact_button'); ?></button>
            </form>

        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>