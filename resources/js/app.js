// import './bootstrap';
//
const clickableRows = document.querySelectorAll('.clickable-row');
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

const button = document.querySelector('button');
button.addEventListener('click', (e) => {
    // window.location.href = 'http://127.0.0.1:8000/posts' + '?title=Est tempora';
    fetch('http://127.0.0.1:8000/posts' + '?title=Est tempora')
        .then(data => data.text())
        .then(data => console.log(data));

})
