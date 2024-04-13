$(document).ready(function(){
    $('#createForm').on('submit', function(e){
        e.preventDefault(); // Prevent default form submission

        // Collect form data
        var formData = new FormData(this);

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '/create', // URL of your Laravel route
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                console.log(response);
                if(response.success) {
                    // Show success message or handle success scenario
                    alert(response.message);
                } else {
                    // Show error message or handle error scenario
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
                // Show error message or handle error scenario
                alert('Error: ' + xhr.responseText);
            }
        });
    }); 
});
