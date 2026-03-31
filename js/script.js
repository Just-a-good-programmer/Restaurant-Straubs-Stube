let winkelwagen = [];

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('order-btn')) {
        const naam = e.target.dataset.naam;
        const prijs = parseFloat(e.target.dataset.prijs);
        winkelwagen.push({ naam, prijs });
        updateWinkelwagen();
    }
});

function verwijder(index) {
    winkelwagen.splice(index, 1);
    updateWinkelwagen();
}

function updateWinkelwagen() {
    const cartItems = document.querySelector('.cart-items');
    const leeg = document.querySelector('.empty');

    if (winkelwagen.length === 0) {
        cartItems.innerHTML = '<p class="empty">Uw winkelwagen is leeg</p>';
        document.querySelector('.totaal').textContent = '';
        return;
    }

    cartItems.innerHTML = '';

    winkelwagen.forEach((item, index) => {
        cartItems.innerHTML += `
            <div class="cart-item" style="display:flex; justify-content:space-between; align-items:center;">
                <span>${item.naam}</span>
                <span>€${item.prijs.toFixed(2).replace('.', ',')}</span>
                <button onclick="verwijder(${index})" class="verwijder-btn">✕</button>
            </div>`;
    });

    const totaal = winkelwagen.reduce((sum, item) => sum + item.prijs, 0);
    document.querySelector('.totaal').textContent = `Totaal: €${totaal.toFixed(2).replace('.', ',')}`;
}