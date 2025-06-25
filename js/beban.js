// Fungsi untuk mengubah warna kartu dan memperbarui nilai di database
function toggleCardColor(cardId) {
    var card = document.getElementById(cardId);
    var newValue;
    if (card.dataset.clicked === "false") {
        card.style.background = 'linear-gradient(to left, #481E1480, #9B3922FF), url(\'img/powergrid1.jpg\')';
        newValue = 1; // Nilai baru saat card diklik
        card.dataset.clicked = "true";
    } else {
        card.style.background = 'linear-gradient(to left, #27005D80, #9400FFFF), url(\'img/powergrid1.jpg\')';
        newValue = 0; // Nilai baru saat card diklik lagi
        card.dataset.clicked = "false";
    }
    // Simpan status clicked kartu ke localStorage
    localStorage.setItem(cardId, newValue);
    // Panggil fungsi untuk memperbarui nilai di database
    updateDatabase(newValue, cardId);
}

// Fungsi untuk memperbarui nilai di database
function updateDatabase(newValue, cardId) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Lakukan sesuatu setelah permintaan berhasil
            console.log('Nilai berhasil diperbarui.');
        }
    };
    // Kirim nilai baru ke file PHP yang akan memperbarui database
    xhttp.open("GET", "update_relay.php?newValue=" + newValue + "&cardId=" + cardId, true);
    xhttp.send();
}

// Saat halaman dimuat, periksa localStorage untuk card1, card2, dan card3, dan atur status clicked sesuai dengan nilainya
document.addEventListener('DOMContentLoaded', function() {
    var cardIds = ['card1', 'card2', 'card3'];
    cardIds.forEach(function(cardId) {
        var card = document.getElementById(cardId);
        var clicked = localStorage.getItem(cardId);
        if (clicked === '1') {
            card.style.background = 'linear-gradient(to left, #481E1480, #9B3922FF), url(\'img/powergrid1.jpg\')';
            card.dataset.clicked = 'true';
        } else {
            card.style.background = 'linear-gradient(to left, #27005D80, #9400FFFF), url(\'img/powergrid1.jpg\')';
            card.dataset.clicked = 'false';
        }
    });
});
