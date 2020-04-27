<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img alt="User Image" class="img-circle" src="../img/user2-160x160.jpg">
                </img>
            </div>
            <div class="pull-left info">
                <p>
                    {{ Auth::user()->rolEntidad() }}             
                    <br>                                        
                </p>
                <!-- Status -->
                <a href="#">
                    <i class="fas fa-circle text-success">
                    </i>
                     {{ Auth::user()->nombre() }}
                </a>
            </div>
        </div>
        @yield('pagina')
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">
                Mi menu
            </li>
            <li>
                    <a href="{{ route('home') }}">
                        <!--icono de la opcion-->
                        <i class="fas fa-home">
                        </i>
                        <span> Inicio </span>
                    </a>
                </li>
               
               @centro
               @include('plantilla/menuHogar')
               @endcentro

               @control
               @include('plantilla/menuRegulador')
               @endcontrol

               @acudiente
               @include('plantilla/menuAcudiente')
               @endacudiente

               @auxiliar
               @include('plantilla/menuAuxiliar')
               @endauxiliar
             <li>
                <a href="#">
                   <i class="fas fa-user"></i>
                    <span> perfil </span>
                </a>
            </li>
            
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>