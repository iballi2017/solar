<!-- header -->
<?php
include '../components/header.php'
?>


<div id="solar-audit-page">
    <div id="schedule-audit-request">
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
                    <li>CHECKOUT </li>
                </ul>
                <ul class="list-style-none pl-0 indicators">
                    <li class="active">
                        <div class="ball"></div>
                    </li>
                    <li>
                        <div class="ball"></div>
                    </li>
                    <li>
                        <div class="ball"></div>
                    </li>
                </ul>

            </div>


            <!-- Calendar notification guide -->
            <div>
                <div id="calendar-guide">
                    <div class="inner">
                        <h3 class="title">Guide:</h3>
                        <ul class="guide list-style-none pl-0 mb-0">
                            <li>
                                <div class="color partly-booked"></div>
                                <div class="label">Partly Booked</div>
                            </li>
                            <li>
                                <div class="color fully-booked"></div>
                                <div class="label">Fully booked</div>
                            </li>
                            <li>
                                <div class="color available"></div>
                                <div class="label">Available</div>
                            </li>
                            <li>
                                <div class="color day-off"></div>
                                <div class="label">Day off</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Calendar -->
            <section class="py-3">
                <div class="calendar-container">
                    <div class="calendar">
                        <div class="month">
                            <i class="fas fa-angle-left prev"></i>
                            <div class="date">
                                <h6></h6>
                                <h5></h5>
                                <p></p>
                            </div>
                            <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="days"></div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    </div>
</div>




<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>