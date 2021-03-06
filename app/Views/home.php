<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('/template') ?>/style.css" />

    <title>Hello, world!</title>
</head>

<body id="intro">
    <div class="container h-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-md-12 col-lg-5 d-flex align-items-center">
                <div class="container intro p-5">
                    <h1 class="display-2 fw-bold">Jobsfree</h1>
                    <p class="lead">Hey you there!</p>
                    <p class="lead">Create your own resume with us.</p>
                    <p class="lead">Try it for free</p>
                    <a href="<?= base_url('/login') ?>" class="btn btn-success float-end">Create Now!</a>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div class="container intro-logo text-center">
                    <img src="<?= base_url('/template') ?>/assets/logo.png" alt="Logo Jobsfree" />
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>