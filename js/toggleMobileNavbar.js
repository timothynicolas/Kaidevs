const mobileNavbar = document.querySelector('.mobile-navbar');

export function showMobileNavbar(){
    mobileNavbar.classList.add('active');
};

export function hideMobileNavbar(){
    mobileNavbar.classList.remove('active');
}