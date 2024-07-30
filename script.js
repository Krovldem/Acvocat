let tabsOpen = false;

function showTab(tabId) {
    const contents = document.querySelectorAll('.content');

    contents.forEach(content => {
        content.classList.remove('active');
    });

    const selectedContent = document.getElementById(tabId);
    selectedContent.classList.add('active');
    
    // Скрываем меню при выборе вкладки
    toggleTabs(false);
}

function toggleTabs(forceClose = null) {
    const tabsMenu = document.getElementById('tabs-menu');
    
    if (forceClose === null) {
        tabsOpen = !tabsOpen; // Переключаем состояние
    } else {
        tabsOpen = forceClose; // Задаем состояние вручную
    }

    if (tabsOpen) {
        tabsMenu.classList.add('show'); // Добавляем класс для показа
    } else {
        tabsMenu.classList.remove('show'); // Удаляем класс для скрытия
    }
}

function goHome() {
    const mainContent = document.getElementById("main-content");

    // Get the active content element
    const activeContent = document.querySelector(".content.active");

    // Remove the active class from the active content element
    activeContent.classList.remove("active");

    // Add the active class to the main content element
    mainContent.classList.add("active");
}
