<nav class="navbar navbar-expand-lg py-1 sticky-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <div class="row" id="logo">
                  <div class="col-auto">
                    <img src="/images/logosmall.png" alt="Logo">
                  </div>
                  <div class="col">
                    <p style="font-family: 'Baloo Bhai 2', cursive; font-size: 40px; margin-left:-10px;" id="logolabel">Fasthajs</p>
                  </div>
                </div>
            </a>
              
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
              <span class="navbar-toggler-icon" style="display:flex; align-items: left;"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel" style="font-size:17px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>  
              <ul class="navbar-nav flex-grow-1 pe-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">Sposoby</a>
                         <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="/sposoby/polskie/">Polskie</a></li>
                           <li><a class="dropdown-item" href="/sposoby/zagraniczne/">Zagraniczne</a></li>
                         </ul>
                     </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">Promocje</a>
                         <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="/promocje/karty/">Karty</a></li>
                           <li><a class="dropdown-item" href="/promocje/indywidualne/">Indywidualne</a></li>
                           <li><a class="dropdown-item" href="/promocje/firmowe/">Firmowe</a></li>
                         </ul>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/wiedza/">Wiedza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/uwazaj/">Zagrożenia</a>
                    </li>
                </ul>
            </div>
            <div class="form-check form-switch ms-auto mt-2 me-2" >
                <label class="form-check-label ms-3" for="lightSwitch">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                  </svg>
                </label>
                <input class="form-check-input" type="checkbox" id="lightSwitch" />
              </div>
              <script src="/theme.js">
            </script>
        </div>
</nav>