var images=new Array('/images/1.jpg','/images/2.jpg','/images/3.jpg','/images/4.jpg','/images/5.jpg','/images/6.jpg','/images/7.jpg','/images/8.jpg');
                var nextimage=0;
                doSlideshow();

                function doSlideshow(){
                    if(nextimage>=images.length){nextimage=0;}
                    $('#background_image')
                    .css('background-image','url("'+images[nextimage++]+'")')
                    .fadeIn(500,function(){
                        setTimeout(doSlideshow,30000);
                    });
                }