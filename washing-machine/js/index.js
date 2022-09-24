$(document).ready(function()
{
   function Text8Scroll()
   {
      var $obj = $("#wb_Text8");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_Text8', 'slide-down-in', 0, 2000);
      }
   }
   Text8Scroll();
   $(window).scroll(function(event)
   {
      Text8Scroll();
   });
});
