<?php APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h2>Login</h2>
                <h4>Please fill in your login information</h4>
                <form action="<?php echo URLROOT; ?>/pages/login" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control>

                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control>

                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-success btn-block" value="Login">
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/Users/createAccount" class="btn btn-light btn-block">No account? <h6>Register</h6></a>

                            <a href="<?php echo URLROOT; ?>/Users/createAccountAjax" class="btn btn-light btn-block">Want an AJAX account? <h6>Register here</h6></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php APPROOT . '/views/inc/footer.php'; ?>