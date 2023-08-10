// import './bootstrap';
//
document.addEventListener('DOMContentLoaded', function () {
    // Find all clickable rows
    const clickableRows = document.querySelectorAll('.clickable-row');

    // Add click event listener to each row
    clickableRows.forEach(function (row) {
        row.addEventListener('click', function () {
            const url = row.getAttribute('data-url');

            // Redirect to the URL
            window.location.href = url;
        });
    });
});
