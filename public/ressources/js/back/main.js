
// Toggle Sidebar
const toggleBtn = document.getElementById('toggleBtn');
const sidebar = document.getElementById('sidebar');

toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar-collapsed');

    if (sidebar.classList.contains('sidebar-collapsed')) {
        toggleBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
    } else {
        toggleBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
    }
});

// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');

function checkScreenSize() {
    if (window.innerWidth <= 576) {
        mobileMenuBtn.style.display = 'flex';
        sidebar.classList.add('sidebar-collapsed');
    } else {
        mobileMenuBtn.style.display = 'none';
        sidebar.classList.remove('sidebar-collapsed');
    }
}

mobileMenuBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});

// Check screen size on load and resize
window.addEventListener('load', checkScreenSize);
window.addEventListener('resize', checkScreenSize);

// Simulate loading animation
document.addEventListener('DOMContentLoaded', () => {
    const statCards = document.querySelectorAll('.stat-card');
    const activityItems = document.querySelectorAll('.activity-item');
    const actionButtons = document.querySelectorAll('.action-btn');
    const documentItems = document.querySelectorAll('.document-item');

    // Animate stat cards
    statCards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Animate activity items
    activityItems.forEach((item, index) => {
        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateX(0)';
        }, index * 100 + 400);
    });

    // Animate action buttons
    actionButtons.forEach((button, index) => {
        setTimeout(() => {
            button.style.opacity = '1';
            button.style.transform = 'scale(1)';
        }, index * 50 + 800);
    });

    // Animate document items
    documentItems.forEach((item, index) => {
        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateX(0)';
        }, index * 100 + 1000);
    });
});
