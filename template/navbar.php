<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">

                <a class="nav-link active mx-md-2" aria-current="page" href="index.php">Home</a>
                <?php if(empty($user)) { ?>
                <a class="nav-link btn btn-primary px-4 text-white me-2 mb-2" href="login.php">Login</a>
                <a class="nav-link btn" href="register.php">Register</a>
                <?php } else { ?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $user->nama ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php 
                            if($user->role == 1) {
                                echo 'admin.php';
                            } else{
                                echo 'user.php';
                            }
                        ?>">Dashboard</a></li>
                        <li>
                            <hr class=" dropdown-divider">
                        </li>
                        <li><a href="process/signout.php" class="dropdown-item">Signout</a></li>
                    </ul>
                </li>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>