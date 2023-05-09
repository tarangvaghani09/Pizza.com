const togglebtn = document.getElementById('toggle');
const navlink = document.getElementById('nav-link');

togglebtn.addEventListener('click', () => {
    navlink.classList.toggle('nav-act');
})
