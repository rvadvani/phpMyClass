<?php
/**
 * Created by www.coderseven.com
 * User: rvadvani | coder seven
 * Date: 30th March 2017
 * Time: 12:34 AM
 */
require_once('lib/user.class.php');
$user = new USER();
$user->getHeader(''); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 div-box">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#login">LOGIN</a></li>
                <li><a data-toggle="pill" href="#register">REGISTER</a></li>
            </ul><br>
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">Email Id</label>
                            <input type="email" class="form-control" id="email" placeholder="Email Id" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </form>
                </div>
                <div id="register" class="tab-pane fade">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Id</label>
                            <input type="email" class="form-control" id="email" placeholder="Email Id" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-4 div-box">
            <code><strong>Default :</strong><br> Email Id: ramesh@coderseven.com<br>password: password</code>
        </div>
    </div>
</div>

<?php $user->getFooter(''); ?>