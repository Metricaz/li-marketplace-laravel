document.addEventListener('DOMContentLoaded', (event) => {
    const checkbox = document.getElementById('myCheckbox');

    checkbox.addEventListener('change', () => {
        const isChecked = checkbox.checked;
        console.log('Checkbox state:', isChecked);

        // Additional code to handle the checkbox state change can go here
    });
});


console.log('asdrubal')