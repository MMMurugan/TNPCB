<?php include("header.php"); ?>

<!-- =======================
Inner intro START -->
<section class="pt-0">
    <div class="containermm">
        <div class="row">
            <div class="col-12">
                <div class=" bg-dark-overlay-4 overflow-hidden card-bg-scale h-200 text-center"
                    style="background-image:url(assets/image/about_header.png); background-position: center left; background-size: cover;">
                    <!-- Card Image overlay -->
                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                        <div class="w-100 my-auto">
                            <h1 class="text-white display-4">CEPI ACTION PLAN</h1>
                            <!-- breadcrumb -->
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                class="bi bi-house me-1"></i> Home</a></li>
                                    <li class="breadcrumb-item active">CEPI ACTION PLAN</li>
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
        <h4 class="sec_title mb-4 text-center"> EVALUATION OF CEPI SCORE & ACTION PLAN FOR CEPI AREA OF TAMILNADU</h4>

        <div class="table-responsive">
            <!-- Table displaying PDFs -->
            <table id="pdf-table" class="table table-bordered table-hover w-75 m-auto" data-ordering="false">
                <thead>
                    <tr>
                        <th class="bg-secondary bg-opacity-25 ">S.No</th>
                        <th class="bg-secondary bg-opacity-25 ">Action plan for (Location)</th>
                        <th class="bg-secondary bg-opacity-25 ">View/download</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <!-- Example rows, add more as needed -->
                    <tr>
                        <td>1</td>
                        <td>Manali, TamilNadu</td>
                        <td><a href="./flatpickr date/pdf/TNPCB Website changes as per 11.pdf" download class="btn btn-sm btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Coimbatore-SIDCO Industrial Estate, Kurichi</td>
                        <td><a href="files/File2.pdf" download class="btn btn-sm btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Erode Industrial Cluster, Erode District</td>
                        <td><a href="files/File1.pdf" download class="btn btn-sm btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>SIPCOT Industrial Complex, Cuddalore</td>
                        <td><a href="files/File2.pdf" download class="btn btn-sm btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mettur, Salem District</td>
                        <td><a href="files/File1.pdf" download class="btn btn-sm btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Tiruppur</td>
                        <td><a href="files/File2.pdf" download class="btn btn-sm btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Thoothukudi</td>
                        <td><a href="files/File1.pdf" download class="btn btn-sm btn-success">Download</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>SIPCOT Industrial Complex, Ranipet, Vellore District</td>
                        <td><a href="files/File1.pdf" download class="btn btn-sm btn-success">Download</a></td>
                    </tr>

                    <!-- More rows here -->
                </tbody>
            </table>
        </div>
    </div>

</section>

<div class="container page_cepiactionplan">
    <!-- Box 1 -->
    <div class="cover">
        <div class="boxx">
            <div class="d-flex justify-content-between">
                <h6>Actions to be included</h6>
                <button id="viewBtn1">View</button>
            </div>
        </div>
    </div>

    <a href="path_to_your_pdf_1.pdf" class="pdf-link" id="pdfLink1" target="_blank">
        <i class="fas fa-file-pdf"></i> View PDF 1
    </a>

    <!-- Box 2 -->
    <div class="cover">
        <div class="boxx">
            <div class="d-flex justify-content-between">
                <h6>More Actions</h6>
                <button id="viewBtn2">View</button>
            </div>
        </div>
    </div>
    <a href="path_to_your_pdf_2.pdf" class="pdf-link" id="pdfLink2" target="_blank">
        <i class="fas fa-file-pdf"></i> View PDF 2
    </a>

    <!-- Box 3 -->
    <div class="cover">
        <div class="boxx">
            <div class="d-flex justify-content-between">
                <h6>Extra Actions</h6>
                <button id="viewBtn3">View</button>
            </div>
        </div>
    </div>
    <a href="path_to_your_pdf_3.pdf" class="pdf-link" id="pdfLink3" target="_blank">
        <i class="fas fa-file-pdf"></i> View PDF 3
    </a>

    <!-- Box 4 -->
    <div class="cover">
        <div class="boxx">
            <div class="d-flex justify-content-between">
                <h6>Additional Actions</h6>
                <button id="viewBtn4">View</button>
            </div>
        </div>
    </div>
    <a href="path_to_your_pdf_4.pdf" class="pdf-link" id="pdfLink4" target="_blank">
        <i class="fas fa-file-pdf"></i> View PDF 4
    </a>
</div>

<?php include("footer.php"); ?>
<script>
    // Add event listeners for all buttons
    document.getElementById("viewBtn1").addEventListener("click", function() {
        togglePdfLink("pdfLink1");
    });

    document.getElementById("viewBtn2").addEventListener("click", function() {
        togglePdfLink("pdfLink2");
    });

    document.getElementById("viewBtn3").addEventListener("click", function() {
        togglePdfLink("pdfLink3");
    });

    document.getElementById("viewBtn4").addEventListener("click", function() {
        togglePdfLink("pdfLink4");
    });

    // Function to toggle PDF link visibility
    function togglePdfLink(linkId) {
        var pdfLink = document.getElementById(linkId);
        pdfLink.classList.toggle("show");
    }
</script>