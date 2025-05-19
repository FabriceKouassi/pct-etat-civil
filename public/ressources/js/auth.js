function switchTab(tabName) {
    // Gestion des onglets
    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active');
    });
    document.querySelector(`.tab[onclick="switchTab('${tabName}')"]`).classList.add('active');
    
    // Gestion des formulaires
    document.querySelectorAll('.form').forEach(form => {
        form.classList.remove('active');
    });
    document.getElementById(`${tabName}-form`).classList.add('active');
}

function togglePassword(inputId, icon) {
    const input = document.getElementById(inputId);
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

// Gestion des connexions via réseaux sociaux
document.querySelectorAll('.social-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const provider = this.querySelector('i').classList.contains('fa-google') ? 'Google' : 
                        this.querySelector('i').classList.contains('fa-linkedin-in') ? 'LinkedIn' : 'Apple';
        
        alert(`Connexion via ${provider} sera implémentée ici`);
        // Ici vous ajouteriez la logique d'authentification avec le provider
    });
});
