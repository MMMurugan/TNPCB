


// Get buttons
const blueButton = document.getElementById("blue");
const greenButton = document.getElementById("green");

// Function to change theme
function changeTheme(newTheme) {
    // Remove any existing theme class
    document.body.className = ""; // Clears all classes on <body>

    // Add the new theme class
    document.body.classList.add(newTheme);
}

// Event listeners
blueButton.addEventListener("click", () => changeTheme("blue"));
greenButton.addEventListener("click", () => changeTheme("green"));




const rowsPerPage = 5; // Set the number of rows per page
let currentPage = 1; // Track the current page
let visibleRows = []; // Store visible rows after applying filters

function filterFiles() {
    const datePicker = document.getElementById('custom-date-picker').value;
    const tableRows = document.querySelectorAll('#pdf-table tbody tr');
    visibleRows = [];

    tableRows.forEach(row => {
        const rowDate = row.getAttribute('data-date');
        if (datePicker && rowDate !== datePicker) {
            row.style.display = 'none';
        } else {
            row.style.display = '';
            visibleRows.push(row); // Collect visible rows for pagination
        }
    });

    if (visibleRows.length === 0) {
        showNoDataMessage();
    } else {
        hideNoDataMessage();
    }

    paginate(); // Apply pagination after filtering
}

function paginate() {
    const totalPages = Math.ceil(visibleRows.length / rowsPerPage); // Total number of pages
    const paginationControls = document.getElementById('pagination-controls');

    // Clear existing pagination buttons
    paginationControls.innerHTML = '';

    // Show "No data found" message if no visible rows
    if (totalPages === 0) {
        showNoDataMessage();
        return;
    } else {
        hideNoDataMessage();
    }

    // Create Previous button
    const prevButton = document.createElement('button');
    prevButton.textContent = '<';
    prevButton.className = 'btn btn-outline-primary mx-1';
    prevButton.disabled = currentPage === 1;
    prevButton.onclick = () => goToPage(currentPage - 1);
    paginationControls.appendChild(prevButton);

    // Create First Page button
    const firstButton = document.createElement('button');
    firstButton.textContent = '1';
    firstButton.className = 'btn btn-outline-primary mx-1';
    firstButton.onclick = () => goToPage(1);
    paginationControls.appendChild(firstButton);

    // Display Current Page Button
    const currentPageButton = document.createElement('button');
    currentPageButton.textContent = `${currentPage} of ${totalPages}`;
    currentPageButton.className = 'btn btn-outline-secondary mx-1';
    paginationControls.appendChild(currentPageButton);

    // Create Last Page button
    const lastButton = document.createElement('button');
    lastButton.textContent = `${totalPages}`;
    lastButton.className = 'btn btn-outline-primary mx-1';
    lastButton.onclick = () => goToPage(totalPages);
    paginationControls.appendChild(lastButton);

    // Create Next button
    const nextButton = document.createElement('button');
    nextButton.textContent = '>';
    nextButton.className = 'btn btn-outline-primary mx-1';
    nextButton.disabled = currentPage === totalPages;
    nextButton.onclick = () => goToPage(currentPage + 1);
    paginationControls.appendChild(nextButton);

    // Update table rows based on the current page
    updateTable();
}

function updateTable() {
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    // Hide all rows first
    const tableRows = document.querySelectorAll('#pdf-table tbody tr');
    tableRows.forEach(row => row.style.display = 'none');

    // Show rows for the current page
    const pageRows = visibleRows.slice(start, end);
    pageRows.forEach(row => row.style.display = '');

    // Show "No data found" message if no rows for the current page
    if (pageRows.length === 0) {
        showNoDataMessage();
    } else {
        hideNoDataMessage();
    }
}

function goToPage(pageNumber) {
    currentPage = pageNumber;
    updateTable(); // Update the table display based on the selected page
    paginate(); // Update the pagination controls
}

function showNoDataMessage() {
    const tableBody = document.getElementById('table-body');
    const noDataRow = document.createElement('tr');
    noDataRow.id = 'no-data-row';
    noDataRow.innerHTML = `
        <td colspan="3" class="text-center text-muted">No data found</td>
    `;
    tableBody.appendChild(noDataRow);
}

function hideNoDataMessage() {
    const noDataRow = document.getElementById('no-data-row');
    if (noDataRow) {
        noDataRow.remove();
    }
}

document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#custom-date-picker", {
        dateFormat: "Y-m-d", // Adjust the format as needed
    });

    filterFiles(); // Initial filter and pagination on page load

    const placeholderText = "Pick a date"; // Text to display in the placeholder
    let letterIndex = 0; // Current letter index

    function typePlaceholder() {
        const inputField = document.getElementById("custom-date-picker");

        // Only proceed if the input field exists
        if (inputField) {
            // Append one letter at a time to the placeholder
            inputField.placeholder = placeholderText.substring(0, letterIndex + 1);

            // Increment the index and reset if the full text has been displayed
            letterIndex++;
            if (letterIndex > placeholderText.length) {
                letterIndex = 0; // Reset to loop the animation
            }
        } else {
            console.error("Element with ID 'custom-date-picker' not found.");
        }
    }

    // Start typing effect every 200ms
    setInterval(typePlaceholder, 200);
});
