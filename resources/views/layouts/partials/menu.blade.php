
<!-- Brand Logo -->
<a href="#" class="brand-link">
    <img src="{{ asset('storage/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AutoCAR</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}} </a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Tableau de bord
                </p>
            </a>
        </li>
        <li  class="nav-item" {{ getPermission(Auth::user()) == 'candidate' ? '' : 'hidden' }}>
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-pager"></i>
                <p>
                    Cours
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam.choose') }}" class="nav-link">
                        <i class="fas fa-paper-plane nav-icon"></i>
                        <p>Chap_I</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam.choose') }}" class="nav-link">
                        <i class="fas fa-paper-plane nav-icon"></i>
                        <p>Chap_II</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam.choose') }}" class="nav-link">
                        <i class="fas fa-paper-plane nav-icon"></i>
                        <p>Chap_III</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam.choose') }}" class="nav-link">
                        <i class="fas fa-paper-plane nav-icon"></i>
                        <p>Chap_IV</p>
                    </a>
                </li>
            </ul>
        </li>

        <li  class="nav-item" {{ getPermission(Auth::user()) == 'candidate' ? '' : 'hidden' }}>
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-pager"></i>
                <p>
                    Examen
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('exam.choose') }}" class="nav-link">
                        <i class="fas fa-paper-plane nav-icon"></i>
                        <p>Composer</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item" @if(getPermission(Auth::user()) == 'instructor') @else @if(getPermission(Auth::user()) == 'superAdmin') @else hidden @endif @endif }}>
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope-open-text"></i>
                <p>
                    Tests
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('tests.index') }}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Liste</p>
                    </a>
                </li>
                <li class="nav-item" {{ getPermission(Auth::user()) == 'superAdmin' ? '' : 'hidden' }}>
                    <a href="{{ route('tests.create') }}" class="nav-link">
                        <i class="fas fa-plus-circle nav-icon"></i>
                        <p>Nouveau</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item" @if(getPermission(Auth::user()) == 'instructor') @else @if(getPermission(Auth::user()) == 'superAdmin') @else hidden @endif @endif }}>
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-question-circle"></i>
                <p>
                Questions
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('questions.index') }}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Liste</p>
                    </a>
                </li>
                <li class="nav-item" {{ getPermission(Auth::user()) == 'superAdmin' ? '' : 'hidden' }}>
                    <a href="{{ route('questions.create') }}" class="nav-link">
                        <i class="fas fa-plus-circle nav-icon"></i>
                        <p>Nouvelle Question</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item" @if(getPermission(Auth::user()) == 'instructor') @else @if(getPermission(Auth::user()) == 'superAdmin') @else hidden @endif @endif }}>
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                Candidats
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('candidats.index') }}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Liste</p>
                    </a>
                </li>
                <li class="nav-item" {{ getPermission(Auth::user()) == 'instructor' ? '' : 'hidden' }}>
                    <a href="{{ route('candidats.create') }}" class="nav-link">
                        <i class="fas fa-plus-circle nav-icon"></i>
                        <p>Nouveau</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item" @if(getPermission(Auth::user()) == 'instructor') @else @if(getPermission(Auth::user()) == 'superAdmin') @else hidden @endif @endif }}>
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                Moniteurs
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Liste</p>
                    </a>
                </li>
                <li class="nav-item" {{ getPermission(Auth::user()) == 'superAdmin' ? '' : 'hidden' }} >
                    <a href="{{ route('users.create') }}" class="nav-link">
                        <i class="fas fa-plus-circle nav-icon" ></i>
                        <p>Nouveau</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                Extras
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('calendar.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Calendrier
                        </p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                    Mon Compte
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('users.show', Auth::user()) }}" class="nav-link">
                        <i class="fas fa-user-secret nav-icon"></i>
                        <p>Informations personelles</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ route('logout') }} " onclick="return confirm('Vous confirmez vouloir vous déconnecté ?')" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Déconnexion
                </p>
            </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
</div>


