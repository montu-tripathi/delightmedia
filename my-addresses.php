<?php
include('include/header.php');
?>

<header class="header-page-bg overlay-shape">

    <div class="header-bottom-shape"></div>
    <div class="container">
        <div class="header-page-content">
            <small class="line-shape-bg color-white">Cysec</small>
            <h1 class="color-white">My Adresses</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Adresses</li>
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
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="my-orders.html">My Orders</a></li>
                        <li class="active"><a href="my-addresses.html">My Addresses</a></li>
                        <li><a href="index.html">Sign Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 pb-30">
                <div class="account-info">
                    <div class="my-order">
                        <div class="sub-section-title">
                            <h3>My Addresses</h3>
                            <p>The following addresses will be used on the checkout page by default.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-title">
                                    <h4>Biliing Address</h4>
                                    <p>Edit</p>
                                </div>
                                <div class="billing-address">
                                    <address>
                                        London <br>
                                        26 Autostrad St, E1 9ED <br>
                                    </address>
                                    <p class="billing-address-info">You have not set up this type of address yet.</p>
                                </div>
                                <div class="billing-address-input">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="first_name">First Name*</label>
                                                        <input type="text" name="first_name" id="first_name"
                                                            class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="last_name">Last Name*</label>
                                                        <input type="text" name="last_name" id="last_name"
                                                            class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="company_name">Campany Name</label>
                                                        <input type="text" name="company_name" id="company_name"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="country_name">Country Name*</label>
                                                        <div class="input-group-select">
                                                            <select name="country" class="form-control"
                                                                id="country_name">
                                                                <option value="1">Your Country*</option>
                                                                <option value="2">USA</option>
                                                                <option value="3">UK</option>
                                                                <option value="4">Germany</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="street">Street</label>
                                                        <input type="text" name="street" id="street"
                                                            class="form-control" placeholder="Street" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="town_city">Town/City</label>
                                                        <div class="input-group-select">
                                                            <select name="country" class="form-control" id="town_city">
                                                                <option value="1">Town/City*</option>
                                                                <option value="2">New York</option>
                                                                <option value="3">Florida</option>
                                                                <option value="4">Miami</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="state_country">State / Country</label>
                                                        <input type="text" name="state_country" id="state_country"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="postcode">Postcode / Zip</label>
                                                        <input type="text" name="postcode" id="postcode"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="phone_number">Phone Number*</label>
                                                        <input type="text" name="phone_number" id="phone_number"
                                                            class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group custom-form-group mb-20">
                                                    <div class="input-group">
                                                        <label for="name">Email Address*</label>
                                                        <input type="text" name="name" id="name" class="form-control"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <button class="btn full-width" type="submit">Save Address <i
                                                        class="flaticon-right-chevron"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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