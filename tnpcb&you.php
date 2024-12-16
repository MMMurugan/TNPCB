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
                            <h1 class="text-white display-4">TNPCB & YOU</h1>
                            <!-- breadcrumb -->
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i>
                                            Home</a></li>
                                    <li class="breadcrumb-item active">TNPCB & YOU</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0 pb-0 text-center">
    <div class="container">
        <div class="row">
            <h4 class="sec_title mb-4 text-center">TNPCB & YOU</h4>
            <!-- Left Column: Date filter -->
            <!-- <div class="col-md-4">
                
                <div class="mb-4">
                    <label for="date-filter" class="form-label">Filter by Date:</label>
                    <select id="date-filter" class="form-select">
                        <option value="">All Years</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
            </div> -->

            <!-- Right Column: Search bar -->

        </div>

        <!-- Table displaying TNPCB & YOU -->
        <table id="tnpcb-table" class="table table-striped table-bordered table-hover table_lastclm-width"
            data-ordering="false">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Description</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td>1</td>
                    <td>TNPCB & YOU - 2024</td>
                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>TNPCB & YOU - 2023</td>
                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>TNPCB & YOU - 2022</td>
                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>TNPCB & YOU - 2021</td>
                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include("footer.php"); ?>

<script>
$(document).ready(function() {
    // Initialize DataTable
    $('#tnpcb-table').DataTable();
});
</script>