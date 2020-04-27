                <li>
                    <a href="{{ url('#') }}">
                        <!--icono de la opcion-->
                        <i class="fas fa-id-card-alt"></i>
                        <span>
                             Gestión de documentos 
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('#') }}">
                        <!--icono de la opcion-->
                        <i class="fas fa-notes-medical"></i> 
                        <span>
                            Gestión de medicamentos
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mayor.index') }}">
                        <!--icono de la opcion-->
                        <i class="fas fa-user-cog"></i> 
                        <span>
                            Gestión de adultos
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('acudientes') }}">
                        <!--icono de la opcion-->
                        <i class="fas fa-users-cog"></i> 
                        <span>
                            Gestión de acudientes
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('auxiliar.index') }}"> 
                        <!--icono de la opcion-->
                        <i class="far fa-handshake">
                        </i>
                        <span>
                            Gestión de auxiliares
                        </span>
                    </a>
                </li>
                
                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-file-contract"></i>
                        <span>
                            Actividades
                        </span>
                        <span class="pull-right-container">
                            <i class="fas fa-angle-left pull-right">
                            </i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ route('actividades.index') }}">
                            Gestión de actividades
                            </a>
                        </li> 
                        <li>
                            <a href="{{ route('planes.index') }}">
                            Plan de actividades
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('#') }}">
                        <!--icono de la opcion-->
                        <i class="fas fa-file-archive"></i>
                        <span>
                            Gestión de reportes
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('routes.index') }}">
                        <!--icono de la opcion-->
                        <i class="fas fa-phone-volume"></i>
                        <span>
                            Gestión de rutas
                        </span>
                    </a>
                </li>
               