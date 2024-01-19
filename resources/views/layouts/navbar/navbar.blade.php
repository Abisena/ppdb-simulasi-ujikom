<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .navbar-brand {
          display: flex;
          align-items: center;
      }

      .navbar-brand img {
          margin-right: 10px;
      }
      .navbar-nav .nav-link {
          position: relative;
      }
      
      .navbar-nav .nav-link:hover {
          color: white;
          text-decoration: none;
      }

      .navbar-nav .nav-link::before {
          content: '';
          position: absolute;
          width: 100%;
          height: 2px;
          bottom: -2px;
          left: 0;
          background-color: rgb(255, 255, 255);
          visibility: hidden;
          transform: scaleX(0);
          transition: all 0.3s ease-in-out;
      }

      .navbar-nav .nav-link:hover::before {
          visibility: visible;
          transform: scaleX(1);
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../../img/wikrama-logo.png" alt="Navbar Logo" width="75" height="75">
                <h3 class="text-white">PPDB</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto ms-auto">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" id="login-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <script>
      const isLoggedIn = false;
      const username = "John Doe";

      function createAvatar(username) {
        const initials = username.charAt(0).toUpperCase();
        const avatar = document.createElement("div");
        avatar.classList.add("avatar");
        avatar.innerText = initials;
        return avatar;
      }

      function handleLogin() {
        if (isLoggedIn) {
          const loginLink = document.getElementById("login-link");
          const avatar = createAvatar(username);
          loginLink.innerText = "";
          loginLink.appendChild(avatar);
        }
      }

      handleLogin();
    </script> --}}
    </body>
</html>