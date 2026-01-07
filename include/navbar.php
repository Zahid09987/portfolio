<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php"><?php echo t('nav_brand'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page == 'index.php') {
                                            echo 'active';
                                        } ?>" href="index.php"><?php echo t('nav_home'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page == 'about.php') {
                                            echo 'active';
                                        } ?>" href="about.php"><?php echo t('nav_about'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page == 'portfolio.php') {
                                            echo 'active';
                                        } ?>" href="portfolio.php"><?php echo t('nav_projects'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page == 'contact.php') {
                                            echo 'active';
                                        } ?>" href="contact.php"><?php echo t('nav_contact'); ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        <?php echo t('nav_language'); ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="?lang=en_US" class="dropdown-item">English (United States)</a></li>
                        <li><a href="?lang=en_GB" class="dropdown-item">English (United Kingdom)</a></li>
                        <li><a href="?lang=en_AU" class="dropdown-item">English (Australia)</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                        id="bd-theme"
                        type="button"
                        aria-expanded="false"
                        data-bs-toggle="dropdown"
                        data-bs-display="static"
                        aria-label="Toggle theme (dark)">
                        <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                            <use href="#moon"></use>
                        </svg>
                        <span class="d-lg-none ms-2" id="bd-theme-text"><?php echo t('nav_toggle_theme'); ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme">
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                    <use href="#sun"></use>
                                </svg>
                                <?php echo t('nav_light'); ?>
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check"></use>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark" aria-pressed="true">
                                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                    <use href="#moon"></use>
                                </svg>
                                <?php echo t('nav_dark'); ?>
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check"></use>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                    <use href="#circle-half"></use>
                                </svg>
                                <?php echo t('nav_system'); ?>
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check"></use>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>