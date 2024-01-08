// init Isotope
var $grid = $('.catalago-list').isotope({
  // options
});
// filter items on button click
$('.isotope-filter-button-group').on('click', 'button', function () {
  var filterValue = $(this).attr('data-filter');
  resetFilterBtns();
  $(this).addClass('custom-active-filter-btn');
  $grid.isotope({ filter: filterValue });
});

var filterBtns = $('.isotope-filter-button-group').find('button');
function resetFilterBtns(){
  filterBtns.each(function(){
    $(this).removeClass('custom-active-filter-btn');
  });
}