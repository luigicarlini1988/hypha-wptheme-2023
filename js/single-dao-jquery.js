$(document).ready(function(){
  $(".feat-list").click(function(){
    $(this).toggleClass("expand");
    $(this).find("ul").toggleClass("expand");
  });

  $(".expander").click(function(){
    $(".feat-list").find("ul").toggleClass("expand");
    $(this).toggleClass("expand");
    $(this).html($(this).html() == 'Hide Features' ? 'Show Feature' : 'Hide Features');
  });

});
