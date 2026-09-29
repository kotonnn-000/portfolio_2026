{
    const buttonTrigger = document.querySelector('.buttonTrigger');
    const headerNav = document.querySelector('.headerNav');

    
    buttonTrigger.addEventListener( 'click' , function(){
      buttonTrigger.classList.toggle('active');
      headerNav.classList.toggle('open');
    });
    
  }