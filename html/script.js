$(document).ready(function() {
    const signInForm = $('#signin-form');
    const forgotPasswordLink = $('#forgot-password-link');
    const forgotPasswordForm = $('#forgot-password-form');
    const backToLoginLink = $('#back-to-login-link');
  
    forgotPasswordLink.on('click', function(event) {
      event.preventDefault();
      signInForm.addClass('d-none');
      forgotPasswordForm.removeClass('d-none');
    });
  
    backToLoginLink.on('click', function(event) {
      event.preventDefault();
      signInForm.removeClass('d-none');
      forgotPasswordForm.addClass('d-none');
    });
  
    const resetPasswordBtn = $('#reset-password-btn');
    resetPasswordBtn.on('click', function() {
      const forgotEmail = $('#forgot-email').val();
      // Here, you would handle the password reset logic and send a reset email to the provided email address.
      // For this basic example, we will just display an alert message.
      alert('A password reset email has been sent to ' + forgotEmail);
    });
  });

  function uploadPDB() {
    const fileInput = document.getElementById('pdbFile');
    const file = fileInput.files[0];
  
    if (file) {
      const reader = new FileReader();
  
      reader.onload = function(event) {
        // Process the file content here
        const pdbContent = event.target.result;
        // You can perform further parsing or manipulation of the PDB data here
  
        // For demonstration purposes, let's just log the content to the console
        console.log(pdbContent);
      };
  
      // Read the file as text
      reader.readAsText(file);
    } else {
      console.log('No file selected.');
    }
  }
  