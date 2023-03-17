
window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
    }, 500);
}

// select
var x, i, j, l, ll, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}


function closeAllSelect(elmnt) {
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}


document.addEventListener("click", closeAllSelect);

(function () {
    const header = document.querySelector('.headerMob');
    const icon = document.querySelector('.icon-container');
    icon.onclick = function () {
        header.classList.toggle('menu-open');
    }
}());


jQuery(document).ready(function ($) {
    var scrollable = $(".wrapperCooperationItems");
    wow = new WOW({
        scrollContainer: scrollable,

    });

    scrollable.on('scroll.wow', function () {
        scrollable.find('.wow:not(.animated)').removeAttr('style').addClass('animated');
        scrollable.find('.wow.animated').css({ 'animation-duration': '1.5s' })
    });


    wow.init();

    $(function () {
        $('.wrapperMenuPages a').each(function () {
            var location = window.location.href;
            var link = this.href;
            if (location == link) {
                $(this).addClass('activeLinkMenuPages');
            }
        });
    });

});


const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()

        const blockID = anchor.getAttribute('href').substr(1)

        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    })
}

function openTestFirst() {
    let test = document.getElementById('firstTest');
    let grid = document.getElementById('testQuestionGrid');
    grid.classList.add("grid");
    test.style.display = 'block';
    test.style.visibility = 'visible';
    test.style.transition = '1s';
    test.style.opacity = '1';

}

jQuery(document).ready(function ($) {
    $(".wrapperWordsPornPost").slice(0, 2).show();
    $("#loadMore").on("click", function (e) {
        e.preventDefault();
        $(".wrapperWordsPornPost:hidden").slice(0, 2).slideDown();
    });

    $(".contentPagesSongItem").slice(0, 4).show();
    $("#loadMoreSongs").on("click", function (e) {
        e.preventDefault();
        $(".contentPagesSongItem:hidden").slice(0, 4).slideDown();
    });

    $(document).on('change', '.custom-select', function () {
        var target = $(this).data('target');
        console.log(target)
        var show = $("option:selected", this).data('show');
        $(target).children().addClass('hideOptionItem');
        $(show).removeClass('hideOptionItem');
    });


      
    var $select = $('select'),
        $speed = 'fast';
    
    $select.each(function(){
      // Allow default browser styling
      if ( $(this).hasClass('default') ) {
        return;
      }
      $(this).css('display', 'none');
      // Generate fancy select box
      $(this).after('<ul class="fancy-select" style="display: none;"></ul>');
      var $current = $(this),
          $fancy = $current.next('.fancy-select');
      
      // Get options
      var $options = $(this).find('option');
      $options.each(function(index){
        var $val = $(this).val(),
            $text = $(this).text(),
            $disabled = '';
        // Add class for disabled options
        if ( $(this).attr('disabled') ) $disabled = ' disabled';      
        
        if ( index == 0 ) {
          // Create clickable object from first option
          $fancy.before('<span class="selected" data-val="'+ $val +'">'+ $text +'</span>');
        }
        // Load all options into fake dropdown
        $fancy.append('<li class="fancy-option'+ $disabled +'" data-val="'+ $val +'">'+ $text +'</li>');
        // Update fake select box if this option is selected
        if ( $(this).attr('selected') ) {
          $(this).parent('select').val($val);
          $(this).parent('select').next('.selected').attr('data-val', $val).text($text);
        }
      });
      
    });
    
    // Show/hide options on click
    $('.selected').click(function(target){
      var $box = $(this).next('.fancy-select'),
          $target = target,
          $object = $(this);
      
      // Prevent multiple open select boxes
      if ( $box.is(':visible') ) {
        $box.slideUp($speed);
        return;
      } else {
        $('.fancy-select').slideUp();
        $box.slideDown($speed);
      }
      
      // Click outside select box closes it
      $target.stopPropagation();
      if ( $box.css('display') !== 'none' ) {
        $(document).click(function(){
          $box.slideUp($speed);
        });
      }
    });
    
    // Make selection
    $('.fancy-option').click(function(){
      var $val = $(this).attr('data-val'),
          $text = $(this).text(),
          $box = $(this).parent('.fancy-select'),
          $selected = $box.prev('.selected'),
          $disabled = $(this).hasClass('disabled');
      
      // Basic disabled option functionality
      if ( $disabled ) {
        return;
      }
      
      $box.slideUp($speed);
      
      // Update select object's value
      // and the fake box's "value"
      $selected.prev('select').val($val);
      $selected.attr('data-val', $val).text($text);
      
      // Get Output
      var $what = $('#what').val(),
          $when = $('#when').val();
      $('.output').text('You want '+ $what +' '+ $when +'.');
    });
});


/**
 * Fancy Select Box by Austin Wulf
 * http://www.austinwulf.com
 *
 * To add:
 * + keyboard support, including:
 *   - arrow keys
 *   - return/space for select
 *   - tab focus
 * + touch support
 * + better accessibility
 * + open above box instead of below when
 *   dropdown is at viewport bottom
 **/
