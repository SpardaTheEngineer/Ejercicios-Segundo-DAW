window.addEventListener('load', () => {
    //Que funcione el menucico
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu-desplegable');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });


});