document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('.input-box input');

    inputs.forEach(input => {
        // Simpan placeholder asli (yaitu ' ' atau ' ')
        const originalPlaceholder = input.placeholder;

        // Atur nama input Anda agar JS tahu placeholder mana yang harus digunakan
        const inputName = input.getAttribute('name');

        input.addEventListener('focus', function() {
            let descriptivePlaceholder = '';

            if (inputName === 'email_username' || inputName === 'email_username') {
                descriptivePlaceholder = 'Masukkan email atau username';
            } else if (inputName === 'password') {
                descriptivePlaceholder = 'Masukkan password';
            } else if (inputName === 'password_confirmation') {
                descriptivePlaceholder = 'Konfirmasi password';
            } else if (inputName === 'username') {
                descriptivePlaceholder = 'Masukkan Username';
            } else if (inputName === 'email') {
                descriptivePlaceholder = 'Masukkan Email';
            }

            // Terapkan placeholder baru
            if (descriptivePlaceholder) {
                input.placeholder = descriptivePlaceholder;
            }
        });

        input.addEventListener('blur', function() {
            // Hapus placeholder baru jika input kosong saat blur
            if (input.value === '') {
                input.placeholder = originalPlaceholder; // Kembali ke placeholder awal (spasi)
            }
        });
    });
});
