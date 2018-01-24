// JavaScript Document 兼容各浏览器
function goTopEx(){
        var obj=document.getElementById("goTopBtn");

 

        //获取页面scrollTop 

        function getScrollTop(){
            //return document.documentElement.scrollTop;

            //ff / chrome safari / ie 浏览器兼容
            return document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop; 

            }

        //设置页面scrollTop
        function setScrollTop(value){
            // document.documentElement.scrollTop=value;

            //ff / chrome safari / ie 浏览器兼容
            (/(chrome|version)/i).test(navigator.userAgent) ? document.body.scrollTop = value : document.documentElement ? document.documentElement.scrollTop = value : document.body.scrollTop = value;
            }   
        window.onscroll=function(){getScrollTop()>0?obj.style.display="":obj.style.display="none";}
        obj.onclick=function(){
            var goTop=setInterval(scrollMove,10);
            function scrollMove(){
                    setScrollTop(getScrollTop()/1.1);
                    if(getScrollTop()<1)clearInterval(goTop);
                }
        }
    }
