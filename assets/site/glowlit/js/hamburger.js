{
    const buttonTrigger = document.querySelector('.buttonTrigger');
    const headerNav = document.querySelector('.headerNav');
    const overlay = document.querySelector('.overlay');
    const body =document.querySelector('.body');

    
    buttonTrigger.addEventListener( 'click' , function(){
      buttonTrigger.classList.toggle('active');
      headerNav.classList.toggle('open');
      overlay.classList.toggle('overlayOpen');
      body.classList.toggle('noscroll');
      
      active.addEventListener( 'click' , function(){
        active.classList.remove('active');
      }); 
    });
    
  }