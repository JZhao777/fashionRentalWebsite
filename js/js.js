document.addEventListener('DOMContentLoaded', function () {
    const paginationButtons = document.querySelectorAll('.pagination-container button');
    const tables = document.querySelectorAll('#mainTable, #second-table');
    const tableDisplays = document.querySelectorAll('.table-display');
    let activeTableDisplay = tableDisplays[0];
  
    function showTable(pageNumber) {
      tables.forEach(function (table, index) {
        if (index === pageNumber) {
          table.style.display = 'block';
          activeTableDisplay.style.display = 'none';
          activeTableDisplay = tableDisplays[index];
          activeTableDisplay.style.display = 'block';
        } else {
          table.style.display = 'none';
        }
      });
    }
  
    paginationButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        const targetPage = parseInt(button.getAttribute('data-page'));
  
        // Show the appropriate table based on the targetPage
        showTable(targetPage);
  
        // Update button states
        paginationButtons.forEach(function (otherButton) {
          otherButton.classList.remove('active');
          otherButton.removeAttribute('disabled', 'disabled');
        });
  
        button.classList.add('active');
        if (button.id.startsWith('previous')) {
          button.nextElementSibling.classList.add('active');
          button.setAttribute('disabled', 'disabled');
        } else if (button.id.startsWith('next')) {
          button.previousElementSibling.classList.add('active');
          button.setAttribute('disabled', 'disabled');
        } else {
          if (button.nextElementSibling.id.startsWith('next')) {
            button.nextElementSibling.removeAttribute('disabled', 'disabled');
          }
          if (button.previousElementSibling.id.startsWith('previous')) {
            button.previousElementSibling.removeAttribute('disabled', 'disabled');
          }
        }
      });
    });
  
    // Initialize the first table and table-display to be visible
    showTable(0);
  });
  