$(document).ready(function(){
  // Activate the Carousel, but pause it from the start
  $(".myCarousel").carousel("pause");
        
  // Click on the button to start sliding 
  $(".myCarousel").mouseenter(function(){
    $(".myCarousel").carousel("cycle");
  });

  // Click on the button to stop sliding 
  $(".myCarousel").mouseleave(function(){
    $(".myCarousel").carousel("pause");
  });
    
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $(".myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $(".myCarousel").carousel("next");
  });
});

/*******TOOL-TIP**********/
