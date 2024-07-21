
// side-bar functionality 

document.addEventListener('DOMContentLoaded', function () {
    var sidebar = document.getElementById('sidebar');
    var content = document.querySelector('.content');
    var sidebarToggle = document.querySelector('.sidebar-toggle');

    function toggleSidebar() {
        sidebar.classList.toggle('active');
        content.classList.toggle('blur');
    }

    function closeSidebar() {
        sidebar.classList.remove('active');
        content.classList.remove('blur');
    }

    sidebarToggle.addEventListener('click', toggleSidebar);

    // Close sidebar when clicking outside of it
    document.addEventListener('click', function (event) {
        var target = event.target;
        if (!sidebar.contains(target) && target !== sidebarToggle) {
            closeSidebar();
        }
    });

    // Close sidebar when pressing the Escape key
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeSidebar();
        }
    });
});


// side-bar functionality 

