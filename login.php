<?php $preTitle = "Login"; ?>
<?php include './parts/header.php';
if(!empty($_POST)) {
    if(isset($_POST['email']) && isset($_POST['password'])) {
        if($user_service->validatePassword($_POST['email'], $_POST['password'])) {
            $user = $user_service->getUser($_POST['email']);
            $_SESSION['email'] = $user->getEmail();
            $_SESSION['name'] = $user->getName();
            $_SESSION['picture'] = $user->getPicture();
            header("Location: /yamd");
            return;
        }
    }
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Invalid credentials
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
?>
<div class="container">
    <div class="row text-center">
        <div class="col-md-5 mx-auto">
            <form class="form-signin" action="/yamd/login.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Please login</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <label for="inputPassword" class="sr-only">Password</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
<?php include './parts/footer.php'; ?>
