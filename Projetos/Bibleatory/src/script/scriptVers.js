async function fetchRandomVerseFromXML() {
    const translationField = document.getElementById("text-version");
    const translation = translationField.value;

    try {
        let res;

        if (translation == "almeida") {
            res = await fetch("../bible/por-almeida.usfx.xml");
        } else if (translation == "kjv") {
            res = await fetch("../bible/eng-kjv.usfx.xml");
        } else {
            throw new Error("Tradução inválida ou não especificada.");
        }

        const text = await res.text();
        const parser = new DOMParser();
        const xml = parser.parseFromString(text, "text/xml");

        const books = Array.from(xml.getElementsByTagName("book"));
        const randomBook = books[Math.floor(Math.random() * books.length)];

        const bookName = randomBook.getElementsByTagName("h")[0]?.textContent ?? "Desconhecido";
        const chapters = Array.from(randomBook.getElementsByTagName("c"));
        const randomChapter = chapters[Math.floor(Math.random() * chapters.length)];

        const allVerses = Array.from(xml.getElementsByTagName("v"))
            .filter(v => v.getAttribute("id") && v.nextElementSibling?.tagName === "ve");

        const randomVerse = allVerses[Math.floor(Math.random() * allVerses.length)];
        const verseNumber = randomVerse.getAttribute("id");

        // Texto do versículo vem do texto entre <v> e <ve>
        const verseText = randomVerse.nextSibling?.nodeValue?.trim() || "[verso vazio]";

        const chapterNumber = randomChapter.getAttribute("id");
        document.getElementById("verse-text").innerText = verseText;
        document.getElementById("verse-ref").innerText = `${bookName} ${chapterNumber}:${verseNumber}`;

    } catch (error) {
        console.error("Erro ao carregar XML:", error);
        document.getElementById("verse-text").innerText = "Erro ao carregar versículo.";
        document.getElementById("verse-ref").innerText = "";
    }
}

window.addEventListener("DOMContentLoaded", fetchRandomVerseFromXML);
document.getElementById("new-verse").addEventListener("click", fetchRandomVerseFromXML);

document.addEventListener('DOMContentLoaded', () => {
    const selectElement = document.getElementById('text-version');

    selectElement.addEventListener('change', () => {
        fetchRandomVerseFromXML();
    });
});

document.addEventListener("keydown", (event) => {
    if (event.code === "Space") {
        event.preventDefault();
        fetchRandomVerseFromXML();
    }
});