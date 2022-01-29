<!-- header -->
<?php
include '../components/header.php'
?>


<div id="solar-audit-page">
    <div id="pick-a-time">
        <div class="bg-white">
            <div class="container">
                <!-- breadcrumb -->
                <ul class="breadcrumb">
                    <li><a href="../">Home</a></li>
                    <li>Schedule a Audit Request</li>
                </ul>

                <div class="title-wrapper">
                    <hr class="my-0">
                    <h1 class="title mb-0">SCHEDULE A AUDIT REQUEST</h1>
                    <hr class="my-0">
                </div>

                <!-- Progress bar -->
                <div class="audit-progress-bar">
                    <ul class="list-style-none pl-0 labels">
                        <li>SELECT A DATE </li>
                        <li>PICK A TIME </li>
                        <li>radioOUT </li>
                    </ul>
                    <ul class="list-style-none pl-0 indicators">
                        <li class="active">
                            <div class="ball"></div>
                        </li>
                        <li class="active">
                            <div class="ball"></div>
                        </li>
                        <li>
                            <div class="ball"></div>
                        </li>
                    </ul>

                </div>

                <div id="time-select">
                    <div class="inner">
                        <form action="#">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Available time</th>
                                        <th scope="col">Last</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <label class="cursor-pointer" for="9am">9:00am - 11:00am</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="time" id="9am" class="radio">
                                            <label for="9am">
                                                <span class="ui-radio"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <label class="cursor-pointer" for="12pm">12:00pm - 2:00pm</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="time" id="12pm" class="radio">
                                            <label for="12pm">
                                                <span class="ui-radio"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <label class="cursor-pointer" for="3pm">3:00pm - 5:00pm</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="time" id="3pm" class="radio">
                                            <label for="3pm">
                                                <span class="ui-radio"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button class="btn btn-sm">GO BACK</button>
                                                <a href="#" class="btn btn-sm">CONTINUE</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>