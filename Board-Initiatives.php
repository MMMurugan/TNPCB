<?php include("header.php"); ?>

<!-- Inner intro START -->
<section class="pt-0 pb-0">
    <div class="containermm">
        <div class="row">
            <div class="col-12">
                <div class=" bg-dark-overlay-4 overflow-hidden card-bg-scale h-200 text-center"
                    style="background-image:url(assets/image/about_header.png); background-position: center left; background-size: cover;">
                    <!-- Card Image overlay -->
                    <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4">
                        <div class="w-100 my-auto">
                            <h1 class="text-white display-4">Board Initiatives</h1>
                            <!-- breadcrumb -->
                            <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                class="bi bi-house me-1"></i> Home</a></li>
                                    <li class="breadcrumb-item active">About Us</li>
                                    <li class="breadcrumb-item active">Board Initiatives</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* Container styles */




    /* Left sidebar styles */
    .leftbar {
        background-color: #f4f4f4;
        /* Light background color */


        position: sticky;
        top: 20px;
        /* Keep it fixed while scrolling */
        border-right: 2px solid #ddd;
        /* Border on the right side */
        /* background-image: linear-gradient(to right, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url(./assets/image/leftnavbg.jpg); */
        background-image: url(./assets/image/leftnavbg1.png);
        background-size: contain;

        position: sticky;
        top: 170px;
        height: 100vh;
    }

    /* Title styles for links */
    .sec_title_env {
        font-size: 16px;
        font-weight: bold;
        color: var(--bs-primary);
        ;
    }

    /* Link styles */
    .leftbar a {
        display: block;
        margin-bottom: 15px;
        text-decoration: none;
        color: var(--bs-primary);
        padding: 5px 0;
        text-align: center;
        transition: all 0.3s ease;
    }

    /* Hover effect for links */
    .leftbar a:hover {
        /* background-color: #f1f1f1; */
        border-radius: 4px;
    }

    /* Active link styling */
    .leftbar a.active {
        background-color: var(--bs-primary);
        font-weight: bold;
        border-radius: 4px;
        color: #ddd;
    }

    .leftbar a.active h4 {
        color: white;
    }

    /* Right content area */
    .rightbar {
        /* background-image: url(./assets/image/envawarenessbg.jpg); */
        padding: 20px;
        background-image: linear-gradient(to right, rgba(255, 255, 255, 0.65), rgba(255, 255, 255, 0.65)), url(./assets/image/envawarenessbg.jpg);
    }

    /* Section header styles */
    .rightbar h4 {
        font-size: 24px;
        font-weight: bold;
        margin-top: 30px;
        text-align: center;
    }

    /* Active section header */
    .rightbar h4.active {
        color: white;
        background-color: var(--bs-primary);
        padding: 5px;
    }
</style>




