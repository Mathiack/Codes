const resultadoDiv = document.getElementById("resultado");

window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const palavra = params.get("word");
    if (palavra) {
        document.getElementById("palavra").value = palavra;
        pesquisar(palavra);
    }
});

function loadPage() {
    const palavra = document.getElementById("palavra").value.trim();
    if (palavra) {
        window.open(`index.html?word=${encodeURIComponent(palavra)}`, "_self");
    }
}

function pesquisar(palavra) {
    const resultadoDiv = document.getElementById("resultado");

    if (!palavra) {
        resultadoDiv.innerHTML = "<p>Type a word to search.</p>";
        return;
    }

    resultadoDiv.innerHTML = "<p>Searching...</p>";

    fetch(`https://api.dictionaryapi.dev/api/v2/entries/en/${palavra}`)
        .then(response => {
            if (!response.ok) {
                throw new Error("Word not found.");
            }
            return response.json();
        })
        .then(data => {
            const significados = data[0].meanings.map(meaning => `
                <div>
                    <h3>${meaning.partOfSpeech}</h3>
                    <ul>
                        ${meaning.definitions.map(def => `<li>${def.definition}</li>`).join("")}
                    </ul>
                </div>
            `).join("");
            resultadoDiv.innerHTML = `<h2>${data[0].word}</h2>${significados}`;
        })
        .catch(err => {
            resultadoDiv.innerHTML = `<p>${err.message}</p>`;
        });
}
