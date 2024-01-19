// Function to submit the form
function submitForm() {
  // Assuming you have a confirmation message element with id "confirmation-message"
  var confirmationMessage = document.getElementById('confirmation-message');

  // Your existing code for form submission here

  // Display the confirmation message
  confirmationMessage.style.display = 'block';

  // Set a timeout to hide the confirmation message after 5000 milliseconds (5 seconds)
  setTimeout(function () {
    confirmationMessage.style.display = 'none';

    // Assuming you have a form element with id "appointmentsForm"
    var form = document.getElementById('appointmentsForm');

    // Reset the form to clear the fields
    form.reset();
  }, 5000);
}
