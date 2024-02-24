document.addEventListener('DOMContentLoaded', function() {
 
    document.getElementById('arrowTimes').addEventListener('click', function() {
      let menuAllTimes = document.querySelector('.description-contact-times-all');
      let arrowTimes = document.querySelector('.arrow_time');

    //   if (menuAllTimes.classList.contains('open')) {
    //     menuAllTimes.classList.toggle('close');
    //     menuAllTimes.classList.add('close'); 
    //   } else {
    //     menuAllTimes.classList.add('open'); 
    //   if(menuAllTimes.classList.contains('close')){
    //     menuAllTimes.classList.remove('close'); 
    //   }
    // }

    menuAllTimes.classList.toggle('open');
    arrowTimes.classList.toggle('open');
      });
    });
  