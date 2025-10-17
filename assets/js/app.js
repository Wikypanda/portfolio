// ============================================
// JAVASCRIPT - assets/js/app.js
// ============================================

// Gestion des projets
function viewProject(projectId) {
    fetch(`?action=project&id=${projectId}`)
        .then(response => response.json())
        .then(project => {
            if (project) {
                displayProjectModal(project);
            }
        })
        .catch(error => console.error('Erreur:', error));
}

function displayProjectModal(project) {
    const modalBody = document.getElementById('modal-body');
    modalBody.innerHTML = `
        <h3>${escapeHtml(project.title)}</h3>
        <p>${escapeHtml(project.description)}</p>
        <div class="project-tech">
            ${project.tech.map(tech => `<span class="tech-tag">${escapeHtml(tech)}</span>`).join('')}
        </div>
        <a href="${escapeHtml(project.link)}" target="_blank">
            Voir le code
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 1rem; height: 1rem;">
                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                <polyline points="15 3 21 3 21 9"></polyline>
                <line x1="10" y1="14" x2="21" y2="3"></line>
            </svg>
        </a>
    `;
    
    const modal = document.getElementById('project-modal');
    modal.classList.add('active');
}

function closeModal() {
    const modal = document.getElementById('project-modal');
    modal.classList.remove('active');
}

// Fermer le modal en cliquant à l'extérieur
window.onclick = function(event) {
    const modal = document.getElementById('project-modal');
    if (event.target === modal) {
        closeModal();
    }
}

// Gestion du formulaire de contact
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(contactForm);
            const messageDiv = document.getElementById('form-message');
            
            fetch('?action=contact', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageDiv.className = 'form-message success';
                    messageDiv.textContent = 'Message envoyé avec succès !';
                    contactForm.reset();
                } else {
                    messageDiv.className = 'form-message error';
                    messageDiv.textContent = data.error || 'Une erreur est survenue.';
                }
            })
            .catch(error => {
                messageDiv.className = 'form-message error';
                messageDiv.textContent = 'Erreur lors de l\'envoi du message.';
                console.error('Erreur:', error);
            });
        });
    }
});

// Fonction utilitaire pour échapper le HTML
function escapeHtml(text) {
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, m => map[m]);
}

// Animation au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

document.querySelectorAll('.project-card, .skill-card, .experience-card').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.5s, transform 0.5s';
    observer.observe(el);
});