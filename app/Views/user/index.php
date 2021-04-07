<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/template/style.css" />

  <title>Hello, world!</title>
</head>

<body id="signin">
  <div class="container pt-5 d-flex justify-content-center">
    <div class="row w-100 d-flex justify-content-center">
      <div class="col-md-7 col-lg-6 col-xl-5" style="position: relative; z-index: 0">
        <div class="container signbox py-5 px-1">
          <div class="row mb-3">
            <div class="col text-center">
              <img src="/template/assets/logo.png" alt="" width="50" />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <form class="px-4 px-lg-5" action="/auth" method="POST">
                <div class="mb-4">
                  <label for="username" class="form-label form-label-custom fw-bold text-uppercase">Username</label>
                  <input type="text" name="username" class="form-control form-sign-custom py-3 px-4 shadow-sm border-0 fw-bold" id="username" placeholder="USERNAME" />
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label form-label-custom fw-bold text-uppercase">Password</label>
                  <input type="password" name="password" class="form-control form-sign-custom py-3 px-4 shadow-sm border-0 fw-bold" id="password" placeholder="PASSWORD" />
                </div>
                <button type="submit" class="btn btn-success text-center w-100">
                  Sign In
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="container signbox-footer pb-4">
          <div class="row">
            <div class="col text-center">
              <a href="signup.html" class="p-0 m-0 text-decoration-none text-success fw-bold">Create Account!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>