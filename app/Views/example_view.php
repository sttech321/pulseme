<!DOCTYPE html>
<html>
<head>
    <title>AJAX Form Submission</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="ajaxForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="customer_name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="customer_email" required>
        <br><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="customer_phone" required>
        <br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="customer_address" required></textarea>
        <br><br>
        <label for="campaignid">Campaign ID:</label>
        <input type="text" id="campaignid" name="campaignid" required>
        <br><br>
        <label for="employeeid">Employee ID:</label>
        <input type="text" id="employeeid" name="employeeid" required>
        <br><br>
        <input type="hidden" id="actionType" name="actionType" value=""/>
        <button type="submit" id="btn1" name="submitButton" value="btn1">Submit with Button 1</button>
        <button type="submit" id="btn2" name="submitButton" value="btn2">Submit with Button 2</button>
    </form>

    <div id="responseMessage"></div>

    <script>
        $(document).ready(function() {
            $('#ajaxForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                var formData = $(this).serialize(); // Serialize form data
                var actionType = $('#actionType').val(); // Get the action type (button clicked)

                $.ajax({
                    url: '<?= base_url('example/submit') ?>', // URL to submit the form
                    type: 'POST',
                    data: formData + '&actionType=' + actionType, // Append the action type to the form data
                    success: function(response) {
                        $('#responseMessage').html(response); // Display response message
                    },
                    error: function(xhr, status, error) {
                        $('#responseMessage').html('Error: ' + error); // Handle error
                    }
                });
            });

            $('#btn1').on('click', function() {
                $('#actionType').val('sendbio'); // Set actionType to 'sendbio' when btn1 is clicked
            });

            $('#btn2').on('click', function() {
                $('#actionType').val('sendpulsecheck'); // Set actionType to 'sendpulsecheck' when btn2 is clicked
            });
        });
    </script>
</body>
</html>
