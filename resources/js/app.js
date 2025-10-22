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

const sidebar = document.getElementById('sidebar');
const sidebarChild = document.querySelector('#id > section')
const sidebarBtn = document.getElementById('sidebar-button');

sidebarBtn.addEventListener('click', () => {
    if (localStorage.getItem('sidebarMode') !== 'closed') {
        localStorage.setItem('sidebarMode', 'closed');
    }
    else {
        localStorage.setItem('sidebarMode', null);
    }
    sidebarFunction();
})

function sidebarFunction() {
    if (localStorage.getItem('sidebarMode') == 'closed') {
        sidebar.classList.remove('w-[260px]');
        sidebar.classList.add('w-[80px]', 'closed');
    }
    else {
        sidebar.classList.remove('w-[80px]', 'closed');
        sidebar.classList.add('w-[260px]');
    }
}

sidebarFunction()