<div class="container">




    <div class="d-block d-md-none dropdown mt-3">
        <button class="btn  dropdown-toggle w-100 ms-2" type="button" data-bs-toggle="dropdown" data-bs-target="#mobileMenu" aria-expanded="false" aria-controls="mobileMenu" id="section-heading" style="background-color:var(--bs-primary) ;color: white;">
        Water Conservation
        </button>
        <ul class="dropdown-menu dropdown-menu-dark p-2" id="mobileMenu">
            <a href="#water-conservation" class="d-block py-2" onclick="changeHeading('Water Conservation')">Water Conservation</a>
            <a href="#cleaner-technologies" class="d-block py-2" onclick="changeHeading('Cleaner Technologies')">Cleaner Technologies</a>
            <a href="#waste-minimization" class="d-block py-2" onclick="changeHeading('Waste Minimization')">Waste Minimization</a>
            <a href="#energy-conservation" class="d-block py-2" onclick="changeHeading('Energy Conservation')">Energy Conservation</a>
            <a href="#demonstration-centre" class="d-block py-2" onclick="changeHeading('Technology Demonstration Centre')">Technology Demonstration Centre</a>
            <a href="#green-coverpgm" class="d-block py-2 text-wrap" onclick="changeHeading('Green Cover Programme')">Green Cover Programme</a>
        </ul>
    </div>



    <div class="row d-flex">



        <div class="col-3 leftbar d-none d-md-block  ">
            <a href="#water-conservation">
                <h4 class="m-0 sec_title_env text-center m-3">Water Conservation
                </h4>
            </a>
            <a href="#cleaner-technologies">
                <h4 class="m-0 sec_title_env text-center m-3">Cleaner Technologies</h4>
            </a>
            <a href="#waste-minimization">
                <h4 class="m-0 sec_title_env text-center m-3">Waste Minimization</h4>
            </a>
            <a href="#energy-conservation">
                <h4 class="m-0 sec_title_env text-center m-3">Energy Conservation</h4>
            </a>
            <a href="#demonstration-centre">
                <h4 class="m-0 sec_title_env text-center m-3">Technology Demonstration Centre</h4>
            </a>
            <a href="#green-coverpgm">
                <h4 class="m-0 sec_title_env text-center m-3">Green Cover Programme</h4>
            </a>
        </div>
        <div class="col-md-9 col-12 col-sm-12 col-lg-9 col-xl-9 col-xxl-9 rightbar">
            <h4 id="water-conservation" class="m-0 sec_title_env text-center m-3">Water Conservation</h4>
            <p>
                As a water conservation measure, three major industries in Manali and Basin Bridge area are
                utilizing about 25 MLD (million liters per day) of city sewage for cooling purposes in their plants
                after tertiary treatment. The textile processing dyeing units in the State including units at Tiruppur,
                have provided reverse osmosis plants for recovering the process water from the effluent. The
                recovered water is reused in the process. In sugar industries, water condensate from evaporators
                is reused. As a condition for issue of consent, industries have been instructed to provide rainwater
                harvesting arrangements. All the industries have set up rain water harvesting systems. The roof
                Stations Year
                Name of the river Year Action Plan
                top rainwater harvesting system has also been provided in the offices of the Tamilnadu Pollution
                Control Board.
            </p>
            <h4 id="cleaner-technologies" class="m-0 sec_title_env text-center m-3">Cleaner Technologies</h4>
            <p>
            <p>TNPCB has been concerned with promoting a holistic approach to environment protection by enforcing the adoption of cleaner technology rather than mere end-of-pipe treatment. Several industrial units in Tamil Nadu have switched over to cleaner technologies such as:</p>
            <ul>
                <li>Adoption of membrane cell process replacing mercury cell process in caustic soda manufacturing.</li>
                <li>Adoption of dry process instead of wet process to reduce air pollution in cement factories.</li>
                <li>Utilization of 25 to 30% of fly ash in Portland Pozzolana Cement manufacturing.</li>
                <li>Adoption of double conversion and double absorption technology in sulphuric acid manufacturing.</li>
                <li>Gas carburizing instead of cyanide salt in heat treatment and cyanide-free electroplating.</li>
                <li>Pulp and paper industries are encouraged to go in for elemental chlorine-free bleaching to reduce the formation of organo-chlorides, including dioxins.</li>
                <li>Industries consuming ozone-depleting substances are systematically changing to environment-friendly compounds.</li>
            </ul>
            </p>
            <h4 id="waste-minimization" class="m-0 sec_title_env text-center m-3">Waste Minimization</h4>
            <p>
                With the adoption of cleaner technologies there has been progress in waste recovery and waste
                minimization. Examples include recovery of materials such as chrome from tannery effluent and
                ammonia from fertilizers. Distilleries have been insisted to provide zero liquid discharge system
                and 7 distilleries have gone for bio-composting of their effluents with press mud of sugar factories
                for achieving zero liquid discharge of trade effluent and 5 distilleries have established
                concentration cum incineration system to dispose spent wash effluent and has achieved zero liquid
                discharge of trade effluent.
            </p>
            <h4 id="energy-conservation" class="m-0 sec_title_env text-center m-3">Energy Conservation </h4>
            <p>
                As a measure for fuel conservation and recovery, all the distilleries are recovering methane gas
                from their spent wash through anaerobic digestion. Major sugar factories have installed co-generation power plants. The sago units recover methane gas from their trade effluent through
                anaerobic digestion. Activated carbon manufacturing units have gone for waste heat recovery
                boiler and eliminated the dedicated boiler to produce steam for the activation purpose. This
                system eliminated the consumption of coal / wood as fuel for the boiler and thus avoided
                greenhouse gaseous emission. Other industrial units are encouraged to use less energy and it is
                being audited through the environmental statements of the unit. TNPCB has installed solar panels
                for all its 18 own office buildings to get solar energy. The new buildings which are under
                construction will be provided with solar panels.
            </p>
            <h4 id="demonstration-centre" class="m-0 sec_title_env text-center m-3">Technology Demonstration Centre</h4>
            <p>
                TNPCB on enforcement and its monitoring encourages Cleaner Technology, Waste Minimization
                Technology, Hazardous substance elimination by alternate process, reuse, and recycle systems,
                zero liquid discharge and best available technology to promote industrial development within the
                sustainable development in the State of Tamil Nadu. As the number of industries in Tamil Nadu is
                increasing at a rapid rate, crossing over 59000, the enforcement authorities and industries find it
                challenging to attain sustainable development and to derive suitable solution to address the
                environmental issues. In order to find a solution, TNPCB has established a Technology
                Demonstration Centre at Indian Institute of Technology Madras and have entered into a
                Memorandum of Understanding (MoU). A sum of Rs.5 crores has been allocated for this purpose.
                The Technology Demonstration Centre has conducted treatability studies for rice mills, sago and
                small scale textile processing units. The Centre has conducted awareness programme on fire
                management on waste landfill site for the Municipal Authorities, Fire Department and TNPCB
                officials. The Centre has also conducted technical workshop for sago industries for better
                understanding of the characteristics of sago waste water, anaerobic treatment, biogas generation,
                optimizing the process parameters to enhance the composition and quantity of biogas generated.
                This Centre designed and fabricated the Upflow Anaerobic Sludge Blanket Reactor (UASB) to
                demonstrate best available technology for anaerobic treatment of sago waste water and energy
                generation. Further work in this regard is continuing.
            </p>

            <h4 class="m-0 sec_title_env text-center m-3" id="green-coverpgm">Green Cover Programme</h4>
            <p>
                As a measure of pollution check, industries have been directed to utilize 25% of their land area for
                developing green belt with trees having a thick canopy cover. Accordingly, industries have taken
                action to plant adequate number of trees in and around the industrial premises.

            </p>

        </div>
    </div>
</div>



<script>
    // Function to highlight active link and section
    document.querySelectorAll('.leftbar a').forEach(link => {
        link.addEventListener('click', function() {
            // Remove active class from all links and section headers
            document.querySelectorAll('.leftbar a').forEach(a => a.classList.remove('active'));
            document.querySelectorAll('.rightbar h4').forEach(h4 => h4.classList.remove('active'));

            // Add active class to clicked link
            this.classList.add('active');

            // Add active class to corresponding section header
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.classList.add('active');
            }
        });
    });


    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                const offset = 250; // Change this value to adjust the offset
                const targetPosition = targetElement.offsetTop - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });
            }
        });
    });

    function changeHeading(newHeading) {
        document.getElementById('section-heading').innerText = newHeading;
    }
</script>

<?php include("footer.php"); ?>