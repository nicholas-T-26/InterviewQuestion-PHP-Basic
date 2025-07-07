// Wait for the document to be fully loaded before binding events
$(document).ready(function() {
    // Handle click event for the submit button
    $('#submitBtn').on('click', function() {
        // Retrieve and trim the username input
        const username = $('#username').val().trim();
        
        // Validate input for emptiness
        if (!username) {
            displayResponse('Please enter a username.', 'text-red-500');
            return;
        }

        // Perform AJAX request to verify username
        $.ajax({
            url: 'info.php',
            type: 'POST',
            data: { username: username },
            dataType: 'json', 
            success: function(response) {
                // Check if verification is successful
                if (response.status === 'success') {
                    // Display pop-up alert for successful verification
                    alert('Success: Username Verified!');
                    displayResponse(response.message, 'text-green-500');
                } else {
                    // Display error message in the response div
                    displayResponse(response.message, 'text-red-500');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle AJAX or JSON parsing errors
                const errorMessage = 'Error: Unable to process response. Check console for details.';
                displayResponse(errorMessage, 'text-red-500');
                // Log detailed error information
                console.error('AJAX Error:', textStatus, errorThrown);
                console.error('Raw Response:', jqXHR.responseText);
            }
        });
    });

    // Function to display response messages with appropriate styling
    function displayResponse(message, className) {
        $('#response').text(message).removeClass().addClass(className);
    }
});
