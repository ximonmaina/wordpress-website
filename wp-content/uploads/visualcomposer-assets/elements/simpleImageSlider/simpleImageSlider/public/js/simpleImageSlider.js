(function ($) {
  window.vcv.on('ready', function () {
    var sliders = $('.vce-simple-image-slider-list')
    if (sliders.length) {
      sliders.each(function () {
        var slider = $(this)
        var dots = slider.parent().find('.vce-simple-image-slider-dots')
        var prevArrow = slider.find('.vce-simple-image-slider-prev-arrow') || ''
        var nextArrow = slider.find('.vce-simple-image-slider-next-arrow') || ''
        var settings = {
          autoplay: slider[0].dataset.slickAutoplay === 'on',
          autoplaySpeed: slider[0].dataset.slickAutoplayDelay,
          fade: slider[0].dataset.slickEffect === 'fade',
          arrows: slider[0].dataset.slickArrows === 'on',
          prevArrow: prevArrow,
          nextArrow: nextArrow,
          appendDots: dots,
          dots: slider[0].dataset.slickDots === 'on',
          initialSlide: 0,
          respondTo: 'slider',
          swipe: slider[0].dataset.slickDisableSwipe !== 'on',
          swipeToSlide: slider[0].dataset.slickDisableSwipe !== 'on',
          touchMove: slider[0].dataset.slickDisableSwipe !== 'on'

        }
        if (slider.hasClass('slick-initialized')) {
          slider.vcSlick && slider.vcSlick('unslick')
        }
        slider.vcSlick && slider.vcSlick(settings)
      })
    }
  })
})(window.jQuery)
