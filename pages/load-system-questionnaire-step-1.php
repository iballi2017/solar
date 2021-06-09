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
                                                <legend>I want to install Solar System as </legend>
                                                <!-- option 1 -->
                                                <div class="form-group">
                                                    <div class="custom-check-wrapper">
                                                        <input type="radio" name="user-installation-choice" id="off-grid" class="check_rej">
                                                        <label for="off-grid" class="d-flex flex-wrap">
                                                            <span class="fake-radio custom_checkbox checkbox tick"></span>
                                                            <div class="bold-600">1. Off-grid</div>
                                                            <!-- (Description of Off-grid) -->
                                                            <aside>(Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit. Culpa eius quas quo officia voluptatem ratione a
                                                                sequi similique nobis labore?)</aside>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- option 2 -->
                                                <div class="form-group">
                                                    <div class="custom-check-wrapper">
                                                        <input type="radio" name="user-installation-choice" id="energy-saving-bill-offset-system" class="check_rej">
                                                        <label for="energy-saving-bill-offset-system" class="d-flex flex-wrap">
                                                            <span class="fake-radio custom_checkbox checkbox tick"></span>
                                                            <div class="bold-600">2. Energy saving/Bill offset system</div>
                                                            <!-- (Description of Grid Supported) -->
                                                            <aside>(Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit. Expedita, eos quae voluptatem odio a omnis
                                                                architecto mollitia repellat non sit.)</aside>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- option 3 -->
                                                <div class="form-group">
                                                    <div class="custom-check-wrapper">
                                                        <input type="radio" name="user-installation-choice" id="uninterrupted-power-supply" class="check_rej">
                                                        <label for="uninterrupted-power-supply" class="d-flex flex-wrap">
                                                            <span class="fake-radio custom_checkbox checkbox tick"></span>
                                                            <div class="bold-600">3. Uninterrupted power supply</div>
                                                            <!-- (Description of Grid Supported) -->
                                                            <aside>(Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit. Expedita, eos quae voluptatem odio a omnis
                                                                architecto mollitia repellat non sit.)</aside>
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