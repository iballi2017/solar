<!-- header -->
<?php
include '../components/header.php'
?>

<div id="user-project-history-request-page">
    <div class="bg-white pb-5">

        <div class="container auto-wrapper">
            <!-- breadcrumb -->
            <ul class="breadcrumb">
                <li><a href="../">Home</a></li>
                <li><a href="../">Support and services</a></li>
                <li>Project history</li>
            </ul>


            <!-- title -->
            <div class="title-wrapper">
                <hr class="my-0">
                <h1 class="title mb-0">PROJECT HISTORY</h1>
                <hr class="my-0">
            </div>
            <section class="text-center">
                <aside class="mb-3">This is a dedicated section for clients to keep the history of the installation and maintenance of the system.</aside>

                <p class=" bold-600">Please enter the email address you registered with. We will send you a link</p>
                <div class="form-wrapper">
                    <form action="#">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Installation ID" name="istallation-id" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-white rounded-0" type="button" id="button-addon2">SUBMIT</button>
                            </div>
                    </form>
                </div>
            </section>


        </div>
    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>