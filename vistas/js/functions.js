$(document).ready(function () {

  $('.chart').easyPieChart({
    easing: 'easeOutBounce',
    onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
    }
});

/* OWL Carousel */
$('.owl-carousel').owlCarousel({
  items: 1,
  margin: 10
});

/* $('.collapse-show').collapse(); */


/* $('.container-blog').isotope({
  // options
  itemSelector: '.blog-post',
  layoutMode: 'fitRows'
});
 */
});




