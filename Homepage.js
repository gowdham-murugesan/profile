// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// active-link

$(function() {
    $("[href]").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("w3-text-teal");
        }
    });
  });

  document.getElementById("projectclick").classList.remove("w3-text-teal");
  document.getElementById("aboutclick").classList.remove("w3-text-teal");
  document.getElementById("contactclick").classList.remove("w3-text-teal");

function teal() {
    document.getElementById("projectclick").classList.add("w3-text-teal");
    document.getElementById("aboutclick").classList.remove("w3-text-teal");
    document.getElementById("contactclick").classList.remove("w3-text-teal");
}
function teal1() {
    document.getElementById("projectclick").classList.remove("w3-text-teal");
    document.getElementById("aboutclick").classList.add("w3-text-teal");
    document.getElementById("contactclick").classList.remove("w3-text-teal");
}
function teal2() {
    document.getElementById("projectclick").classList.remove("w3-text-teal");
    document.getElementById("aboutclick").classList.remove("w3-text-teal");
    document.getElementById("contactclick").classList.add("w3-text-teal");
}

//Facebook

if(screen.width < 600) {
    document.getElementById("laptopscreen").style.display = "none";
    document.getElementById("laptopscreen1").style.display = "none";
  }
  else {
    document.getElementById("phonescreen").style.display = "none";
    document.getElementById("phonescreen1").style.display = "none";
  }

  //Progress bar

  function isOnScreen(element)
  {
      var curPos = element.offset();
      var curTop = curPos.top - $(window).scrollTop();
      var screenHeight = $(window).height();
      return (curTop > screenHeight) ? false : true;
  }

    (function chkhover(){
        if(isOnScreen($('#myBar')))
    {
        var elem = document.getElementById("myBar");   
        var width = elem.innerHTML.slice(0, -1);
        var id = setInterval(frame, 10);
        function frame() {
            if (width < 70){
                width++; 
                elem.style.width = width + '%'; 
                elem.innerHTML = width * 1  + '%';
            }
            else {
                clearTimeout(hello);
                clearInterval(id);
            } 
        }
        var elem1 = document.getElementById("myBar1");   
        var width1 = elem1.innerHTML.slice(0, -1);
        var id1 = setInterval(frame1, 10);
        function frame1() {
            if (width1 < 75) {
                width1++; 
                elem1.style.width = width1 + '%'; 
                elem1.innerHTML = width1 * 1  + '%';
            }
            else {
                clearTimeout(hello);
                clearInterval(id1);
            }
        }
        var elem2 = document.getElementById("myBar2"); 
        var width2 = elem2.innerHTML.slice(0, -1);
        var id2 = setInterval(frame2, 10);
        function frame2() {
            if (width2 < 80) {
                width2++; 
                elem2.style.width = width2 + '%'; 
                elem2.innerHTML = width2 * 1  + '%';
            }
            else {
                clearTimeout(hello);
                clearInterval(id2);
            }
        }
    }
        var hello = setTimeout(chkhover, 500);
    }())

  //AOS

  AOS.init({
    offset: 0,
    duration: 500,
    easing: 'ease-in-quad',
    delay: 100,
    once: true
  });

  // Loader

  $(window).on('load', function () {
    $('#loading').fadeOut();
  });

  //Scroll to Top

  //Get the button
    var mybutton = document.getElementById("movetop");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }

    // window.onload = function() {
    //     if(!window.location.hash) {
    //         window.location = window.location + '#loaded';
    //         window.location.reload();
    //     }
    // }
