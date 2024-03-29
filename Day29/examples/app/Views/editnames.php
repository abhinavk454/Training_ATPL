<!DOCTYPE html>
<html>

<head>
    <title>CURD APP</title>
    <style>
        .container {
            max-width: 500px;
        }

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>

<body>
    <div>

        <h1>CURD APP</h1>

        <form method="post" id="update_user" name="update_user" action="<?= site_url('/update') ?>">
            <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">

            <div>
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $user_obj['name']; ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $user_obj['email']; ?>">
            </div>

            <div class="form-group">
                <button type="submit">Edit Data</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#update_user").length > 0) {
            $("#update_user").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        maxlength: 60,
                        email: true,
                    },
                },
                messages: {
                    name: {
                        required: "Name is required.",
                    },
                    email: {
                        required: "Email is required.",
                        email: "It does not seem to be a valid email.",
                        maxlength: "The email should be or equal to 60 chars.",
                    },
                },
            })
        }
    </script>
</body>

</html>