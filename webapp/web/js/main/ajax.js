/**
 * Created by Administrator on 2016/4/6.
 */

;(function(win){
    var Listen = {};


    var objs= document.getElementsByClassName("line");
    var stateimg = document.getElementsByClassName("imgstate");
    var pro = document.getElementsByClassName("pro");


    j = 0;
    Listen = {
        //异步代码
        loadXMLDoc:function(){
            var self = this;
            var xmlhttp;
            if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }else{// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            change = function(resresult){
                for(var i = 0; i < objs.length; i++){
                    if(i < resresult){
                        stateimg[i].src = "../img/ywc.PNG";
                        objs[i].setAttribute("class","tc pr line l");
                        pro[i].setAttribute("class","fs12 pro cb");
                    }else if(i > resresult){
                        stateimg[i].src = "../img/wwc.PNG";
                        objs[i].setAttribute("class","tc pr line lg");
                        pro[i].setAttribute("class","fs12 pro");
                    }else{
                        stateimg[i].src = "../img/txhq.PNG";
                        objs[i].setAttribute("class","tc pr line lg");
                        pro[i].setAttribute("class","fs12 pro");
                    }
                }
            }

            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                    var res = xmlhttp.responseText
                    var resObj = eval("("+res+")");

                    console.log(res);

                    // errCode = resObj["errCode"];
                    // if(errCode == 0){
                    //     var resnum = resObj["status"];
                    //     if(resnum == 10){
                    //         resresult = 0;
                    //         change(resresult);
                    //     }
                    //     if(resnum == 20){
                    //         resresult = 1;
                    //         change(resresult);
                    //     }
                    //     if(resnum == 30){
                    //         resresult = 2;
                    //         change(resresult);
                    //     }
                    //     if(resnum == 40){
                    //         resresult = 3;
                    //         change(resresult);
                    //     }
                    //     if(resnum == 50){
                    //         resresult = 4;
                    //         change(resresult);
                    //     }
                    //     if(resnum == 60){
                    //         resresult = 5;
                    //         change(resresult);
                    //     }
                    // }else if(errCode == -1){
                    //     alert("ajax 请求出问题")
                    // }else{
                    //     alert("不知毛错误")
                    // }

                }
            };
            xmlhttp.open("POST",url,true);
            xmlhttp.send();
        },



        //定时器
        init:function(a){
            url = a;//"../a.json";
            this.loadXMLDoc();
            // setInterval(this.loadXMLDoc,1000);
        }
    };
    win["Listen"] = Listen;
})(window);