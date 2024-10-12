<?php
include('include/header.php');
?>
<header class="header-page-bg overlay-shape">

    <div class="header-bottom-shape"></div>
    <div class="container">
        <div class="header-page-content">
            <small class="line-shape-bg color-white">Cysec</small>
            <h1 class="color-white">Checkout</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<div class="checkout-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 pb-30">
                <div class="checkout-item">
                    <div class="sub-section-title">
                        <h3>Billing Details</h3>
                    </div>
                    <div class="checkout-form">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="name">Email Address*</label>
                                            <input type="text" name="name" id="name" class="form-control" required />
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
                                <div class="col-sm-12">
                                    <div class="input-checkbox mb-20">
                                        <input type="checkbox" id="check1">
                                        <label for="check1">Get alert of product updates & offers</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="first_name">First Name*</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="last_name">Last Name*</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="country_name">Country Name*</label>
                                            <div class="input-group-select">
                                                <select name="country" class="form-control" id="country_name">
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
                                            <label for="company_name">Campany Name</label>
                                            <input type="text" name="company_name" id="company_name"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="address">Address*</label>
                                            <input type="text" name="address" id="address" class="form-control"
                                                required />
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
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="state_country">State / Country</label>
                                            <input type="text" name="state_country" id="state_country"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group custom-form-group mb-20">
                                        <div class="input-group">
                                            <label for="postcode">Postcode / Zip</label>
                                            <input type="text" name="postcode" id="postcode" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-checkbox mb-20">
                                        <input type="checkbox" id="check2">
                                        <label for="check2" class="weight-600">Ship to a different address?</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group custom-form-group m-0">
                                        <div class="input-group">
                                            <label for="message">Order Notes*</label>
                                            <textarea name="message" class="form-control" id="message"
                                                rows="8"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pb-30">
                <div class="checkout-item">
                    <div class="sub-section-title">
                        <h3>Your Orders</h3>
                    </div>
                    <div class="checkout-details mb-30">
                        <div class="cart-total-box">
                            <div class="cart-total-item">
                                <h4 class="checkout-total-title">Product Name</h4>
                                <p class="checkout-total-title">Total</p>
                            </div>
                            <div class="cart-total-item">
                                <h4>Magnite Camera</h4>
                                <p>$144.79</p>
                            </div>
                            <div class="cart-total-item">
                                <h4>Spy Camera</h4>
                                <p>$261.78</p>
                            </div>
                            <div class="cart-total-item">
                                <h4>Security Camera</h4>
                                <p>$217.18</p>
                            </div>
                            <div class="cart-total-item">
                                <h4>Smart Camera</h4>
                                <p>$316.77</p>
                            </div>
                            <div class="cart-total-item">
                                <h4>CCTV Hidden</h4>
                                <p>$115.14</p>
                            </div>
                            <div class="cart-total-item">
                                <h4 class="checkout-total-title">Total</h4>
                                <p class="checkout-total-title">$1055.66</p>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-payment-area">
                        <div class="sub-section-title">
                            <h3>What's Payment Method</h3>
                        </div>
                        <div class="checkout-payment-form">
                            <form>
                                <div class="input-checkbox mb-20">
                                    <input type="checkbox" id="check3">
                                    <label for="check3">Bank Transfer</label>
                                </div>
                                <div class="input-checkbox mb-20">
                                    <input type="checkbox" id="check4">
                                    <label for="check4">Paypal</label>
                                </div>
                                <div class="input-checkbox mb-20">
                                    <input type="checkbox" id="check5">
                                    <label for="check5">Visa</label>
                                </div>
                                <p>What ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt ut labore </p>
                                <h3 class="cart-details-title mb-20">Card Details</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group custom-form-group mb-20">
                                            <div class="input-group">
                                                <label for="postcode">Name On The Card</label>
                                                <input type="text" name="name_card" class="form-control" id="name_card"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group custom-form-group mb-20">
                                            <div class="input-group">
                                                <label for="card_number">Card Number</label>
                                                <input type="text" name="number" class="form-control" id="card_number"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group custom-form-group mb-20">
                                            <div class="input-group">
                                                <label for="card_date">Expiry Date</label>
                                                <input type="text" name="date" class="form-control" id="card_date"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group custom-form-group mb-20">
                                            <div class="input-group">
                                                <label for="cvn">CVN</label>
                                                <input type="text" name="cvn" class="form-control" id="cvn" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-red btn-icon btn-shadow btn-shadow-red full-width"
                                            type="submit">
                                            Make Payment <i class="flaticon-right-chevron"></i>
                                        </button>
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