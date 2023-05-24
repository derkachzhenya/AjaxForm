$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        name: $("#name").val(),
        surname: $("#surname").val(),
        email: $("#email").val(),
        password: $("#password").val(),
        passAgain: $("#passAgain").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "validation.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
        if (!data.success) {
            if (data.errors.name) {
              $("#name-group").addClass("has-error");
              $("#name-group").append(
                '<div class="text-danger">' + data.errors.name + "</div>"
              );
            }

            if (data.errors.surname) {
                $("#surname-group").addClass("has-error");
                $("#surname-group").append(
                  '<div class="text-danger">' + data.errors.surname + "</div>"
                );
              }
    
            if (data.errors.email) {
              $("#email-group").addClass("has-error");
              $("#email-group").append(
                '<div class="text-danger">' + data.errors.email + "</div>"
              );
            }

            if (data.errors.password) {
              $("#password-group").addClass("has-error");
              $("#password-group").append(
                '<div class="text-danger">' + data.errors.password + "</div>"
              );
            }

            if (data.errors.passAgain) {
              $("#passAgain-group").addClass("has-error");
              $("#passAgain-group").append(
                '<div class="text-danger">' + data.errors.passAgain + "</div>"
              );
            }
    
           
          } else {
            $("form").html(
              '<div class="alert alert-success">' + data.message + "</div>"
            );
          }
      });
  
      event.preventDefault();    
      
    });
  });



