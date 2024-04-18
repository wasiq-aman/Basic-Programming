$(document).ready(function() {
    $('#registration_form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            subject: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Name should have at least 2 characters"
            },
            email: "Please enter a valid email address",
            phone: {
                required: "Please enter your phone number",
                number: "Please enter a valid phone number",
                minlength: "Phone number should have 10 digits",
                maxlength: "Phone number should have 10 digits"
            },
            subject: "Please enter a subject"
        },
        submitHandler: function(form) {
            // You can perform additional actions here before form submission
            form.submit();
            // For demonstration purposes, let's show a confirmation message
            alert("Form submitted successfully!");
        }
    });
});
