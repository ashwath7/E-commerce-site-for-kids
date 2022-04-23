// init Isotope
var $grid = $('.collection-list').isotope({
  // options
});
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  resetFilterBtns();
  $(this).addClass('active-filter-btn');
  $grid.isotope({ filter: filterValue });
});

var filterBtns = $('.filter-button-group').find('button');
function resetFilterBtns(){
  filterBtns.each(function(){
    $(this).removeClass('active-filter-btn');
  });

}
timer();
function timer(){
  if($('.timer').length){
    var target_date = new Date("May 06, 2022").getTime();

    // var date = new Date();
    // date.setDate(date.getDate() + 3);
    // var target_date = date.getTime();

    let days, hours, minutes, seconds;
    var d = $('#day');
    var h = $('#hours');
    var m = $('#minutes');
    var s = $('#second');

    setInterval(function(){
      var current_date = new Date().getTime();
      var seconds_left = (target_date - current_date)/1000;

      days = parseInt(seconds_left / 86400);
      seconds_left = seconds_left % 86400;

      hours = parseInt(seconds_left / 3600);
      seconds_left = seconds_left % 3600;

      minutes = parseInt(seconds_left / 60);
      seconds = parseInt(seconds_left % 60);

      d.text(days);
      h.text(hours);
      m.text(minutes);
      s.text(seconds);


    },1000);

  }
}
