document.addEventListener('DOMContentLoaded', function() {

  document.getElementById('menu-hamburger').addEventListener('click', function() {

      const menu = document.querySelector('.hamburger-menu');
      const menuPrincipal = document.querySelector('.menu-principal');
      menu.classList.toggle('open');
      menuPrincipal.classList.toggle('open');
      // console.log('menu-hamburger clicked');
      var ulMenuHeight = document.querySelector('.menu-principal-ul').offsetHeight;

      var containerHeight = ulMenuHeight + 50; // Adjust the value as needed
      var containerElement = document.querySelector('.menu-principal-container');
      containerElement.style.height = containerHeight + 'px';
      var listItems = document.querySelectorAll('.menu-principal-ul li');
      
      // Loop through each list item
      listItems.forEach(function(item, index) {
          // Set a timeout for each list item to show gradually
          setTimeout(function() {
              var openClass = document.querySelector('.menu-principal');
              var menuPrincipalUlState = document.querySelector('.menu-principal-ul');
              if(openClass.classList.contains('open')){
                  item.style.visibility = 'visible';
                  item.style.opacity = 1;
                  // menuPrincipalUlState.style.display = 'none';
              }
             else{
              item.style.visibility = 'hidden';
              item.style.opacity = 0;
          //    menuPrincipalUlState.style.display = 'flex';
             }
              // item.style.animation = 'fadeIn 0.5s ease-in-out';
          }, (index + 1) * 120); // Adjust the delay (in milliseconds) as needed
      });
  });



}   );