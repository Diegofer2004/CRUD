<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <div class="px-3 py-2 bg-light text-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="{{ route('index') }}" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <img class="bi me-2" width="50" height="42" src="{{ asset('../resources/image/logo.png') }}" alt=""> 
              <use xlink:href="#bootstrap"></use>
            </svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <img src="" alt="">
                HOME
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-dark">

                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-dark">

                Orders
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-dark">

                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-dark">

                Customers
              </a>
            </li>
          </ul>
          <div class="text-end">
            <div class="container d-flex flex-wrap justify-content-center">
              <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                <a href="{{ route('login') }}" class="btn btn-light text-dark me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-dark">Sign-up</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </header>

</body>
</html>