
$(document).ready(function() {

    $("#regForm").submit(function(event) {

        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let phone = $("#phone").val();

        if (name === "" || email === "" || phone === "") {
            alert("Please fill all required details!");
            event.preventDefault();
        }
        else {
            alert("Your application is being submitted!");
        }

    });

});
