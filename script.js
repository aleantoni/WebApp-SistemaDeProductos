window.onload = function() {
  var toggleMenu = document.getElementById('toggleMenu');
  var sidebar = document.getElementById('sidebar');
  var mainContent = document.querySelector('main');

  toggleMenu.addEventListener('click', function() {
    sidebar.classList.toggle('active');
    mainContent.classList.toggle('active');
  });
};
