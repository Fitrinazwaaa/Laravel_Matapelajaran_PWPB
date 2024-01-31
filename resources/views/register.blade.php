<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="align-items: center;">
  <a class="btn btn-success" href="{{ route('register') }}"></a>
    <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="
        background-color: hsl(0, 0%, 96%; ">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1"><b>First name :</b></label>
                      <input type="text" id="form3Example1" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example2"><b>Last name :</b></label>
                      <input type="text" id="form3Example2" class="form-control" />
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3"><b>Email address :</b></label>
                  <input type="email" id="form3Example3" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4"><b>Password :</b></label>
                  <input type="password" id="form3Example4" class="form-control" />
                </div>

                
                <!-- Register buttons -->
                <div class="text-center">

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" style=" width: 300px;">
                    Register
                    </button>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>