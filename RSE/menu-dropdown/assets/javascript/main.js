window.addEventListener("DOMContentLoaded", () => {

    let projectsBtn = document.getElementById("projects-dropdown-btn");

    projectsBtn.addEventListener("click", () => {
        let dropdown = document.getElementById("projects-dropdown");

        dropdown.classList.toggle("dropdown-closed");
        dropdown.classList.toggle("dropdown-opened");
    })
})

window.addEventListener("DOMContentLoaded", (event) => {
    var $mobileHeaderBtn = document.getElementById('mobile-header-button');

    $mobileHeaderBtn.addEventListener('click', function(){
        var $mainNav = document.getElementById('main-nav');
        var $classes = $mainNav.classList;

        $classes.toggle("open");
    });
});