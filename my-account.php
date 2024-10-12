<?php
include('include/header.php');
?>


<header class="header-page-bg overlay-shape">

    <div class="header-bottom-shape"></div>
    <div class="container">
        <div class="header-page-content">
            <small class="line-shape-bg color-white">Cysec</small>
            <h1 class="color-white">My Account</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<div class="account-page-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 pb-30">
                <div class="account-sidebar around-border">
                    <ul class="account-sidebar-list">
                        <li class="active"><a href="my-account.html">My Account</a></li>
                        <li><a href="my-orders.html">My Orders</a></li>
                        <li><a href="my-addresses.html">My Addresses</a></li>
                        <li><a href="index.html">Sign Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 pb-30">
                <div class="account-info">
                    <form>
                        <div class="account-setting-item account-setting-avatar">
                            <div class="sub-section-title">
                                <h3>Avatar</h3>
                            </div>
                            <div class="account-avatar-info">
                                <div class="account-avatar-thumb">
                                    <img src="assets/images/comment-1.jpg" alt="avatar">
                                </div>
                                <ul class="account-avatar-action">
                                    <li><button class="btn">Upload</button></li>
                                    <li><button class="btn btn-black">Remove</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="account-setting-item">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="first_name">First Name*</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="last_name">Last Name*</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="email">Email*</label>
                                            <input type="text" name="email" id="email" class="form-control" required
                                                value="xyz@example.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="phone">Phone*</label>
                                            <input type="text" name="phone" id="phone" class="form-control" required
                                                placeholder="Phone Number*" value="+61-678-1234-5567" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-setting-item account-setting-avatar">
                            <div class="sub-section-title">
                                <h3>Change Password</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="pass1">Current Password*</label>
                                            <input type="password" name="pass1" id="pass1" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="pass2">New Password*</label>
                                            <input type="password" name="pass2" id="pass2" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="pass3">Confirm Password*</label>
                                            <input type="password" name="pass3" id="pass3" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-setting-item account-setting-button">
                            <button class="btn btn-small">Save Changes</button>
                            <button class="btn btn-black btn-small">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


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