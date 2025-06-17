// Elementos do DOM
const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
const mobileMenuClose = document.querySelector('.mobile-menu-close');
const categoriesBtn = document.querySelector('.categories-btn');

// Função para abrir o menu mobile
function openMobileMenu() {
    mobileMenuOverlay.classList.add('active');
    mobileMenuToggle.classList.add('active');
    document.body.style.overflow = 'hidden'; // Previne scroll do body
}

// Função para fechar o menu mobile
function closeMobileMenu() {
    mobileMenuOverlay.classList.remove('active');
    mobileMenuToggle.classList.remove('active');
    document.body.style.overflow = ''; // Restaura scroll do body
}

// Event listeners
mobileMenuToggle.addEventListener('click', openMobileMenu);
mobileMenuClose.addEventListener('click', closeMobileMenu);

// Fechar menu ao clicar no overlay
mobileMenuOverlay.addEventListener('click', (e) => {
    if (e.target === mobileMenuOverlay) {
        closeMobileMenu();
    }
});

// Fechar menu com tecla ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileMenuOverlay.classList.contains('active')) {
        closeMobileMenu();
    }
});

// Funcionalidade de busca
const searchInputs = document.querySelectorAll('.search-input, .mobile-search input');
const searchButtons = document.querySelectorAll('.search-btn, .mobile-search button');

searchButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        const searchValue = searchInputs[index].value.trim();
        if (searchValue) {
            // Aqui você pode implementar a lógica de busca
            console.log('Buscar por:', searchValue);
            alert(`Buscando por: ${searchValue}`);
        }
    });
});

// Busca ao pressionar Enter
searchInputs.forEach((input) => {
    input.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            const searchValue = input.value.trim();
            if (searchValue) {
                console.log('Buscar por:', searchValue);
                alert(`Buscando por: ${searchValue}`);
            }
        }
    });
});

// Animação suave para links de navegação
const navLinks = document.querySelectorAll('.nav-links a, .mobile-nav-links a');

navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const linkText = link.textContent;
        console.log('Navegando para:', linkText);
        
        // Fechar menu mobile se estiver aberto
        if (mobileMenuOverlay.classList.contains('active')) {
            closeMobileMenu();
        }
        
        // Aqui você pode implementar a navegação real
        alert(`Navegando para: ${linkText}`);
    });
});

// Funcionalidade do botão de categorias
if (categoriesBtn) {
    categoriesBtn.addEventListener('click', () => {
        console.log('Abrindo menu de categorias');
        alert('Menu de categorias aberto!');
    });
}

// Funcionalidade dos action items
const actionItems = document.querySelectorAll('.action-item, .mobile-action');

actionItems.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        const actionText = item.querySelector('span')?.textContent || item.textContent;
        console.log('Ação:', actionText);
        
        // Fechar menu mobile se estiver aberto
        if (mobileMenuOverlay.classList.contains('active')) {
            closeMobileMenu();
        }
        
        alert(`Ação: ${actionText}`);
    });
});

// Responsividade - ajustar comportamento baseado no tamanho da tela
function handleResize() {
    const isMobile = window.innerWidth <= 768;
    
    if (!isMobile && mobileMenuOverlay.classList.contains('active')) {
        closeMobileMenu();
    }
}

window.addEventListener('resize', handleResize);

// Smooth scroll para links internos (se houver)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Adicionar efeito de loading nos botões
function addLoadingEffect(button) {
    const originalText = button.innerHTML;
    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
    button.disabled = true;
    
    setTimeout(() => {
        button.innerHTML = originalText;
        button.disabled = false;
    }, 1000);
}

// Aplicar efeito de loading nos botões de busca
searchButtons.forEach(button => {
    button.addEventListener('click', () => {
        addLoadingEffect(button);
    });
});

// Funcionalidade de auto-complete para busca (simulada)
searchInputs.forEach(input => {
    let timeout;
    
    input.addEventListener('input', () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            const value = input.value.trim();
            if (value.length > 2) {
                // Simular sugestões de busca
                console.log('Sugestões para:', value);
                // Aqui você pode implementar um dropdown de sugestões
            }
        }, 300);
    });
});

// Adicionar animação de entrada quando a página carrega
document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.main-header');
    const nav = document.querySelector('.navigation-bar');
    
    if (header) {
        header.style.opacity = '0';
        header.style.transform = 'translateY(-20px)';
        
        setTimeout(() => {
            header.style.transition = 'all 0.5s ease';
            header.style.opacity = '1';
            header.style.transform = 'translateY(0)';
        }, 100);
    }
    
    if (nav) {
        nav.style.opacity = '0';
        nav.style.transform = 'translateY(-10px)';
        
        setTimeout(() => {
            nav.style.transition = 'all 0.5s ease';
            nav.style.opacity = '1';
            nav.style.transform = 'translateY(0)';
        }, 300);
    }
});

// Adicionar efeito de hover personalizado para dispositivos touch
if ('ontouchstart' in window) {
    const touchElements = document.querySelectorAll('.action-item, .nav-links a, .categories-btn');
    
    touchElements.forEach(element => {
        element.addEventListener('touchstart', () => {
            element.style.transform = 'scale(0.95)';
        });
        
        element.addEventListener('touchend', () => {
            element.style.transform = 'scale(1)';
        });
    });
}

// Funcionalidade de sticky header (opcional)
let lastScrollTop = 0;
const header = document.querySelector('.main-header');

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop && scrollTop > 100) {
        // Scrolling down
        header.style.transform = 'translateY(-100%)';
    } else {
        // Scrolling up
        header.style.transform = 'translateY(0)';
    }
    
    lastScrollTop = scrollTop;
});

// Adicionar transição suave para o sticky header
if (header) {
    header.style.transition = 'transform 0.3s ease';
    header.style.position = 'sticky';
    header.style.top = '0';
    header.style.zIndex = '100';
}

