<?php session_start()?>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="carousel-control-next-icon m-2" src="img/icon.ico" alt="blog icon">
        <div>My blog</div>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
    </ul>

    <div class="col-md-3 ">
        <?php if (isset($_SESSION['name'])): ?>
        <a href="/blocks/reg/logout_action.php" class="link-dark text-decoration-none  me-2 mb-2">
            <img src="../img/avatar.png" alt="" width="38" height="38" class="rounded-circle me-2">
            <strong>USER</strong>
        </a>
        <?php else:?>

        <a href="./blocks/registration.php" class="btn btn-outline-primary me-2 mb-2">Login</a>
        <a href="./blocks/sign_in.php" class="btn btn-primary mb-2">Sign-up</a>
        <?php endif;?>


        </a>


    </div>

</header>

