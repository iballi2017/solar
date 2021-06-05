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

            <section class="py-4" id="step-1">
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
                            <div class="bulb second"></div>
                        </div>
                    </div>
                </div>
                <div id="form-step-1">
                    <div class="inner">

                        <form action="#">
                            <!-- step 1 -->
                            <div class="form_step slidePage">
                                <div class="step-inner">
                                    <div class="card border-0 rounded-0">
                                        <div class="card-body">
                                            <fieldset>
                                                <legend>Solar Priority</legend>

                                                <div class="form-group">
                                                    <div class="custom-check-wrapper">
                                                        <input type="checkbox" name="solar-priority" id="energy-saving-mode" class="check_rej">
                                                        <label for="energy-saving-mode" class="d-flex flex-wrap">
                                                            <span class="fake-radio custom_checkbox checkbox"></span>
                                                            1. Energy Saving Mode – (Description of Energy Saving Mode)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-check-wrapper">
                                                        <input type="checkbox" name="solar-priority" id="grid-utility" class="check_rej">
                                                        <label for="grid-utility" class="d-flex flex-wrap">
                                                            <span class="fake-radio custom_checkbox checkbox"></span>
                                                            2. Grid/Utility – (Description of Grid/Utility)
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--  -->
                                            <hr class="horizontal-separator" />
                                            <!--  -->
                                            <fieldset>
                                                <legend>I want to install Solar System as </legend>
                                                <div class="form-group">
                                                    <div class="custom-check-wrapper">
                                                        <input type="checkbox" name="user-installation-choice" id="off-grid" class="check_rej">
                                                        <label for="off-grid" class="d-flex flex-wrap">
                                                            <span class="fake-radio custom_checkbox checkbox"></span>
                                                            1. Off-grid (Description of Off-grid)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-check-wrapper">
                                                        <input type="checkbox" name="user-installation-choice" id="grid-support" class="check_rej">
                                                        <label for="grid-support" class="d-flex flex-wrap">
                                                            <span class="fake-radio custom_checkbox checkbox"></span>
                                                            2. Grid-Supported (Description of Grid Supported)
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="card rounded-0 step-footer">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-white px-5 rounded-0 step-1-btn" disabled>NEXT</button>
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