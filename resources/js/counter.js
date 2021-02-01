var a = 0;
    var b = 0;
    var c = 0;
    $(window).scroll(function() {

      var oTop = $('#counter-1').offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $('#counter-1 .counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {

              duration: 2000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }

            });
        });
        a = 1;
      }

    });
    $(window).scroll(function() {

      var oTop = $('#counter-2').offset().top - window.innerHeight;
      if (b == 0 && $(window).scrollTop() > oTop) {
        $('#counter-2 .counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {

              duration: 2000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }

            });
        });
        b = 1;
      }

    });
    $(window).scroll(function() {

      var oTop = $('#counter-3').offset().top - window.innerHeight;
      if (c == 0 && $(window).scrollTop() > oTop) {
        $('#counter-3 .counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {

              duration: 1000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }

            });
        });
        c = 1;
      }

    });