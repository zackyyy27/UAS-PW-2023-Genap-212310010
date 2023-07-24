function togglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    const showPasswordCheckbox = document.getElementById("show-password");

    if (showPasswordCheckbox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

// function login() {
//     // Mendapatkan nilai input code dan password
//     var code = document.getElementById("code").value;
//     var password = document.getElementById("password").value;

//     // Melakukan validasi code dan password
//     if (code === "Kedai5758" && password === "KedaiMajuMapan") {
//         // Jika code dan password benar, alihkan ke halaman selanjutnya
//         window.location.href = "dashbord.blade.php";
//     } else {
//         // Jika code atau password salah, tampilkan pesan kesalahan
//         alert("Code atau password salah. Silakan coba lagi.");
//     }
// }
