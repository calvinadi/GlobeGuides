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
    // Move the variable declarations inside the DOMContentLoaded event handler
    const loginLink = document.getElementById('login-link');
    const signupLink = document.getElementById('signup-link');
    const closeBtns = document.getElementsByClassName('close');

    // Function to show login popup
    function showLoginPopup() {
        const loginPopup = document.getElementById('login-popup');
        loginPopup.style.display = 'block';
    }

    // Function to show signup popup
    function showSignupPopup() {
        const signupPopup = document.getElementById('signup-popup');
        signupPopup.style.display = 'block';
    }

    // Function to close popups
    function closePopups() {
        const loginPopup = document.getElementById('login-popup');
        const signupPopup = document.getElementById('signup-popup');
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
        const loginPopup = document.getElementById('login-popup');
        const signupPopup = document.getElementById('signup-popup');
        if (e.target == loginPopup || e.target == signupPopup) {
            closePopups();
        }
    });

    // Switch between login and signup
    document.getElementById('signup-link').addEventListener('click', function(e) {
        e.preventDefault();
        const loginPopup = document.getElementById('login-popup');
        const signupPopup = document.getElementById('signup-popup');
        loginPopup.style.display = 'none';
        signupPopup.style.display = 'block';
    });

    document.getElementById('login-link').addEventListener('click', function(e) {
        e.preventDefault();
        const loginPopup = document.getElementById('login-popup');
        const signupPopup = document.getElementById('signup-popup');
        signupPopup.style.display = 'none';
        loginPopup.style.display = 'block';
    });

    // Signup form submission
    document.getElementById('signup-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        fetch('php/signup_process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(text => {
            console.log('Raw response:', text); // Untuk debugging
            return JSON.parse(text);
        })
        .then(data => {
            if (data.success) {
                alert(data.message);
                closePopups();
            } else {
                alert('Signup failed: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred: ' + error.message);
        });
    });
});
