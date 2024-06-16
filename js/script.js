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
        
        const formData = new FormData(loginForm);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    window.location.href = 'index.php';
                } else {
                    loginError.textContent = response.message;
                }
            } else {
                loginError.textContent = 'Error logging in. Please try again.';
            }
        };
        xhr.send(formData);
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
