let bookNameMap = {};

async function initBookNameMap() {
    const res = await fetch('../bible/v-d/bookMap.json');
    bookNameMap = await res.json();
}

async function loadBook(bookInPt) {
    try {
        const version = document.getElementById('text-version').value;

        // Garante que o dicionário está carregado
        if (!bookNameMap || !bookNameMap[bookInPt]) {
            alert(`Livro '${bookInPt}' não está no dicionário`);
            return;
        }

        const mapped = bookNameMap[bookInPt];
        const mappedBookName = mapped[version];

        const response = await fetch('../bible/v-d/english.json'); // pode mudar conforme versão
        const chapterCounts = await response.json();

        const totalChapters = chapterCounts[mappedBookName];
        if (!totalChapters) {
            alert(`Contagem de capítulos não encontrada para '${mappedBookName}'`);
            return;
        }

        renderChapters(mappedBookName, totalChapters, version, mapped[version === 'almeida' ? 'almeida' : 'kjv']);
    } catch (err) {
        console.error("Erro ao carregar dados:", err);
    }
}

function renderChapters(book, totalChapters, version, label) {
    const container = document.getElementById('chapters-container');
    container.innerHTML = '';

    const title = document.createElement('h2');
    title.textContent = `Capítulos de ${label}`;
    container.appendChild(title);

    const chapterList = document.createElement('div');
    chapterList.className = 'chapter-grid';

    for (let i = 1; i <= totalChapters; i++) {
        const btn = document.createElement('button');
        btn.className = 'chapter-btn';
        btn.textContent = i;
        btn.onclick = () => {
            window.open(`biblia.html?book=${encodeURIComponent(book)}&version=${version}&chapter=${i}`, '_self');
        };
        chapterList.appendChild(btn);
    }

    container.appendChild(chapterList);
}

document.addEventListener('DOMContentLoaded', () => {
    const selectElement = document.getElementById('text-version');
    const inputElement = document.getElementById('search-input-text');

    const updatePlaceholder = () => {
        const selectedValue = selectElement.value;
        inputElement.placeholder = selectedValue === 'almeida' ? 'Joao 1:1' : 'John 1:1';
    };

    updatePlaceholder();
    selectElement.addEventListener('change', updatePlaceholder);

    initBookNameMap(); // carrega o dicionário ao iniciar
});