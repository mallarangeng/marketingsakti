    <div class="row">

        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                        <a class="closebox"><i class="fa fa-times"></i></a>
                    </div>
                    Displaying Errors within Field Labels
                </div>
                <div class="panel-body">
                    <p>

                        With errorPlacement() function you can easily change placement for error. With message properties you can set your own text for error message.

                    </p>

                    <form role="form" id="form_2">
                        <div class="form-group"><label for="name">First name</label> <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control" required></div>
                        <div class="form-group"><label for="last_name">Last name</label> <input type="text" id="last_name" placeholder="Enter your last name" class="form-control" name="last_name"></div>
                        <div class="form-group"><label for="url">Official website</label> <input type="text" id="url" placeholder="www.example.com" class="form-control" name="url"></div>
                        <div class="form-group"><label for="number">Phone number</label> <input type="text" id="number" placeholder="Phone number" class="form-control" name="number"></div>
                        <div class="form-group"><label for="username">Username</label> <input type="text" id="username" placeholder="Login" class="form-control" name="username"></div>
                        <div>
                            <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        

    </div>
    

    <!-- Right sidebar -->s




<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>



<script>

    $(function(){

        $("#form").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 3
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                max: {
                    required: true,
                    maxlength: 4
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        $("#form_2").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                username: {
                    required: true,
                    minlength: 5
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                last_name: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                number: {
                    required: "(Please enter your phone number)",
                    number: "(Please enter valid phone number)"
                },
                last_name: {
                    required: "This is custom message for required",
                    minlength: "This is custom message for min length"
                }
            },
            submitHandler: function(form) {
                form.submit();
            },
            errorPlacement: function(error, element) {
                $( element )
                        .closest( "form" )
                        .find( "label[for='" + element.attr( "id" ) + "']" )
                        .append( error );
            },
            errorElement: "span",
        });


    });
</script>