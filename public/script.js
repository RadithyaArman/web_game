document.addEventListener("DOMContentLoaded", function() {
    const katalogList = document.getElementById('katalog-list');
    const keywordInput = document.getElementById('keyword');
    const sortSelect = document.getElementById('sort');

    function fetchGames(url, data) {
        fetch(url, {
            method: "POST",
            body: data
        })
        .then(res => res.text())
        .then(html => {
            katalogList.innerHTML = html;
        });
    }
    
    let debounceTimer;
    if(keywordInput) {
        keywordInput.addEventListener('keyup', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                let formData = new FormData();
                formData.append('keyword', this.value);
                fetchGames(BASEURL + "/game/search", formData);
            }, 500);
        })
    }

    if(sortSelect) {
        sortSelect.addEventListener('change', function() {
            let formData = new FormData();
            formData.append('order', this.value);
            fetchGames(BASEURL + "/game/sort", formData);
        });
    }
});
