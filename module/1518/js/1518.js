$(document).ready(function(){
    $(".navigation").sticky({
    topSpacing: 0,
    zIndex: '50'
    });
       
   $(".search").hide();
   if($(".search").hide()){
       $(".fa-search").click(function(){
        $(".search").show();
       });
   }else{
    $(".fa-search").click(function(){
        $(".search").hide();
   });
   }
});