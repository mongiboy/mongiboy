let url = document.location.pathname;
let width = $(window).width();


//*Owl Carousel
$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
});

let owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:true,
    margin:0,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },            
        960:{
            items:1
        },
        1200:{
            items:1
        }
    }
});

//* FAQ
let questions = document.querySelectorAll('.questions');
let answers = document.querySelectorAll('.answers');
let arrayQuestions = [];

for(let i =0; i < questions.length; i++){
    arrayQuestions.push(questions[i]);   
    questions[i].addEventListener('click', function(e){
        let ind = arrayQuestions.indexOf(e.target);
        if (answers[ind].style.display != 'block'){
            answers[ind].style.display = 'block';
            questions[ind].classList.toggle('questionsOpen')
        } else {;
            answers[ind].style.display = 'none';
            questions[ind].classList.toggle('questionsOpen')
        }
    });
}

//*Скролл меню
$('a.navLink').on('click', function(e){
    let anchor = $(this).attr('href');
    if(url == '/'){
        e.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $(anchor).offset().top - 0
        }, 800);
    } else{
        document.location.href = '/' + anchor;
    }
});

//*Скролл лого
$('a.logoLink').on('click', function(e){
    let anchor = $(this).attr('href');
    if(url == '/'){
        e.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $(anchor).offset().top - 0
        }, 800);
    } else{
        document.location.href = '/';
    }
});

//*Гамбургер меню
$('.navMobile div').on('click', () =>{
    $('.navMobile div').toggleClass('active');
    $('.navMobile nav').toggleClass('open');
    $('body').toggleClass('fixedPage');

});

//*Показ блока Правила
$('.rule').on('click', function(){
    $('.subRules').toggleClass('open');
})

//*Я.карты в мобайл/вёб
$(document).ready(function(){
    if(width > 650){
        $('#map').html('<script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab4a18835f3c1a698928c2ff53fc0c20ea57dbb677ca4da7c8df4fc16496940ed&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false&amp;apikey=1b2725b8-483a-420e-a702-4cd01a1c8b58"></script>');
    } else{
        $('#map').html('<a href="https://yandex.ru/maps/?um=constructor%3Ab4a18835f3c1a698928c2ff53fc0c20ea57dbb677ca4da7c8df4fc16496940ed&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3Ab4a18835f3c1a698928c2ff53fc0c20ea57dbb677ca4da7c8df4fc16496940ed&amp;width=' +width +'&amp;height=450&amp;lang=ru_RU" alt="" style="border: 0;" /></a>')
    }
})

//*Кнопки бронирования
$('.openBnovo').click(function(){
    let uid = 'e04fa72f-4546-4921-ac06-9b97b0adafde';
    
    window.open('https://reservationsteps.ru/rooms/index/'+uid, 'reservationsteps', 'width=840, height=840, scrollbars=yes, toolbar=yes, location=1, resizable=1');
    return false;
});

//*Modal Form
$('#reviews .btn').click(function(){
    $('#modalRev').toggleClass('show');
    $('body').toggleClass('hideScroll');
});

$('.x').click(function(){
    closeModal();
});

$(document).on('click', function(e) {
    if(e.target.id == 'modalRev'){
        closeModal();
    }
});

function closeModal(){
    $('#modalRev').toggleClass('show');
    $('body').toggleClass('hideScroll');
    $('#sendReview').removeClass('hide');
    $('#thank').addClass('hide');
}


//*Send AJAX
$('#sendReview').on('submit', function(event){
    event.preventDefault();
    $.ajax({
        url: 'send_rev.php',
        type: 'POST',
        dataType: 'html',
        data: $(this).serialize(),
        success:function(data){
            $('#sendReview').toggleClass('hide');
            $('#thank').removeClass('hide');
            $('#thank').html(data);
        }
    });
})


window.onload = function(){
    setTimeout(function(){
        frames["_bn_iframe__bn_widget_"].document.querySelector('.bnovo__button').style.transition = 'color .3s, background .3s';
    }, 800);
}