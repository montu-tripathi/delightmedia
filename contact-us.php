<?php
include('include/header.php');
?>

<header class="header-page-bg overlay-shape">

    <div class="header-bottom-shape"></div>
    <div class="container">
        <div class="header-page-content">
            <small class="line-shape-bg color-white">Cysec</small>
            <h1 class="color-white">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<section class="contact-us-section pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 pb-30">
                <div class="contact-us-item contact-us-image text-center">
                    <img src="assets/images/contact-us-image.jpg" alt="image">
                </div>
            </div>
            <div class="col-12 col-lg-6 pb-30">
                <div class="contact-us-item max-585 mx-auto mx-lg-0">
                    <div class="sub-section-title">
                        <h3>Leave A Message</h3>
                        <p>No more than 2 working days since receiving your issue ticket.</p>
                    </div>
                    <form id="contactForm" class="contact-form">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group custom-form-group mb-20">
                                    <div class="input-group">
                                        <label for="name">Name*</label>
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group custom-form-group mb-20">
                                    <div class="input-group">
                                        <label for="phone_number">Phone*</label>
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please enter your phone number" class="form-control" />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group custom-form-group mb-20">
                                    <div class="input-group">
                                        <label for="email">Email Address*</label>
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group custom-form-group mb-20">
                                    <div class="input-group">
                                        <label for="msg_subject">Subject*</label>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required data-error="Please enter your subject" />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group custom-form-group mb-20">
                                    <div class="input-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" class="form-control" id="message" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox mb-20">
                                    <input type="checkbox" id="contact1">
                                    <label for="contact1">Accept <a href="terms-conditions.html">Terms & Conditions</a>
                                        and <a href="privacy-policy-2.html">Privacy Policy</a></label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <button class="btn" type="submit">
                                    Send Message
                                </button>
                                <div id="msgSubmit"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="contact-grid-section pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                <div class="contact-grid-box">
                    <div class="contact-grid-thumb">
                        <img src="assets/images/contact-grid-1.jpg" alt="contact">
                    </div>
                    <div class="contact-grid-content">
                        <h3>Location Here</h3>
                        <div class="contact-grid-para"><i class="flaticon-network"></i>Office No. 305, Devhira Complex,
                            Telephone Exchange Road, GIDC, Vapi- 396 195.</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                <div class="contact-grid-box">
                    <div class="contact-grid-thumb">
                        <img src="assets/images/contact-grid-2.jpg" alt="contact">
                    </div>
                    <div class="contact-grid-content">
                        <h3>Call Here</h3>
                        <div class="contact-grid-para">
                            <i class="flaticon-phone-call"></i>
                            <p>
                                <a href="tel:0061-665-66785">(+91) 9157810375</a><br>
                                <a href="tel:0061-567-8907">(+ 91) 9157810375</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 pb-30 offset-md-3 offset-lg-0">
                <div class="contact-grid-box">
                    <div class="contact-grid-thumb">
                        <img src="assets/images/contact-grid-3.jpg" alt="contact">
                    </div>
                    <div class="contact-grid-content">
                        <h3>Email Here</h3>
                        <div class="contact-grid-para">
                            <i class="flaticon-email"></i>
                            <p>
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#670e0901085557555727041e1402044904080a"><span
                                        class="__cf_email__"
                                        data-cfemail="7b12151d14494b494b3b1802081e1855181416">sales@delightmedia.in</span></a><br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 
<div class="report-section">
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