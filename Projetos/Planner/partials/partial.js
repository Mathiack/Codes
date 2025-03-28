async function loadPartial(selector, url) {
    const container = document.querySelector(selector);
    const response = await fetch(url);
    const content = await response.text();
    container.innerHTML = content;
}

loadPartial('#header', 'partials/header.html');