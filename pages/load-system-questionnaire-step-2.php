<?php
include '../components/header.php'
?>

<div id="load-system-questionnaire-page">
    <div class="bg-white">

        <div class="container auto-wrapper">
            <!-- breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li><a href="#">Support and services</a></li>
                <li>Load/System questionaire</li>
            </ul>

            <!-- title -->
            <div class="title-wrapper">
                <hr class="my-0">
                <h1 class="title mb-0 uppercase">Load/System questionaire</h1>
                <hr class="my-0">
            </div>


            <!-- FORM WIZARD SECTION -->

            <section class="py-4" id="step-2">
                <div id="progress-bar">
                    <div id="reader" class="default_width"></div>
                    <div class="inner">
                        <div class="label-wrapper">
                            <div class="label mb-3">
                                CATEGORY
                            </div>
                            <div class="bulb first active"></div>
                        </div>
                        <div class="label-wrapper">
                            <div class="label mb-3">
                                CALCULATE ENERGY NEEDED FOR YOUR PRODUCT
                            </div>
                            <div class="bulb second active"></div>
                        </div>
                    </div>
                </div>
                <div id="form-step-2">
                    <div class="inner">
                        <form action="#">
                            <!-- step 2 -->
                            <div class="form_step" id="energy-calculator">
                                <div class="step-inner">
                                    <div class="card border-0 rounded-0">
                                        <div class="card-body">
                                            <div>
                                                <span class="btn btn-sm py-2 px-0" onclick="goBack()">
                                                    <svg width="27" height="29" viewBox="0 0 31 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.4997 0.876957C6.94514 0.87102 0.00844755 7.8687 0 16.4925C0.00844755 25.131 6.94514 32.1281 15.4997 32.125C24.0574 32.1281 30.9934 25.131 31 16.4925C30.9937 7.8687 24.0574 0.87102 15.4997 0.876957ZM15.4997 28.5243C8.9178 28.5243 3.58082 23.1418 3.58645 16.4925C3.57988 9.85794 8.9178 4.4736 15.4997 4.47704C22.0847 4.47391 27.4223 9.85826 27.4298 16.4925C27.4223 23.1418 22.0847 28.5243 15.4997 28.5243Z" fill="#EA4B4B" />
                                                        <path d="M22.3924 12.5845L19.421 9.61719L15.4998 13.5338L11.5783 9.61719L8.60693 12.5845L12.5297 16.5033L8.60693 20.4177L11.5783 23.3851L15.4998 19.4684L19.421 23.3851L22.3924 20.4177L18.4709 16.5033L22.3924 12.5845Z" fill="#EA4B4B" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div id="result-screen">
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="col-left"></th>
                                                            <th scope="col" class="col-right"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="load-value">0 KW</div>
                                                            </th>
                                                            <td>LOAD</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="energy-value">0 KWh</div>
                                                            </th>
                                                            <td>ENERGY</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="text-center">ARNERGY5000</td>
                                                        </tr>
                                                        <tr class="pressure-info">
                                                            <th scope="row">
                                                                <div class="pressure-value">0</div>
                                                            </th>
                                                            <td>KVA</td>
                                                        </tr>
                                                        <tr class="null">
                                                            <td colspan="2" class="text-center">Nil</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <p class="text-center mb-0">
                                                <span class="btn rounded-0 uppercase dark-link">
                                                    <svg width="15" height="16" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path d="M11.9371 0.458984H6.54148C3.75127 0.458984 1.45996 2.71817 1.45996 5.51V9.91817C1.45996 10.3222 1.79257 10.6529 2.19909 10.6529C2.60561 10.6529 2.93822 10.3222 2.93822 9.91817V5.51C2.93822 3.5447 4.54583 1.94674 6.52301 1.94674H11.9002C13.9143 1.94674 15.5219 3.5447 15.5219 5.51V9.36715C15.5219 11.3325 13.9143 12.9304 11.9371 12.9304H5.26648L7.50235 10.708C7.798 10.4141 7.798 9.9549 7.50235 9.66102C7.2067 9.36715 6.74474 9.36715 6.44909 9.66102L2.93822 13.1508C2.64257 13.4447 2.64257 13.9039 2.93822 14.1978L6.44909 17.6876C6.59692 17.8345 6.7817 17.908 6.98496 17.908C7.16974 17.908 7.373 17.8345 7.52083 17.6876C7.81648 17.3937 7.81648 16.9345 7.52083 16.6406L5.26648 14.4182H11.9371C14.7458 14.4182 17.0187 12.159 17.0187 9.36715V5.51C17.0187 2.71817 14.7274 0.458984 11.9371 0.458984Z" fill="#414143" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="17" height="18" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg> Reset calculator
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 table-form-wrapper">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-form">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" id="action">#</th>
                                                            <th scope="col" id="qty-head">Quantity</th>
                                                            <th scope="col" id="appliance-head">Appliance</th>
                                                            <th scope="col" id="wattage-head">Wattage</th>
                                                            <th scope="col" id="hours-head">Hours</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- row 1 -->
                                                        <tr>
                                                            <th scope="row">
                                                                <!-- empty -->
                                                            </th>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="quantity">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="select-drop-wrapper">
                                                                        <select name="appliance" id="" class="w-100">
                                                                            <option value="" selected>Select an
                                                                                Appliance
                                                                            </option>
                                                                            <option value="appliance-a">Laptop
                                                                            </option>
                                                                            <option value="appliance-b">Refrigerator
                                                                            </option>
                                                                            <option value="appliance-c">Ceiling fan
                                                                            </option>
                                                                            <option value="appliance-c">Table fan
                                                                            </option>
                                                                            <option value="appliance-c">Microwave
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="wattage">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="hours">
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!-- row 2 -->
                                                        <tr>
                                                            <th scope="row">
                                                                <button class="btn btn-sm text-danger p-0" type="button">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </th>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="quantity">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="select-drop-wrapper">
                                                                        <select name="appliance" id="" class="w-100">
                                                                            <option value="" selected>Select an
                                                                                Appliance
                                                                            </option>
                                                                            <option value="appliance-a">Laptop
                                                                            </option>
                                                                            <option value="appliance-b">Refrigerator
                                                                            </option>
                                                                            <option value="appliance-c">Ceiling fan
                                                                            </option>
                                                                            <option value="appliance-c">Table fan
                                                                            </option>
                                                                            <option value="appliance-c">Microwave
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="wattage">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="hours">
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <!-- row 3 -->
                                                        <tr>
                                                            <th scope="row">
                                                                <button class="btn btn-sm text-danger p-0" type="button">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </th>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="quantity">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="select-drop-wrapper">
                                                                        <select name="appliance" id="" class="w-100">
                                                                            <option value="" selected>Select an
                                                                                Appliance
                                                                            </option>
                                                                            <option value="appliance-a">Laptop
                                                                            </option>
                                                                            <option value="appliance-b">Refrigerator
                                                                            </option>
                                                                            <option value="appliance-c">Ceiling fan
                                                                            </option>
                                                                            <option value="appliance-c">Table fan
                                                                            </option>
                                                                            <option value="appliance-c">Microwave
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="wattage">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" name="hours">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 step-footer">
                                        <div class="card-body">
                                            <div class="step-2-action-btn">
                                                <button type="button" class="btn my-1 btn-lg rounded-0 btn-white">ADD ANOTHER
                                                    APPLIANCE</button>
                                                <button type="button" class="btn my-1 btn-lg px-5 rounded-0 calc-btn">CALCULATE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        </div>


    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>