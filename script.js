document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
});

const dropdown = document.querySelector('.dropdown');

// Fungsi untuk menutup dropdown ketika mengklik di luar
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        const dropdownContents = document.querySelectorAll('.dropdown-content');
        dropdownContents.forEach(content => {
            if (content.style.display === 'block') {
                content.style.display = 'none';
            }
        });
    }
};

// Tambahkan event listener ke tombol dropdown untuk membuka dan menutup dropdown
dropdown.querySelector('.dropbtn').onclick = function() {
    const dropdownContent = dropdown.querySelector('.dropdown-content');
    if (dropdownContent.style.display === 'block') {
        dropdownContent.style.display = 'none';
    } else {
        dropdownContent.style.display = 'block';
    }
};

Swal.fire({
    title: "Selamat Datang",
    icon: "info"
  });