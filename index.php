<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Crud Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<body>
    <div class="container">
        <h1 class="text-primary text-uppercase text-center">Ajax CRUD Operation</h1>

        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
        </div>
        <h2 class="text-danger"> All Record</h2>
        <div id="records_contant">

        </div>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ajax CRUD Operation</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Firstname:</label>
                            <input type="text" class="form-control" id="firstname" placeholder="First name">
                        </div>
                        <div class=" form-group">
                            <label> Lastname:</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Last name">
                        </div>
                        <div class=" form-group">
                            <label>Email:</label>
                            <input type="Email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class=" form-group">
                            <label>Mobile:</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile number">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        funtion addRecord() {
                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var email = $('#email').val();
                var mobile = $('#mobile').val();

                $.ajax({
                    url: "backend1.php",
                    type: 'post',
                    data: {
                        firstname: firstname,
                        lastname: lastname,
                        email: email,
                        mobile: mobile
                    },
                    success: function(data) {
                        readRecord();
                    }
                });
    </script>
</body>

</html>