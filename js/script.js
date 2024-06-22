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


document.addEventListener("DOMContentLoaded", function() {
    const loginPopup = document.getElementById('login-popup');
    const signupPopup = document.getElementById('signup-popup');
    const overlay = document.getElementById('overlay');
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');
    const loginError = document.getElementById('login-error');
    const closeBtns = document.querySelectorAll('.close-btn');
    const loginLink = document.getElementById('login-link');
    const signupLink = document.getElementById('signup-link'); // Update: added signup link
    const signupBtn = document.getElementById('signup-btn'); // Update: added signup button inside login popup

    // Function to show login popup
    function showLoginPopup() {
        loginPopup.style.display = 'block';
        overlay.style.display = 'block';
    }

    // Function to show signup popup
    function showSignupPopup() {
        signupPopup.style.display = 'block';
        overlay.style.display = 'block';
    }

    // Function to close popup and overlay
    function closePopup() {
        loginPopup.style.display = 'none';
        signupPopup.style.display = 'none';
        overlay.style.display = 'none';
        loginError.textContent = '';  // Clear error message
    }

    // Event listener for login link
    loginLink.addEventListener('click', function(event) {
        event.preventDefault();
        showLoginPopup();
    });

    // Event listener for signup link
    signupLink.addEventListener('click', function(event) {
        event.preventDefault();
        showSignupPopup();
    });

    // Event listener for signup button inside login popup
    signupBtn.addEventListener('click', function(event) {
        event.preventDefault();
        closePopup(); // Close login popup
        showSignupPopup(); // Show signup popup
    });

    // Event listeners for close buttons
    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            closePopup();
        });
    });

    // Event listener for login form submission
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        loginUser();
    });

    // Event listener for signup form submission
    signupForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(signupForm);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'signup.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    window.location.href = 'index.php'; // Redirect after successful signup
                } else {
                    // Handle signup error
                    console.error('Error signing up:', response.message);
                }
            } else {
                console.error('Error signing up. Please try again.');
            }
        };
        xhr.send(formData);
    });
});

// Function to handle user login
function loginUser() {
    event.preventDefault(); // Prevent form submission
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'login.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.status === 'success') {
                window.location.href = 'profile.php'; // Redirect to profile page on successful login
            } else {
                document.getElementById('login-error').textContent = response.message; // Display error message
            }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.onerror = function () {
        console.error('Request failed. Check your connection.');
    };

    var formData = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
    xhr.send(formData);

    return false; // Prevent default form submission
}

// script.js

function signupUser() {
    event.preventDefault(); // Prevent form submission
    var fullname = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var username = document.getElementById('signup-username').value;
    var password = document.getElementById('signup-password').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'signup.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.status === 'success') {
                window.location.href = 'user_profile.php'; // Redirect to profile page on successful signup
            } else {
                // Handle error scenario if needed
                console.log(response.message);
            }
        } else {
            console.error('Request failed. Status: ' + xhr.status);
        }
    };

    xhr.onerror = function () {
        console.error('Request failed. Check your connection.');
    };

    var formData = 'fullname=' + encodeURIComponent(fullname) + '&email=' + encodeURIComponent(email) +
                   '&username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
    xhr.send(formData);

    return false; // Prevent default form submission
}


function updatePrice() {
    const locationSelect = document.getElementById('location');
    const selectedOption = locationSelect.options[locationSelect.selectedIndex];
    const price = selectedOption.getAttribute('data-price');
    document.getElementById('location-price').innerText = selectedOption.text + ' - Rp ' + parseInt(price).toLocaleString('id-ID');
}


// Ambil elemen logout-btn dan tambahkan event listener
document.getElementById('logout-btn').addEventListener('click', function() {
    // Simulasi aksi logout
    // Misalnya, menghapus token atau data sesi
    alert('Logged out successfully');
    // Redirect atau lakukan aksi logout lainnya sesuai kebutuhan
});

// Optional: Tambahkan event listener untuk menutup dropdown saat klik di luar dropdown
window.addEventListener('click', function(event) {
    var dropdownContent = document.getElementById('dropdown-content');
    var profileBtn = document.getElementById('profile-btn');
    if (!event.target.matches('.profile-btn')) {
        dropdownContent.style.display = 'none';
    } else {
        dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
    }
});
