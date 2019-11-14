<?php include './parts/header.php'; ?>
<div class="container">
    <div class="row text-center">
        <div class="col-md-5 mx-auto">
            <form class="form-signin" action="<?php echo $_SERVER[PHP_SELF]; ?>" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Please login</h1>
                <?php if ($invalidCredentials) {?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid credentials!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
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
