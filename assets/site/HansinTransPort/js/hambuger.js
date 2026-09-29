{
    const hambuger = document.querySelector('.hambuger');
    const headernav = document.querySelector('.headernav');

    hambuger.addEventListener( 'click' , function(){
        hambuger.classList.toggle('active');
        headernav.classList.toggle('open');
    })
}