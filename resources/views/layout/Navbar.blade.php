<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Barbatos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/Homepage">Barbatos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/ProductbyCategory/1">Rumah Tangga</a>
                        <a class="dropdown-item" href="/ProductbyCategory/2">Buku</a>
                        <a class="dropdown-item" href="/ProductbyCategory/3">Elektronik</a>
                    </div>
                </li>
                <li class="nav-item active"><a class="nav-link" href="/login">Log in</a></li>
                <li class="nav-item">
                    @auth
                        @if (Auth::user()->user_type == 'admin')
                            <a class="nav-link ms-1" href="/ManageProduct">Manage Product</a>
                        @endif
                    @endauth
                </li>
            </ul>
        </div>
        @auth
            @if (Auth::user()->user_type == 'admin')
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/Profile">Profile</a>
                                <form action="/logout" method="post">
                                    @csrf
                                    <input type="submit" class="dropdown-item" value="Logout">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            @elseif (Auth::user()->user_type == 'customer')
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <a href="/CartPage"><img src="https://cdn-icons-png.flaticon.com/512/263/263142.png"
                                style="height:20px; width:20px;" alt="" /></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/Profile">Profile</a>
                                <a class="dropdown-item" href="/History">History</a>
                                <form action="/logout" method="post">
                                    @csrf
                                    <input type="submit" class="dropdown-item" value="logout">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
        @endauth


        <!-- untuk buat sebalah kanan yang untuk profile -->
        {{-- @auth
          @if (Auth::user()->user_type == 'admin')
            <li class="nav-item dropdown dropstart">
              <a class="nav-link dropdown-toggle" role="button" aria-expanded="false"
                  data-bs-toggle="dropdown">
                    {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu">
                <form action="/logout" method="POST">
                  @csrf
                  <input class="dropdown-item" type="submit" value="Logout">
                </form>
                <a class="dropdown-item" href="/profile">Profile</a>
              </ul>
            </li>
          @endif
        @endauth --}}
        {{-- @auth
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pt-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ Auth::user()->name }}
                    </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          @if (Auth::user()->user_type == 'customer')
                            <a class="dropdown-item" href="/History">History</a>
                          @endif
                          <a class="dropdown-item" href="/Profile">Profile</a>
                          <form action="/logout" method="post">
                            @csrf
                            <input class="dropdown-item" type="submit" value="Logout">
                          </form>
                      </div>
                  </li>
                </ul>
              </div>
        @endauth --}}
    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <div>
        @yield('headings')
    </div>
</body>

</html>



{{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Category
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/ProductbyCategory/1">Rumah Tangga</a>
                  <a class="dropdown-item" href="/ProductbyCategory/2">Buku</a>
                  <a class="dropdown-item" href="/ProductbyCategory/3">Elektronik</a>
              </div>
            </li> --}}
