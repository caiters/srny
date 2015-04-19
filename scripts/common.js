(function(){
  // navigation
  mediaCheck({
    media: '(min-width: 767px)',
    entry: function(){
      $('body').addClass('medium-screen');
    },
    exit: function(){
      $('body').addClass('mobile');
    }
  });

  $('#showNav').click(function(e){
    e.preventDefault();
    if($('body').hasClass('mobile')){
      $('.main-menu').toggleClass('dropped');
    }
  });
})();
