let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper('.reviews-slider', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: false,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});

document.addEventListener('DOMContentLoaded', function() {
    let loadMoreBtn = document.querySelector('.packages .load-more .btn');
    let currentItem = 4;
    
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            let boxes = document.querySelectorAll('.packages .box-container .box');
            
            for (let i = currentItem; i < currentItem + 4 && i < boxes.length; i++) {
                boxes[i].style.display = 'inline-block';
            }
            
            currentItem += 4;
            
            if (currentItem >= boxes.length) {
                loadMoreBtn.style.display = 'none';
            }
        });
    }
});


function updatePrice() {
    const locationSelect = document.getElementById('location');
    const selectedOption = locationSelect.options[locationSelect.selectedIndex];
    const price = selectedOption.getAttribute('data-price');
    document.getElementById('location-price').innerText = selectedOption.text + ' - Rp ' + parseInt(price).toLocaleString('id-ID');
}


//Popup signup and login
document.addEventListener('DOMContentLoaded', function() {
    const loginPopup = document.getElementById('login-popup');
    const signupPopup = document.getElementById('signup-popup');
    const loginLink = document.getElementById('login-link');
    const signupLink = document.getElementById('signup-link');
    const closeBtns = document.getElementsByClassName('close');

    // Function to show login popup
    function showLoginPopup() {
        loginPopup.style.display = 'block';
    }

    // Function to show signup popup
    function showSignupPopup() {
        signupPopup.style.display = 'block';
    }

    // Function to close popups
    function closePopups() {
        loginPopup.style.display = 'none';
        signupPopup.style.display = 'none';
    }

    // Event listeners
    loginLink.addEventListener('click', function(e) {
        e.preventDefault();
        showLoginPopup();
    });

    signupLink.addEventListener('click', function(e) {
        e.preventDefault();
        showSignupPopup();
    });

    // Close button functionality
    for (let i = 0; i < closeBtns.length; i++) {
        closeBtns[i].addEventListener('click', closePopups);
    }

    // Close popup when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target == loginPopup || e.target == signupPopup) {
            closePopups();
        }
    });

    // Switch between login and signup
    document.getElementById('signup-link').addEventListener('click', function(e) {
        e.preventDefault();
        loginPopup.style.display = 'none';
        signupPopup.style.display = 'block';
    });

    document.getElementById('login-link').addEventListener('click', function(e) {
        e.preventDefault();
        signupPopup.style.display = 'none';
        loginPopup.style.display = 'block';
    });
});


document.getElementById('signup-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Ambil data dari form
    const username = this.querySelector('input[type="text"]').value;
    const email = this.querySelector('input[type="email"]').value;
    const password = this.querySelector('input[type="password"]').value;

    // Kirim data ke server menggunakan fetch API
    fetch('signup_process.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            username: username,
            email: email,
            password: password
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Jika signup berhasil, arahkan ke halaman profil
            window.location.href = 'user_profile.php';
        } else {
            // Jika ada error, tampilkan pesan error
            alert(data.message);
        }
    })
    .catch((error) => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat mendaftar. Silakan coba lagi.');
    });
});

