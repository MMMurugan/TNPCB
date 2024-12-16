<?php include("header.php"); ?>

<!-- =======================
Inner intro START -->
<section class="pt-0">
    <div class="containermm">
        <div class="row">
            <div class="col-12">
                <div class="bg-dark-overlay-4 overflow-hidden card-bg-scale h-200 text-center"
                    style="background-image:url(assets/image/about_header.png); background-position: center left; background-size: cover;">
                    <!-- Card Image overlay -->
                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                        <div class="w-100 my-auto">
                            <h1 class="text-white display-4">Record System for Pet Coke by Industrial Units</h1>
                            <!-- breadcrumb -->
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                class="bi bi-house me-1"></i> Home</a></li>
                                    <li class="breadcrumb-item active">Pet Coke Record System</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0 pb-0">
<div class="container mt-0 text-center">
<h4 class="sec_title mb-4 text-center">Record System for Pet Coke by Industrial Units</h4>

        <!-- Table displaying Pet Coke Record System -->
        <table id="petcoke-records-table" class="table table-striped table-bordered table-hover table_lastclm-width" data-ordering="false">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Industry Name</th>
                    <th>Registration & Quarterly Procurement and Utilisation</th>
                    <th>Consents</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Chettinad Cement Corporation Private Limited, Ariyalur</td>
                    <td><a href="path-to-registration-ariyalur.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-ariyalur.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Chettinad Cement Corporation Private Limited, Dindigul</td>
                    <td><a href="path-to-registration-dindigul.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-dindigul.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Chettinad Cement Corporation Private Limited, Karur</td>
                    <td><a href="path-to-registration-karur.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-karur.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Dalmia Cement(Bharat) Limited, Dalmiapuram, Ariyalur</td>
                    <td><a href="path-to-registration-dalmiapuram.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-dalmiapuram.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dalmia Cement(Bharat) Limited, Thamaraikulam, Ariyalur</td>
                    <td><a href="path-to-registration-thamaraikulam.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-thamaraikulam.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>The India Cements Pvt Limited, Ariyalur</td>
                    <td><a href="path-to-registration-india-ariyalur.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-india-ariyalur.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>The India Cements Pvt Limited, Kumarapalayam</td>
                    <td><a href="path-to-registration-kumarapalayam.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-kumarapalayam.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>The India Cements Pvt Limited, Tirunelveli</td>
                    <td><a href="path-to-registration-tirunelveli.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-tirunelveli.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>The Ramco Cements Limited, Alathiyur Works, Ariyalur</td>
                    <td><a href="path-to-registration-alathiyur.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-alathiyur.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>The Ramco Cements Limited, Govindapuram Works, Ariyalur</td>
                    <td><a href="path-to-registration-govindapuram.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-govindapuram.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Ultratech Cement Limited, Ariyalur</td>
                    <td><a href="path-to-registration-ultratech.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                    <td><a href="path-to-consent-ultratech.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include("footer.php"); ?>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#petcoke-records-table').DataTable({
            "paging": false,
            "info": false
        });
    });
</script>
