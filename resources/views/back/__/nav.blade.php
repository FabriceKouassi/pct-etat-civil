<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_C%C3%B4te_d%27Ivoire.svg" alt="Drapeau Côte d'Ivoire">
            <div class="logo-text">
                <h3>État Civil</h3>
                <span>Côte d'Ivoire</span>
            </div>
        </div>
        <button class="toggle-btn" id="toggleBtn">
            <i class="fas fa-chevron-left"></i>
        </button>
    </div>

    <div class="sidebar-menu">
        <div class="menu-title">Menu Principal</div>
        <a href="{{ route('admin.dashboard') }}" class="menu-item {{ $pIndex === 'dashboard' ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt"></i>
            <span class="menu-text">Tableau de Bord</span>
        </a>
        <a href="{{ route('declaration.citoyens.all') }}" class="menu-item {{ $pIndex === 'citoyens' ? 'active' : '' }}">
            <i class="fas fa-users"></i>
            <span class="menu-text">Citoyens</span>
        </a>
        <a href="{{ route('declaration.naissance.all') }}" class="menu-item {{ $pIndex === 'naissance' ? 'active' : '' }}">
            <i class="fas fa-baby"></i>
            <span class="menu-text">Naissances</span>
        </a>
        <a href="#" class="menu-item">
            <i class="fas fa-ring"></i>
            <span class="menu-text">Mariages</span>
        </a>
        <a href="#" class="menu-item">
            <i class="fas fa-cross"></i>
            <span class="menu-text">Décès</span>
        </a>

        <div class="menu-title">Documents</div>
        <a href="#" class="menu-item">
            <i class="fas fa-file-alt"></i>
            <span class="menu-text">Actes</span>
        </a>
        <a href="#" class="menu-item">
            <i class="fas fa-book"></i>
            <span class="menu-text">Livrets Famille</span>
        </a>
        <a href="#" class="menu-item">
            <i class="fas fa-print"></i>
            <span class="menu-text">Certificats</span>
        </a>

        <div class="menu-title">Administration</div>
        <a href="#" class="menu-item">
            <i class="fas fa-user-shield"></i>
            <span class="menu-text">Utilisateurs</span>
        </a>
        <a href="#" class="menu-item">
            <i class="fas fa-cog"></i>
            <span class="menu-text">Paramètres</span>
        </a>
        <a href="#" class="menu-item">
            <i class="fas fa-chart-line"></i>
            <span class="menu-text">Statistiques</span>
        </a>
    </div>
</div>
