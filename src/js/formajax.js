document.addEventListener('DOMContentLoaded', function() {
 
    document.getElementById('arrowTimes').addEventListener('click', function() {
      let menuAllTimes = document.querySelector('.description-contact-times-all');


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
  