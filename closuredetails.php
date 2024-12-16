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
                            <h1 class="text-white display-4">Closure & Suspension/Revocation Data</h1>
                            <!-- breadcrumb -->
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i>
                                            Home</a></li>
                                    <li class="breadcrumb-item active">Closure & Suspension/Revocation</li>
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
        <h4 class="sec_title mb-4 text-center">Closure & Suspension/Revocation Data</h4>

        <!-- Filter Form for Month and Year -->
        <div class="row mb-3 justify-content-end">
            <div class="col-auto d-flex flex-column align-items-end">
                <label for="month-filter" class="form-label">Select Month</label>
                <select id="month-filter" class="form-select">
                    <option value="">All Months</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="col-auto d-flex flex-column align-items-end">
                <label for="year-filter" class="form-label">Select Year</label>
                <select id="year-filter" class="form-select">
                    <option value="">All Years</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </div>

        <!-- Table for 2024 -->
        <!-- <h5 class="text-center">Closure & Suspension/Revocation Data for 2023</h5> -->
        <table id="closure-suspension-2024" class="table table-striped table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th class="text-center">S.No</th>
                    <th>Month</th>
                    <th>No. of Industries Issued Closure</th>
                    <th>No. of Industries Issued Suspension/Revocation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>November-2024</td>
                    <td>22</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>October-2024</td>
                    <td>17</td>
                    <td>28</td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>September-2024</td>
                    <td>04</td>
                    <td>09</td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>August-2024</td>
                    <td>15</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>July-2024</td>
                    <td>9</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td>June-2024</td>
                    <td>6</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td class="text-center">7</td>
                    <td>May-2024</td>
                    <td>37</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    <td>April-2024</td>
                    <td>2</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td class="text-center">9</td>
                    <td>March-2024</td>
                    <td>7</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td class="text-center">10</td>
                    <td>February-2024</td>
                    <td>6</td>
                    <td>19</td>
                </tr>
                <tr>
                    <td class="text-center">11</td>
                    <td>January-2024</td>
                    <td>13</td>
                    <td>13</td>
                </tr>
            </tbody>
        </table>


        <!-- Table for 2023 -->
        <h5 class="text-center">Closure & Suspension/Revocation Data for 2023</h5>
        <table id="closure-suspension-2023" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Month</th>
                    <th>No. of Industries Issued Closure</th>
                    <th>No. of Industries Issued Suspension/Revocation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>December-2023</td>
                    <td>12</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>November-2023</td>
                    <td>09</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>October-2023</td>
                    <td>09</td>
                    <td>31</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>September-2023</td>
                    <td>13</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>August-2023</td>
                    <td>22</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>July-2023</td>
                    <td>16</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>June-2023</td>
                    <td>08</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>May-2023</td>
                    <td>11</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>April-2023</td>
                    <td>59</td>
                    <td>39</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>March-2023</td>
                    <td>65</td>
                    <td>34</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>February-2023</td>
                    <td>24</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>January-2023</td>
                    <td>14</td>
                    <td>27</td>
                </tr>
            </tbody>
        </table>

        <!-- Table for 2022 -->
        <h5 class="text-center">Closure & Suspension/Revocation Data for 2022</h5>
        <table id="closure-suspension-2022" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Month</th>
                    <th>No. of Industries Issued Closure</th>
                    <th>No. of Industries Issued Suspension/Revocation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>December-2022</td>
                    <td>125</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>November-2022</td>
                    <td>13</td>
                    <td>31</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>October-2022</td>
                    <td>74</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>September-2022</td>
                    <td>10</td>
                    <td>37</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>August-2022</td>
                    <td>24</td>
                    <td>29</td>
                </tr>
            </tbody>
        </table>

    </div>
</section>

<?php include("footer.php"); ?>

<script>
$(document).ready(function() {
    // Initialize DataTable for each table
    const table2024 = new DataTable('#closure-suspension-2024');
    const table2023 = new DataTable('#closure-suspension-2023');
    const table2022 = new DataTable('#closure-suspension-2022');

    // Filter functionality
    $('#month-filter, #year-filter').on('change', function() {
        const month = $('#month-filter').val().toLowerCase();
        const year = $('#year-filter').val();

        // Filter for each table
        table2024.column(1).search(month && year ? `${month}-${year}` : '').draw();
        table2023.column(1).search(month && year ? `${month}-${year}` : '').draw();
        table2022.column(1).search(month && year ? `${month}-${year}` : '').draw();
    });
});
</script>