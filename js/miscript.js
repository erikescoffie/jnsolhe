$(document).ready(function(){
       
    var flag = false;
    var scroll;
    
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        
        if(scroll > 1){
            if(flag){  
                $("#logo").css({"width": "650px", "height" = "100"});
                
                $("header").css({"background-color": "#4A5050"})
                flag = false;  
            }
            
        }else{
            if(!flag){   
                $("#logo").css({"width": "130px", "height":"20px", "border" : "1px red solid", "margin-top" : "10px"});
                
                $("header").css({"background-color": "transparent"})
                flag = true;
                
            }
        }
        
    
    });
    
});