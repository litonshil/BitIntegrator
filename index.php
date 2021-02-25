<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Integrator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <div class="card rounded shadow shadow-sm">
                            <div class="card-header text-center">
                                <h3 class="mb-0">Bit Intergrator</h3>
                            </div>
                            <div class="card-body">
                                <form action="callback.php" class="form" role="form" autocomplete="off" id="formAuthorize" novalidate="" method="POST">
                                    <div class="form-group">
                                        <label for="home_url">Homepage URL</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" value="http://localhost:81/integrator" name="home_url" id="home_url" required="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Authorize Redirect URI</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" value="http://localhost:81/integrator/callback.php" id="auth_uri" required="" readonly>
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="client_Id">CLient-ID</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="client_Id" id="client_Id" required="">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Client-Secret</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="client_Secret" id="client_Secret" required="" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <input type="submit" name="btn_authorize" class="btn btn-success btn-lg" id="btnAuthorize" value="Authorize" />
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>