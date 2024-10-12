<?php
include('include/header.php');
?>



<header class="header-page-bg overlay-shape">

    <div class="header-bottom-shape"></div>
    <div class="container">
        <div class="header-page-content">
            <small class="line-shape-bg color-white">Cysec</small>
            <h1 class="color-white">Cart</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<section class="cart-section pt-100 pb-70">
    <div class="container">
        <div class="cart-table">
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Id</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="product-table-info">
                                <div class="product-table-thumb">
                                    <img src="assets/images/product-2.png" alt="product">
                                </div>
                                <span>Magnite Camera</span>
                            </div>
                        </td>
                        <td class="weight-500">CY-001-002</td>
                        <td>$144.79</td>
                        <td>
                            <div class="cart-quantity">
                                <button class="qu-btn dec">-</button>
                                <input type="text" class="qu-input" value="1">
                                <button class="qu-btn inc">+</button>
                            </div>
                        </td>
                        <td>$144.79</td>
                        <td class="cancel"><a href="#"><i class="flaticon-cross-sign"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-table-info">
                                <div class="product-table-thumb">
                                    <img src="assets/images/product-3.png" alt="product">
                                </div>
                                <span>Spy Camera</span>
                            </div>
                        </td>
                        <td class="weight-500">CY-001-003</td>
                        <td>$130.89</td>
                        <td>
                            <div class="cart-quantity">
                                <button class="qu-btn dec">-</button>
                                <input type="text" class="qu-input" value="2">
                                <button class="qu-btn inc">+</button>
                            </div>
                        </td>
                        <td>$261.78</td>
                        <td class="cancel"><a href="#"><i class="flaticon-cross-sign"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-table-info">
                                <div class="product-table-thumb">
                                    <img src="assets/images/product-4.png" alt="product">
                                </div>
                                <span>Security Camera</span>
                            </div>
                        </td>
                        <td class="weight-500">CY-001-004</td>
                        <td>$108.59</td>
                        <td>
                            <div class="cart-quantity">
                                <button class="qu-btn dec">-</button>
                                <input type="text" class="qu-input" value="2">
                                <button class="qu-btn inc">+</button>
                            </div>
                        </td>
                        <td>$217.18</td>
                        <td class="cancel"><a href="#"><i class="flaticon-cross-sign"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-table-info">
                                <div class="product-table-thumb">
                                    <img src="assets/images/product-5.png" alt="product">
                                </div>
                                <span>Smart Camera</span>
                            </div>
                        </td>
                        <td class="weight-500">CY-001-005</td>
                        <td>$105.59</td>
                        <td>
                            <div class="cart-quantity">
                                <button class="qu-btn dec">-</button>
                                <input type="text" class="qu-input" value="3">
                                <button class="qu-btn inc">+</button>
                            </div>
                        </td>
                        <td>$316.77</td>
                        <td class="cancel"><a href="#"><i class="flaticon-cross-sign"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-table-info">
                                <div class="product-table-thumb">
                                    <img src="assets/images/product-6.png" alt="product">
                                </div>
                                <span>CCTV Hidden</span>
                            </div>
                        </td>
                        <td class="weight-500">CY-001-006</td>
                        <td>$115.14</td>
                        <td>
                            <div class="cart-quantity">
                                <button class="qu-btn dec">-</button>
                                <input type="text" class="qu-input" value="1">
                                <button class="qu-btn inc">+</button>
                            </div>
                        </td>
                        <td>$115.14</td>
                        <td class="cancel"><a href="#"><i class="flaticon-cross-sign"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-between align-items-center mt-30">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="cart-update cart-info-item">
                    <a href="#" class="btn full-width">
                        Update Cart
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-5">
                <div class="cart-coupon cart-info-item">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Coupon Code">
                            <button class="btn">Apply Coupon</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6 pb-30">
                <div class="cart-image">
                    <img src="assets/images/cart-image.png" alt="cart">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pb-30">
                <div class="cart-details default-box-shadow">
                    <h3 class="cart-details-title">Cart Totals</h3>
                    <div class="cart-total-box">
                        <div class="cart-total-item">
                            <h4>Subtotal</h4>
                            <p>$144.79</p>
                        </div>
                        <div class="cart-total-item">
                            <h4>Subtotal</h4>
                            <p>$261.78</p>
                        </div>
                        <div class="cart-total-item">
                            <h4>Subtotal</h4>
                            <p>$217.18</p>
                        </div>
                        <div class="cart-total-item">
                            <h4>Subtotal</h4>
                            <p>$316.77</p>
                        </div>
                        <div class="cart-total-item">
                            <h4>Subtotal</h4>
                            <p>$115.14</p>
                        </div>
                        <div class="cart-total-item">
                            <h4>Total</h4>
                            <p>$1055.66</p>
                        </div>
                    </div>
                    <a href="checkout.html" class="btn">Make Payment</a>
                </div>
            </div>
        </div>
    </div>
</section>

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