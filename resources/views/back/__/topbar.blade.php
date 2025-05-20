<div class="top-bar">
    <div class="search-bar">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Rechercher...">
    </div>

    <div class="user-menu">
        <div class="notifications">
            <i class="fas fa-bell"></i>
            <div class="notification-badge">3</div>
        </div>

        <div class="user-profile">
            <div class="user-avatar">
                <img src="{{ asset('ressources/img/user.jpg') }}" alt="User">
            </div>
            <span class="user-name">
                {{ Auth::user()->name }}
            </span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</div>
