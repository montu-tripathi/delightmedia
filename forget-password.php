<?php
include('include/header.php');
?>


<header class="header-page-bg overlay-shape">

    <div class="header-bottom-shape"></div>
    <div class="container">
        <div class="header-page-content">
            <small class="line-shape-bg color-white">Cysec</small>
            <h1 class="color-white">Forget Password</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Forget Password</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<section class="authentication-section p-tb-100">
    <div class="container">
        <div class="authentication-box authentication-box-width">
            <div class="authentication-grid">
                <div class="authentication-item">
                    <h2 class="authentication-title">Reset Password!</h2>
                    <div class="authentication-user-body">
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
                                                <label for="password">Last Password*</label>
                                                <input type="password" name="password" id="password" required
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <button class="btn full-width">Reset Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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