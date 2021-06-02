<?php
include '../components/header.php'
?>

<div id="user-project-history-page">
    <div class="bg-white py-5">

        <div class="container auto-wrapper">

            <h1 class="request-id">Request ID: <span>123455643FDSD</span></h1>
            <table class="installation-data border">
                <thead>
                    <tr>
                        <th scope="col" class="col"></th>
                        <th scope="col" class="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <td scope="row">
                            <div class="inner">
                                <div class="label">Name of installation:</div>
                                <div class="value">Title of the product</div>
                            </div>
                        </td>
                        <td>
                            <div class="inner">
                                <div class="label">Size of installation:</div>
                                <div class="value">Size of the product</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="inner">
                                <div class="label">System components</div>
                                <div class="value">Title of the product</div>
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                <div class="label">SDate of completion of installation</div>
                                <div class="value">26-Oct-2021</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- item 1 -->
            <table class="installation-details border">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="py-2">
                            <div>ENTRIES OF MAINTENANCE OPERATIONS ON THE INSTALLATION HAVING:</div>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" class="col"></th>
                        <th scope="col" class="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <th scope="row">
                            <div class="inner">
                                o Issues raised:
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                <p>Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem
                                    ipusum Lorem ipusum Lorem ipusum ipusum Lorem ipusum Lorem ipusum ipusum Lorem ipusum
                                    Lorem ipusum</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <th scope="row">
                            <div class="inner">
                                o Date of issue report:
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                26-Oct-2021
                            </div>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <th scope="row">
                            <div class="inner">
                                o Troubleshooting and action performed for resolution:
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                <p>Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem
                                    ipusum Lorem ipusum Lorem ipusum ipusum Lorem ipusum Lorem ipusum ipusum Lorem ipusum
                                    Lorem ipusum</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="inner">
                                o Date resolved:
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                26-Oct-2021
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- item 2 -->
            <table class="installation-details border">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="py-2">
                            <div>ENTRIES OF MAINTENANCE OPERATIONS ON THE INSTALLATION HAVING:</div>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" class="col"></th>
                        <th scope="col" class="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <th scope="row">
                            <div class="inner">
                                o Issues raised:
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                <p>Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem
                                    ipusum Lorem ipusum Lorem ipusum ipusum Lorem ipusum Lorem ipusum ipusum Lorem ipusum
                                    Lorem ipusum</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <th scope="row">
                            <div class="inner">
                                o Date of issue report:
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                26-Oct-2021
                            </div>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <th scope="row">
                            <div class="inner">
                                o Troubleshooting and action performed for resolution:
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                <p>Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem ipusum Lorem
                                    ipusum Lorem ipusum Lorem ipusum ipusum Lorem ipusum Lorem ipusum ipusum Lorem ipusum
                                    Lorem ipusum</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="inner">
                                o Date resolved:
                            </div>
                        </th>
                        <td>
                            <div class="inner">
                                26-Oct-2021
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>


            <div id="user-action">
                <button class="btn btn-white rounded-0" id="print-btn" onclick="printPage()">PRINT</button>
                <button class="btn btn-danger rounded-0" id="close-btn" onclick="goBack()">CLOSE</button>
            </div>
        </div>


    </div>
</div>


<!-- footer-full -->
<?php
include '../components/footer-full.php'
?>