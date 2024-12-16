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
                            <h1 class="text-white display-4">17 Categories of Highly Polluting Industries</h1>
                            <!-- breadcrumb -->
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i>
                                            Home</a></li>
                                    <li class="breadcrumb-item active">Highly Polluting Industries</li>
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
    <div class="container mt-0">
        <h4 class="sec_title mb-4 text-center">17 Categories of Highly Polluting Industries</h4>
        <!-- Table displaying 17 categories -->
        <table id="polluting-industries-table"
            class="table table-striped table-bordered table-hover table_lastclm-width" data-ordering="false">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Category</th>
                    <th>View Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sugar</td>
                    <td><a href="path-to-sugar-details.pdf" class="btn btn-sm btn-primary " download>View</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cement</td>
                    <td><a href="path-to-cement-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Distillery</td>
                    <td><a href="path-to-distillery-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Petrochemical</td>
                    <td><a href="path-to-petrochemical-details.pdf" class="btn btn-sm btn-primary" download>View</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Pulp & Paper</td>
                    <td><a href="path-to-pulp-paper-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Fertilizer</td>
                    <td><a href="path-to-fertilizer-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Tannery</td>
                    <td><a href="path-to-tannery-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Pesticides</td>
                    <td><a href="path-to-pesticides-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Thermal Power Station</td>
                    <td><a href="path-to-thermal-power-details.pdf" class="btn btn-sm btn-primary" download>View</a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Caustic Soda</td>
                    <td><a href="path-to-caustic-soda-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Pharmaceuticals</td>
                    <td><a href="path-to-pharmaceuticals-details.pdf" class="btn btn-sm btn-primary" download>View</a>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Dye and Dye Stuff</td>
                    <td><a href="path-to-dye-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Refinery</td>
                    <td><a href="path-to-refinery-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Copper Smelter</td>
                    <td><a href="path-to-copper-smelter-details.pdf" class="btn btn-sm btn-primary" download>View</a>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Iron & Steel</td>
                    <td><a href="path-to-iron-steel-details.pdf" class="btn btn-sm btn-primary" download>View</a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Zinc Smelter</td>
                    <td>Nil</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Aluminium</td>
                    <td>Nil</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include("footer.php"); ?>

<script>
$(document).ready(function() {
    // Initialize DataTable
    $('#polluting-industries-table').DataTable({
        "paging": false,
        "info": false
    });
});
</script>