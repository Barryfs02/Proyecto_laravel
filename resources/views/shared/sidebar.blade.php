<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
          <img
            src="{{ asset('plantilla/assets/img/lgav.png')}}"
            alt="navbar brand"
            class="navbar-brand"
            height="100"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
       
          <li class="nav-item">
            <a href="{{route('home')}}">
              <i class="fa-brands fa-fort-awesome"></i>
              <p>inicio</p>
              
            </a>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Modulos</h4>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#base">
              <i class="fa-brands fa-buffer"></i>
              <p>Ventas</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="base">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{route('ventas-nueva')}}">
                    
                    <span class="sub-item">Vender Productos</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('detalle_venta')}}">
                    <span class="sub-item">Consultar Ventas</span>
                  </a>
                </li>
                
              </ul>
            </div>
            <li class="nav-item">
              <a href="{{route('nueva_categoria')}}">
                <i class="fa-brands fa-windows"></i>
                <p>Categoria</p>
                
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('nuevos_productos')}}">
                <i class="fa-brands fa-playstation"></i>
                <p>Producto</p>
                
              </a>
            </li>
          </li>
          <li class="nav-item">
            <a href="{{route('nuevos_clientes')}}">
              <i class="fa-brands fa-mandalorian"></i>
              <p>Clientes</p>
              
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('nuevos_usuarios')}}">
              <i class="fa-brands fa-earlybirds"></i>
              <p>Usuarios</p>
              
            </a>
          </li>

          
                
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>