function openLoginForm() {
    $(".popup").hide();
    $("#login-form").show();
}

function closeLoginForm() {
    $("#login-form").hide();
}

function newFeedbackForm() {
    $(".popup").hide();
    $("#feedback-new-popup").show();
}

function closeFeedbackForm() {
    $("#feedback-new-popup").hide();
    $("#feedback-update-popup").hide();
}
$(document).ready(function() {
    $("#target-content").load("feedbacks.php?page=1");
    $("#target-content").on('click', '#pagination li', function(e){
        e.preventDefault();
        // $("#target-content").html('loading...');
        $("#pagination li").removeClass('active');
        $(this).addClass('active');
        var page = $(this).find("a").attr('href');
        $("#target-content").load(page);
    });

    $("#feedback-new-form").submit(function(event){
        // Stop form from submitting normally
        event.preventDefault();
        
        /* Serialize the submitted form control values to be sent to the web server with the request */
        var formValues = $(this).serialize();
        
        // Send the form data using post
        $.post("feedback_new.php", formValues, function(response){
            $("#feedback-new-popup").hide();
            $(".flash-message").html(response.message);
            if(response.success) {
                $("#feedback-new-form").trigger("reset");
                $("#target-content").load("feedbacks.php?page=1");
            }
        });
    });

    $("#feedback-update-form").submit(function(event){
        // Stop form from submitting normally
        event.preventDefault();
        
        /* Serialize the submitted form control values to be sent to the web server with the request */
        var formValues = $(this).serialize();
        
        // Send the form data using post
        $.post("feedback_update.php", formValues, function(response){
            // Display the returned data in browser
            $("#feedback-update-popup").hide();
            $(".flash-message").html(response.message);
            if(response.success) {
                $("#feedback-update-form").trigger("reset");
                let page = $("#target-content li.active a").attr('href');
                $("#target-content").load(page);
            }
            
        });
    });

    $("#target-content").on("click", ".update-feedback", function() {
        let id = $(this).data('id');
        $.get("feedback_read.php", {id: id}, function(response){
            if(response.success) {
                let data = response.data;
                $("#feedback-update-form input[name=guest-name]").val(data["guest_name"]);
                $("#feedback-update-form input[name=guest-email]").val(data["guest_email"]);
                $("#feedback-update-form input[name=id]").val(data["id"]);
                $("#feedback-update-form textarea[name=msg]").val(data["feedback_content"]);
                $(".popup").hide();
                $("#feedback-update-popup").show();
            } else {
                $(".flash-message").html(response.message);
            }
            
        });
    });
    
    $("#target-content").on("click", ".delete-feedback", function() {
        if(confirm("Delete this message?")) {
            let id = $(this).data('id');
            $.post("feedback_delete.php", {id: id}, function(response){
                $(".flash-message").html(response.message);
                if(response.success) {
                    let page = $("#target-content li.active a").attr('href');
                    $("#target-content").load(page);
                    $("#feedback-update-popup").hide();
                }
            });
        }
    });
});