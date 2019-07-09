$(function (){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.navscroll').addClass("n-scroll");
    } else {
      $(".navscroll").removeClass("n-scroll");
    }
  });
});
// $(function (){
//   $(window).scroll(function(){
//     if ($(this).scrollTop() > 100) {
//       $(".essence-logo").addClass('other-logo').attr("src", "assets/img/essence-logo.png");
//     } else {
//       $(".essence-logo").removeClass("other-logo").attr("src", "assets/img/essence-logo.svg");
//     }
//   });
// });


$(document).ready(main);

var contador = 1;

function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle();

		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}

	});

};
$(document).ready(function(){
    $(".single-item").slick({
    dots: true,
    arrows: true,
    adaptiveHeight: true,
    fade: true,
    mobileFirst: true,
    cssEase: 'linear',
    lazyLoad: 'ondemand',
    adaptiveHeight: true,
    adaptiveWidth: true,
    arrows: true,
    centerMode: true,
    autoplay: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    centerPadding:false,
    });

  });

$(function(){
  $('#Container').mixItUp();
});

(function ($) {
    $.fn.countTo = function (options) {
        options = options || {};

        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);

            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;

            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};

            $self.data('countTo', data);

            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);

            // initialize the element with the starting value
            render(value);

            function updateTimer() {
                value += increment;
                loopCount++;

                render(value);

                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }

                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;

                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
  });

  // start all the timers
  $('.timer').each(count);

  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
  }
});

$( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});

//material contact form animation
$('.contact-form').find('.form-control').each(function() {
  var targetItem = $(this).parent();
  if ($(this).val()) {
    $(targetItem).find('label').css({
      'top': '10px',
      'fontSize': '14px'
    });
  }
})
$('.contact-form').find('.form-control').focus(function() {
  $(this).parent('.input-block').addClass('focus');
  $(this).parent().find('label').animate({
    'top': '10px',
    'fontSize': '14px'
  }, 300);
})
$('.contact-form').find('.form-control').blur(function() {
  if ($(this).val().length == 0) {
    $(this).parent('.input-block').removeClass('focus');
    $(this).parent().find('label').animate({
      'top': '25px',
      'fontSize': '18px'
    }, 300);
  }
})
