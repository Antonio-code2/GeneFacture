<secction class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="
              d-flex
              justify-content-between
              flex-wrap flex-md-nowrap
              align-items-center
              pt-3
              pb-2
              mb-3
              border-bottom
            "
          >
         
          </div>
          

          <div class="container px-4 border cont-title shadow p-3 mb-5 rounded">
            <h3 class="text-light p-4 border-bottom">Generador de Facturas</h3>

            <p class="text-light ms-4">
              Añade productos, usuarios y administra facturas de manera
              eficientes con <strong>GeneFacture</strong>
            </p>
          </div>

          <?php 
            include("modal/new_cliente.html");
            include("modal/new_producto.html");
          ?>

          <div class="container px-4 mt-4">
            <div class="row gx-5">
              <div class="col">
                <div class="p-3 border cont-cliente shadow p-3 mb-5 rounded">
                  <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <h4>Clientes <i class="bi bi-plus-lg"></i></h4>
                  </button>
                </div>
              </div>
                <div class="col">
                  <div
                    class="
                      p-3
                      border
                      text-light
                      cont-product
                      shadow
                      p-3
                      mb-5
                      rounded
                    "
                  >
                 
                    <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                  <h4>Productos <i class="bi bi-plus-lg"></i></h4>
                  </button>
                  </div>
                </div>
              <div class="col">
                <div
                  class="
                    p-3
                    border
                    text-light
                    cont-facture
                    shadow
                    p-3
                    mb-5
                    rounded
                  "
                >
                  <a href="nueva_factura.php" class="nav-link text-light"
                    ><h4>Facturas <i class="bi bi-plus-lg"></i></h4
                  ></a>
                </div>
              </div>
            </div>
          </div>

         
          
</secction>