<nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
        >
          <div class="container-fluid perfil mt-3 px-3">
            <img src="img/user.jpg" class="" alt="..." />
            <h5 class="text-center p-3 text-dark">AntonioMcs</h5>
          </div>

          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item ">
                <a class="nav-link <?php echo $active_inicio; ?>" aria-current="page" href="home.php">
                  <h3 class="link"><i class="bi bi-house-door-fill"></i>Inicio</h3>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $active_clientes; ?>" href="clientes.php">
                  <h3 class="link"><i class="bi bi-people-fill"></i> Clientes</h3>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $active_productos; ?>" href="productos.php">
                  <h3 class="link"><i class="bi bi-cart-fill"></i> Productos</h3>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $active_facturas; ?>" href="facturas.php">
                  <h3 class="link">
                    <i class="bi bi-file-earmark-ruled-fill"></i> Facturas
                  </h3>
                </a>
              </li>
            </ul>
          </div>
        </nav>
