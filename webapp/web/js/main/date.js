/**
 * Created by KB on 2016/4/4.
 */
;(function(win){
    var date = {

    };

    var week = {
        0:'星期日',
        1:'星期一',
        2:'星期二',
        3:'星期三',
        4:'星期四',
        5:'星期五',
        6:'星期六'
    };
    date = {
        day:function(obj,num){
            for ( var i = 0; i <= num; i++)
            {
                var date1 = new Date();
                //console.log(date1.getDay());
                var date2 = new Date(date1);
                date2.setDate(date1.getDate()+i);
                var opt = document.createElement ("option");
                opt.value =date2.getFullYear()+"-"+(date2.getMonth()+1)+"-"+date2.getDate();
                opt.innerText = date2.getFullYear()+"-"+(date2.getMonth()+1)+"-"+date2.getDate() +"（" + week[date2.getDay()] +"）";
                obj.appendChild (opt);
            }
        },
        timeline:function(Obj){
            var arr = new Array();
            for ( var i = 7; i < 24; i++){
                var opt = document.createElement ("option");
                opt.value = i+1+":00";
                opt.innerText = i+1+":00";
                Obj[0].appendChild(opt);
            }
            Obj[0].onchange = function(){
                var str = this.value;
                var time = str.substr(0,this.value.length-3);


                //var str1 = this.value;
                //var time1 = str.substr(0,Obj[1].value.length-3);
                //
                //if( eval(time) > eval(time1) ){
                Obj[1].innerText = "<option> 结束时间 </option>";
                for ( var i = time; i < 24; i++){
                    var opt = document.createElement ("option");
                    opt.value = eval(i)+1+":00";
                    opt.innerText = eval(i)+1+":00";
                    Obj[1].appendChild(opt);
                }
                Obj[1].value = "";
                //}
            }
        }
    };
    win["Athedate"] = date;
})(window);