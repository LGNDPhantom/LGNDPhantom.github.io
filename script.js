// script.js
// Function to switch tabs
function openCategory(categoryName) {
    const tabContents = document.querySelectorAll('.tab-content');
    const tabButtons = document.querySelectorAll('.tab-button');

    // Hide all tab contents
    tabContents.forEach(content => {
        content.style.display = 'none';
    });

    // Show the selected tab content
    document.getElementById(categoryName).style.display = 'block';

    // Update active tab button
    tabButtons.forEach(button => {
        button.classList.remove('active');
        if (button.innerText === categoryName) {
            button.classList.add('active');
        }
    });
}

// Initially show the first category
openCategory('Category1');
