
  
        /*$.validator.setDefaults({
         submitHandler: function() { alert("submitted!"); }
         });*/

        $(document).ready(function () {

            // validate signup form on keyup and submit
            $("#login-form").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 3
                    },
                    password: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    username: {
                        required: "Informe um usuario",
                        minlength: "Your username must consist of at least 3 characters"
                    },
                    password: {
                        required: "Informe uma senha",
                        minlength: "Your password must be at least 3 characters long"
                    }
                }
            });

        });

