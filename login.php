<?php include 'template/session.php'; ?>
<?php if($user) {
    header('Location:index.php');
}else{
    ?>
<?php 
if(isset($_SESSION['error_login'])) 
{
    $error = $_SESSION['error_login'];
}else{
    $error = null;
} 
}
?>
<?php include 'template/header.php'; ?>
<?php include 'template/navbar.php'; ?>

<div class="container">
    <div class="row mt-5">
        <form action="process/login.php" method="POST" class="mt-3">
            <h1>Login</h1>
            <hr>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>

            <?php if($error){ ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php include 'template/footer.php'; ?>