document.addEventListener('DOMContentLoaded', function() {
 
    document.getElementById('arrowTimes').addEventListener('click', function() {
      // Select the menu element where you want to toggle the class (replace 'menu-principal-ul' with the actual ID or class)
      let menuAllTimes = document.querySelector('.description-contact-times-all');
      let menuHamburger = document.querySelectorAll('.menu-principal-btn-bar');


        // setTimeout(function () {
      //   menuElement.classList.add('close');
      // }, 3000); // 3000 milliseconds (3 seconds)

      if (menuAllTimes.classList.contains('open')) {
        menuAllTimes.classList.remove('open'); 
        menuAllTimes.classList.add('close'); 
      } else {
        menuAllTimes.classList.add('open'); 
      if(menuAllTimes.classList.contains('close')){
        menuAllTimes.classList.remove('close'); 
      }
    }

      });
    });
  