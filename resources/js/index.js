
/*Scroll to top*/
var mybutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        mybutton.style.display = "block";
      }
      else{
          mybutton.style.display="none";
      }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }


  if($('.modal').length > 0 ){
    var modalUniqueClass = ".modal";
    $('.modal').on('show.bs.modal', function(e) {
      var $element = $(this);
      var $uniques = $(modalUniqueClass + ':visible').not($(this));
      if ($uniques.length) {
        $uniques.modal('hide');
        $uniques.one('hidden.bs.modal', function(e) {
          $element.modal('show');
        });
        return false;
      }
    });
}