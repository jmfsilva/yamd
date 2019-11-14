<?php $preTitle = "Signup"; ?>
<?php include './parts/header.php'; ?>
<div class="container">
    <div class="row text-center">
        <div class="col-md-5 mx-auto">
            <form class="form-signin" action="signup.php" method="post">
                <h1 class="h3 mb-3 font-weight-nor212121mal">Please sign up</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input name ="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""
                    value="<?php echo isset( $_POST['email'] ) ? $_POST['email'] : ""; ?>">
                <label for="inputName" class="sr-only">Name</label>
                <input name ="name" type="text" id="inputName" class="form-control" placeholder="Name" required=""
                    value="<?php echo isset( $_POST['name'] ) ? $_POST['name'] : ""; ?>">
                <label for="inputPicture" class="sr-only">Name</label>
                <input name ="picture" type="text" id="inputPicture" class="form-control" placeholder="Picture url"
                    value="<?php echo isset( $_POST['picture'] ) ? $_POST['picture'] : ""; ?>">
                <label for="inputPassword" class="sr-only">Password</label>
                <input name ="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                <label for="inputConfirmPassword" class="sr-only">Password</label>
                <input name ="confirmPassword" type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required="">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            </form>
        </div>
    </div>
</div>
<?php include './parts/footer.php'; ?>
