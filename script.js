const pages = Array.from(document.querySelectorAll('.page'));
const prevBtn = document.getElementById('prevPage');
const nextBtn = document.getElementById('nextPage');
const sidebarItems = document.querySelectorAll('.sidebar li');

let currentPage = 0;

// Função para mostrar a página atual
function showPage(index) {
    pages.forEach((p, i) => {
        p.classList.toggle('active', i === index);
    });
    currentPage = index;
}

// Botões
nextBtn.addEventListener('click', () => {
    if (currentPage < pages.length - 1) {
        showPage(currentPage + 1);
    }
});

prevBtn.addEventListener('click', () => {
    if (currentPage > 0) {
        showPage(currentPage - 1);
    }
});

// Sumário
sidebarItems.forEach(item => {
    item.addEventListener('click', () => {
        const pageIndex = parseInt(item.dataset.page);
        showPage(pageIndex);
    });
});

// Inicializa primeira página
showPage(0);
