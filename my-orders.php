<?php
include('include/header.php');
?>

<header class="header-page-bg overlay-shape">

    <div class="header-bottom-shape"></div>
    <div class="container">
        <div class="header-page-content">
            <small class="line-shape-bg color-white">Cysec</small>
            <h1 class="color-white">My Orders</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Orders</li>
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
                        <li class="active"><a href="my-orders.html">My Orders</a></li>
                        <li><a href="my-addresses.html">My Addresses</a></li>
                        <li><a href="index.html">Sign Out</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 pb-30">
                <div class="account-info">
                    <div class="my-order">
                        <div class="sub-section-title">
                            <h3>My Orders</h3>
                        </div>
                        <div class="product-list-form m-0 p-0">
                            <form>
                                <select>
                                    <option value="all">All</option>
                                    <option value="pending">Pending</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </form>
                        </div>
                        <div class="cart-table cart-table-dark mt-20">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Id</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="product-table-info">
                                                <div class="product-table-thumb">
                                                    <img src="assets/images/product-2.png" alt="product">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="td-product-name">Magnite Camera</td>
                                        <td>CY-001-002</td>
                                        <td>$144.79</td>
                                        <td>
                                            <div class="cart-quantity">
                                                <button class="qu-btn dec">-</button>
                                                <input type="text" class="qu-input" value="1">
                                                <button class="qu-btn inc">+</button>
                                            </div>
                                        </td>
                                        <td class="td-total-price">$144.79</td>
                                        <td><a href="shop-details.html" class="btn btn-small">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-table-info">
                                                <div class="product-table-thumb">
                                                    <img src="assets/images/product-3.png" alt="product">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="td-product-name">Spy Camera</td>
                                        <td>CY-001-003</td>
                                        <td>$130.89</td>
                                        <td>
                                            <div class="cart-quantity">
                                                <button class="qu-btn inc">+</button>
                                                <input type="text" class="qu-input" value="2">
                                                <button class="qu-btn dec">-</button>
                                            </div>
                                        </td>
                                        <td class="td-total-price">$261.78</td>
                                        <td><a href="shop-details.html" class="btn btn-small">View Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
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