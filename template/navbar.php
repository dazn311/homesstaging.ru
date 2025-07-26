<?php
global $path;
global $pdo;
$is_authenticated = check_auth($pdo);
?>
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/user">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/user">Home</a>
                    </li>
                    <?php
                    global $pdo;
                    if (!$is_authenticated): ?>
                        <li class="nav-item">
                            <?php
                                if ($path == '/register') {
                                    echo '<a class="nav-link" href="/login">Login</a>';
                                } else {
                                    echo '<a class="nav-link" href="/register">Register</a>';
                                }
                            ?>

                        </li>

                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout?do=logout">Logout</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</nav>

