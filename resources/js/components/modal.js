export function openModal(url) {
    fetch(url)
        .then((res) => res.text())
        .then((html) => {
            document.getElementById("modalBody").innerHTML = html;
            document.getElementById("modal").classList.remove("hidden");
        });
}