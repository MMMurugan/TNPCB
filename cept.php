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
                            <h1 class="text-white display-4">CEPT</h1>
                            <!-- breadcrumb -->
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                class="bi bi-house me-1"></i> Home</a></li>
                                    <li class="breadcrumb-item active">CEPT</li>
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
    <h4 class="sec_title mb-4 text-center">CEPT</h4>
        <!-- Table displaying CETP information -->
        <table id="cetp-table" class="table table-striped table-bordered table-hover table_lastclm-width" data-ordering="false">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Description</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Textile</td>
                    <td><a href="path-to-textile-file.pdf" class="btn btn-sm btn-primary" download>Click Here</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tannery</td>
                    <td><a href="path-to-tannery-file.pdf" class="btn btn-sm btn-primary" download>Click Here</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Electroplating</td>
                    <td><a href="path-to-electroplating-file.pdf" class="btn btn-sm btn-primary" download>Click Here</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include("footer.php"); ?>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#cetp-table').DataTable();
    });
</script>
