const themeSwitch = document.getElementById('theme-switch');

themeSwitch.addEventListener('click', () => {
    if (localStorage.getItem('theme') !== 'dark') {
        localStorage.setItem('theme', 'dark');
    }
    else {
        localStorage.setItem('theme', null);
    }
    themeFunction();
})

function themeFunction() {
    if (localStorage.getItem('theme') == 'dark') {
        document.documentElement.classList.add('dark');
    }
    else {
        document.documentElement.classList.remove('dark');
    }
}

themeFunction()