// slider js 
const sliderContainer = document.querySelector('.slider-container')
const slideRight = document.querySelector('.right-slide')
const slideLeft = document.querySelector('.left-slide')
const upButton = document.querySelector('.up-button')
const downButton = document.querySelector('.down-button')
const slidesLength = slideRight.querySelectorAll('div').length

let activeSlideIndex = 0

slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`

upButton.addEventListener('click', () => changeSlide('up'))
downButton.addEventListener('click', () => changeSlide('down'))

const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight
    if(direction === 'up') {
        activeSlideIndex++
        if(activeSlideIndex > slidesLength - 1) {
            activeSlideIndex = 0
        }
    } else if(direction === 'down') {
        activeSlideIndex--
        if(activeSlideIndex < 0) {
            activeSlideIndex = slidesLength - 1
        }
    }

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`
}

$(document).ready(function(){

    

    $('.btn_con').click(function(){
        console.log('clicked');
        window.scrollBy(0, 625);
    });

    $(window).scroll(function(){
        if($(document).scrollTop() == 625 || $(document).scrollTop() > 625){
          $('#trsk_top_nav').css({'position': 'fixed', 'top':'0', 'left':'0','right':'0','z-index':'100'});
          $('.abt_intro').css({'margin-top':'76px'});
        }else{
          $('#trsk_top_nav').css({'position': ''});
          $('.abt_intro').css({'margin-top':'0px'});
        }

        if($(document).scrollTop() >=300){
            $('.vid_con').addClass('slidin_right');
            $('.h_con').addClass('slidin_left');
        }else if($(document).scrollTop() < 300){
            $('.vid_con').removeClass('slidin_right');
            $('.h_con').removeClass('slidin_left');
        }
        
    });



});