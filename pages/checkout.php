<!-- header -->
<?php
include '../components/header.php'
?>

<div id="checkout-page">
    <div class="bg-white pb-5">
        <div class="container auto-wrapper">
            <!-- breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Checkout</li>
            </ul>

            <!-- title -->
            <div class="title-wrapper">
                <hr class="my-0">
                <h1 class="title mb-0">CHECKOUT</h1>
                <hr class="my-0">
            </div>


            <!-- checkout form -->
            <form action="#">
                <fieldset>
                    <legend>PERSONAL DETAILS</legend>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="username" aria-describedby="username">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="password" class="form-control" id="lastName">
                        </div>
                    </div>

                    <!--  -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input type="password" class="form-control" id="email">
                        </div>
                    </div>

                    <!--  -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="streetAddress">Street Adress</label>
                            <input type="text" class="form-control" id="streetAddress">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="stateAddress">State</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                </fieldset>

                <!-- ##################################### -->

                <fieldset>
                    <legend>YOUR ORDER</legend>
                    <table class="table table-bordered" id="order-table">
                        <thead>
                            <tr>
                                <th scope="col" class="name-header">Product name</th>
                                <th scope="col" class="total-header">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Inverter Inverter Inverter Inverter Inverter * 1</th>
                                <td>₦&nbsp;71,000</td>
                            </tr>
                            <tr>
                                <th scope="row">Solar panel * 1</th>
                                <td>₦&nbsp;71,000</td>
                            </tr>
                            <tr>
                                <th scope="row">Subtotal</th>
                                <td>₦&nbsp;142,000</td>
                            </tr>
                            <tr>
                                <th scope="row">Shipping fee</th>
                                <td>Amount per State</td>
                            </tr>
                            <tr>
                                <th scope="row">VAT</th>
                                <td>Amount of VAT</td>
                            </tr>
                            <tr>
                                <th scope="row">TOTAL</th>
                                <td>₦&nbsp;142,000</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--  -->
                    <table class="table table-bordered" id="order-table">
                        <thead>
                            <tr>
                                <th scope="col" class="name-header">PAYMENT METHOD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <ul class="list-style-none d-flex px-0 mb-0">
                                        <li class="custom-check-wrapper">
                                            <input type="radio" name="payment-method" id="bank-option" class="check_rej">
                                            <label for="bank-option">Bank method
                                                <span class="fake-radio custom_checkbox"></span>
                                            </label>
                                        </li>
                                        <li class="custom-check-wrapper">
                                            <input type="radio" name="payment-method" id="payment-option" class="check_rej">
                                            <label for="payment-option">Third-party payment
                                                <span class="fake-radio custom_checkbox"></span></label>
                                        </li>
                                    </ul>
                                </th>

                            </tr>
                            <tr>
                                <th scope="row">
                                    <a href="./checkout.php" class="btn btn-white rounded-0 bold">PLACE YOUR ORDER</a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>