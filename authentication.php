<?php
include('include/header.php');
?>


<header class="header-page-bg overlay-shape">

    <div class="header-bottom-shape"></div>
    <div class="container">
        <div class="header-page-content">
            <small class="line-shape-bg color-white">Cysec</small>
            <h1 class="color-white">Authentication</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Authentication</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<section class="authentication-section p-tb-100">
    <div class="container">
        <div class="authentication-box">
            <div class="authentication-grid">
                <div class="authentication-item">
                    <h2 class="authentication-title">Cysec</h2>
                    <div class="authentication-user-body">
                        <div class="authentication-tab">
                            <div class="authentication-tab-item authentication-tab-active" data-authentcation-tab="1">
                                <i class="flaticon-enter"></i>
                                Login
                            </div>
                            <div class="authentication-tab-item" data-authentcation-tab="2">
                                <i class="flaticon-verify"></i>
                                Register
                            </div>
                        </div>
                        <div class="authentication-tab-details">
                            <div class="authentication-tab-details-item authentication-tab-details-active"
                                data-authentcation-details="1">
                                <div class="authentication-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="name">User Name*</label>
                                                        <input type="text" name="name" id="name" class="form-control"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="password">Password*</label>
                                                        <input type="password" name="password" id="password" required
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <button class="btn full-width mb-20">Login</button>
                                            </div>
                                        </div>
                                        <div class="authentication-account-access">
                                            <div class="authentication-account-access-item">
                                                <div class="input-checkbox">
                                                    <input type="checkbox" id="check1">
                                                    <label for="check1">Remember Me!</label>
                                                </div>
                                            </div>
                                            <div class="authentication-account-access-item">
                                                <div class="authentication-link">
                                                    <a href="forget-password.html">Forget password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="authentication-social-access">
                                    <div class="authentication-social-item social-btn social-btn-fb">
                                        <a href="#" class="btn btn-pill default-box-shadow">Facebook</a>
                                    </div>
                                    <div class="authentication-social-item social-btn social-btn-tw">
                                        <a href="#" class="btn btn-pill default-box-shadow">Twitter</a>
                                    </div>
                                    <div class="authentication-social-item social-btn social-btn-ld">
                                        <a href="#" class="btn btn-pill default-box-shadow">Linkedin</a>
                                    </div>
                                </div>
                            </div>
                            <div class="authentication-tab-details-item" data-authentcation-details="2">
                                <div class="authentication-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="name">User Name*</label>
                                                        <input type="text" name="name" id="name" class="form-control"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="email">Email Address*</label>
                                                        <input type="text" name="email" id="email" class="form-control"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="password">Password*</label>
                                                        <input type="password" name="password" id="password"
                                                            class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="confirm_password">Confirm Password*</label>
                                                        <input type="confirm_password" name="confirm_password"
                                                            id="confirm_password" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <button class="btn full-width mb-20">Register</button>
                                            </div>
                                        </div>
                                        <div class="authentication-account-access">
                                            <div class="authentication-account-access-item">
                                                <div class="input-checkbox mb-10">
                                                    <input type="checkbox" id="check3">
                                                    <label for="check3">I agree to the <a
                                                            href="privacy-policy-2.html">Privacy Policy</a></label>
                                                </div>
                                                <div class="input-checkbox">
                                                    <input type="checkbox" id="check2">
                                                    <label for="check2">I agree to the <a
                                                            href="terms-conditions.html">Terms & Conditions</a></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="authentication-social-access">
                                    <div class="authentication-social-item social-btn social-btn-fb">
                                        <a href="#" class="btn btn-pill">Facebook</a>
                                    </div>
                                    <div class="authentication-social-item social-btn social-btn-tw">
                                        <a href="#" class="btn btn-pill">Twitter</a>
                                    </div>
                                    <div class="authentication-social-item social-btn social-btn-ld">
                                        <a href="#" class="btn btn-pill">Linkedin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="authentication-item">
                    <div class="authentication-image desk-pad-left-30">
                        <img src="assets/images/authentication.png" alt="authentication">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <div class="report-section">
    <div class="container">
        <div class="report-box">
            <div class="report-box-inner">
                <div class="report-box-item report-box-text">
                    <h3>Get Free Report</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore quaerat voluptatem.</p>
                </div>
                <div class="report-box-item">
                    <a href="#" class="btn">Download Report</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php
include('include/footer.php');
?>