<div class="container">
            <div class="row-fluid">
                <div class="col-lg-4 ml-auto mr-auto">
                    <div class="card card-register">
                        <h3 class="title">Registration</h3>
                        <!--	
                                                        <div class="social-line text-center">
                                                            <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon">
                                                                <i class="fa fa-facebook-square"></i>
                                                            </a>
                                                            <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                            <a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </div>
                        -->


                        <div id="form" class="col-sm-12  col-sm-offset ml-auto mr-auto">
                            <div class="form-group ">
                                <form class="register-form " id="contact_form" method="POST">
                                    <div>
                                        <label for="firstName">First name</label>
                                        <input type="text" name="firstName"  id="firstName" class="form-control" placeholder="First name" required data-required-message="First name is required.">
                                    </div>
                                    <div>                                    
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" required data-required-message="Last name is required.">
                                    </div>
                                    <div>
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required data-required-message="Email is required." data-type-message="You must provide a valid email address.">
                                    </div> 
                                    <div>
                                        <label>Username</label>
                                        <input type="text" name="username"  class="form-control" placeholder="Username" required data-required-message="Username is required." data-type-message="You must provide a valid username.">
                                    </div>
                                    <div>
                                        <label>Password</label>
                                        <input type="password" name="password1" class="form-control" placeholder="Password" required data-required-message="Password is required." data-type-message="You must provide a valid password.">
                                    </div>
                                    <div>
                                        <label>Repeat Password</label>
                                        <input type="password" name="password2" class="form-control" placeholder="Repeat Password" required data-required-message="Repeat the password." data-type-message="You must repeat the password.">
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">User Type:</label>
                                        <select id="Kategori" name="fk_type" class="form-control">
                                            <?php
                                            $result = $conn->query("SELECT id, type, level FROM usertype");
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row['id'] . '">' . $row['type'] . '</option>' . PHP_EOL;
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-danger btn-block btn-round">Register</button>
                                </form>
                            </div>
                        </div>
                        <div class="forgot">
                            <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer register-footer text-center">
                <h6>© <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script>document.write(new Date().getFullYear())</script>2017, made with </h6>
            </div>
        </div>
