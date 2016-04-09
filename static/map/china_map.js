// 路径配置
require.config({
    paths: {
        'echarts/chart/map': '/static/map/echarts-map'
    }
});
// 使用
require(
          [
                'echarts/chart/map' // 使用柱状图就加载bar模块，按需加载
            ],
     function (ec) {
         // 基于准备好的dom，初始化地图
         showTabContent(curEIndex);
         $(function () {
             $("#back").bind("click", function () {
                 curEIndex = 'china';
                 showTabContent(curEIndex);
                 $("#map-name").text("全国地图");
                 $(this).hide();
             })
         });


     });
var curEIndex = 'china';
var myChart1;
function showTabContent(name) {
    chart1dispose();
    myChart1 = require('echarts').init(document.getElementById('map'));
    myChart1.setOption(option1(name));
    myChart1.on(require('echarts/config').EVENT.CLICK, function (param) {
        var selected = param.name;
        if (selected != '台湾' && selected != '南海诸岛' && selected!=" ")
            if (curEIndex == 'china') {
                curEIndex = selected;
                myChart1.setOption(option1(selected), true);
                $("#map-name").text(selected);
                $("#back").show();

            } else {
				var cityname=param.data.name;
				if(param.data.StationCode==undefined){alert("暂无该地区数据");return false;}
				switch(param.data.StationCode){
					case '2':cityname="上海市"; break;
					case '9685':cityname="天津市"; break;
					case '3476':cityname="北京市"; break;
					case '40519':cityname="重庆市"; break;
				}
               searchArea(param.data.StationCode,cityname);
            }

    });

}
function searchArea(stationCode,cityname) {
    var getUrl = "/pub/getworkerlist/id/" + stationCode;
    $.ajax({
        url: getUrl,
        dataType: 'json',
        data: '',
        success: function (result) {
			//console.log(result);
            var data = result;
            if (data == null || data.length == 0) {
                alert('没有查询到任何数据');
            } else {
                $(".back").hide();
                createStationListNew(data, cityname);
            } 
        }
    });
}

//这是根据点击链接来修改相应的html里面值内容
function getStationList(e) {
    e.preventDefault();
    $('#cboxLoadingOverlay').show();
    var getUrl = "http://116.228.70.245:8088/BDM/OutWebService/StationPlace/FindPageByProv?ProvID=" + this.id;
    $.ajax({
        url: getUrl,
        dataType: 'jsonp',
        data: '',
        jsonp: 'callback',
        contenttype: "application/x-www-form-urlencoded;charset=utf-8",
        success: function (result) {
            if (result.Msg != null && result.Msg != '') {
                alert(result.Msg);
                return false;
            }
            var data = result.Data;
            if (data == null || data.length == 0) {
                alert('没有查询到任何数据');
                $('#cboxLoadingOverlay').hide();
            } else {
                createStationListNew(data);

                $('#cboxLoadingOverlay').hide();
            }
        }
    });
}

//创建网点分部的html页面
function createStationListNew(data, cityname) {

    var real_name = "";
    var county_name = "";
    var working_seniority = "";
    var team_number = "";
    var overlay_area = "";
    var id = 0;
    var stationName= "";
    var countyname= "";
    var liHtml = "";
    for (var i = 0; i < data.length; i++) {
        var id = data[i].id;
		if(data[i].county_name==null){
			countyname=cityname;
		}
		else countyname=data[i].county_name;
		
        var real_name = data[i].real_name;
        var county_name = cityname+" "+countyname;
        var working_seniority = data[i].working_seniority;
        var team_number = data[i].team_number;
        var overlay_area = data[i].overlay_area;
        var mobile = data[i].telephone;
        stationName = countyname +' '+real_name;
 
		if (i == 0) {
			liHtml += "<ul><li><a href='javascript:;' id='" + id + "' real_name='" + real_name + "'  county_name='" + county_name + "' working_seniority='" + working_seniority + "' team_number='" + team_number + "' overlay_area='" + overlay_area + "' mobile='" + mobile + "'>" + stationName + "</a></li>";
		}
		else if (i == data.length) {
			liHtml += "<li><a href='javascript:;' id='" + id + "' real_name='" + real_name + "'  county_name='" + county_name + "' working_seniority='" + working_seniority + "' team_number='" + team_number + "' overlay_area='" + overlay_area + "' mobile='" + mobile + "'>" + stationName + "</a></li></ul>";
		}
		else {
			liHtml += "<li><a href='javascript:;' id='" + id + "' real_name='" + real_name + "'  county_name='" + county_name + "' working_seniority='" + working_seniority + "' team_number='" + team_number + "' overlay_area='" + overlay_area + "' mobile='" + mobile + "'>" + stationName + "</a></li>";
		}



    }

    $("#welComplany").html(cityname + " 安装超人欢迎您！");
    $("#stationName").html(liHtml);
	$("#box_b").hide();
    $("#map_box, #map_box_bg, #box_a").show();
    $("#stationName ul li a").click(function(){
		$("#box_a").hide();
		$('#box_b').show();
		$("#trArea").html($(this).attr("county_name"));
		$("#trJinli").html($(this).attr("id")+" "+$(this).attr("real_name"));
		$("#trEmail").html($(this).attr("working_seniority"));
		$("#trKef").html($(this).attr("team_number"));
		$("#trZcPsArea").html($(this).attr("overlay_area"));
		$("#trmobile").html($(this).attr("mobile"));
		$("#trTeshu").html("已认证");
		$("#provinceName").bind("click", function () {
			$("#box_a").show();
			$("#box_b").hide();
		});
	});
	$(".mapclose").on("click",function(){
		$("#map_box, #map_box_bg").hide();
		});
	$("html, body").animate({ scrollTop:116 }, 400);
}
//得到网点的详细信息
function getStationInfoNew(e) {
    e.preventDefault();
    $("#box_a").hide();
    $('#box_b').show();
    e.preventDefault();
                $('#provinceName').html(data[0].PathName.split(',')[1]);
                $("#areaSpan").html("&nbsp;&gt&nbsp;" + data[0].StationOutName + "安装超人");
                $("#detailArea").html(data[0].StationName + "安装超人欢迎您！");
                $("#trArea").html(this.attr("county_name"));
                $("#trJinli").html(data[0].HandlerName);
                $("#trChuanz").html(data[0].Fax);
                $("#trEmail").html(data[0].Email);
                $("#trKef").html(data[0].Msn);
                $("#trNumber").html(data[0].QueryTel);
                $("#trZcPsArea").html(data[0].ServeArea);
                $("#trTeSePsArea").html(data[0].SpecialArea);
                $("#trSelfArea").html(data[0].SelfArea);
                $("#trBips").html(data[0].StopArea);
                $("#trTeshu").html(data[0].EspecialServe);
                $("#trRemark").html(data[0].Remark);
                $("#trEdittime").html(data[0].CreateTimeString);
			$("#provinceName").bind("click", function () {
                $("#box_a").show();
                $("#box_b").hide();
            });


}
function chart1dispose() {
    if (myChart1) {
        myChart1.dispose();
        myChart1 = false;
    }
}



function option1(city) {
    var option = {
        tooltip: {
            show: false
        },
        series: [
		{
		    type: 'map',
		    //roam: true,
		    mapType: city,
		    mapLocation: {
		        x: 'center'
		    },
		    selectedMode: 'single',
		    itemStyle: {
		        normal: {
		            label: { show: true, textStyle: { color: '#424b50'} },
		            borderColor: '#fff'
		        },
		        emphasis: {
		            label: { show: true, textStyle: { color: '#fff'} },
		            borderColor: '#fff',
		            color: '#009bff'
		        }
		    },
		       nameMap: { "china": "中国", "襄樊市": "襄阳市", "琼中黎族苗族自治县": "海南省直辖", "南汇": " ",
		        "临高县": " ", "澄迈县": " ", "儋州市": " ", "白沙黎族自治县": " ", "昌江黎族自治县": " ", "东方市": " ", "乐东黎族自治县": " ", "五指山市": " ", "保亭黎族苗族自治县": " "
		        , "陵水黎族自治县": " ", "万宁市": " ", "琼海市": " ", "屯昌县": " ", "定安县": " ", "文昌市": " "
		        , "天门市": "湖北省直辖", "神农架林区": " ", "潜江市": " ", "仙桃市": " "
		        , "五家渠市": " ", "石河子市": "新疆自治区直辖 ", "图木舒克市": " "
		        , "塘沽区": "滨海新区", "大港区": " ", "汉沽区": " "
		    },
		    textFixed: { "渝北": [10, 0], "沙坪坝": [0, -10], "巴南": [0, 15], "九龙坡": [0, 10], "南岸": [10, 0], "大渡口": [0, -5], "黄浦": [2, 7], "长宁": [0, 5], "杨浦": [0, -8], "闸北": [0, -8], "虹口": [0, 8], "静安": [0, -2], "朝阳区": [10, -15], "东城区": [6, 3], "西城区": [-6, 15], "河西区": [0, 10], "南开区": [-10, 7], "河北区": [10, -10], "红桥区": [-12, 0], "河东区": [12, 10], "东丽区": [12, -10], "和平区": [0, -3] },

		    data:[{"name":"上海市","StationCode":"2"},
			{"name":"黄浦","StationCode":"2"},
			{"name":"杨浦","StationCode":"2"},
			{"name":"闸北","StationCode":"2"},
			{"name":"虹口","StationCode":"2"},
			{"name":"宝山","StationCode":"2"},
			{"name":"静安","StationCode":"2"},
			{"name":"长宁","StationCode":"2"},
			{"name":"闵行","StationCode":"2"},
			{"name":"徐汇","StationCode":"2"},
			{"name":"浦东","StationCode":"2"},
			{"name":"奉贤","StationCode":"2"},
			{"name":"青浦","StationCode":"2"},
			{"name":"松江","StationCode":"2"},
			{"name":"金山","StationCode":"2"},
			{"name":"嘉定","StationCode":"2"},
			{"name":"崇明","StationCode":"2"},
			{"name":"普陀","StationCode":"2"},
			{"name":"海淀区","StationCode":"3476"},
			{"name":"顺义区","StationCode":"3476"},
			{"name":"朝阳区","StationCode":"3476"},
			{"name":"东城区","StationCode":"3476"},
			{"name":"西城区","StationCode":"3476"},
			{"name":"丰台区","StationCode":"3476"},
			{"name":"石景山区","StationCode":"3476"},
			{"name":"门头沟区","StationCode":"3476"},
			{"name":"房山区","StationCode":"3476"},
			{"name":"怀柔区","StationCode":"3476"},
			{"name":"平谷区","StationCode":"3476"},
			{"name":"大兴区","StationCode":"3476"},
			{"name":"通州区","StationCode":"3476"},
			{"name":"密云县","StationCode":"3476"},
			{"name":"延庆县","StationCode":"3476"},
			{"name":"蓟县","StationCode":"9685"},
			{"name":"宝坻区","StationCode":"9685"},
			{"name":"武清区","StationCode":"9685"},
			{"name":"宁河县","StationCode":"9685"},
			{"name":"北辰区","StationCode":"9685"},
			{"name":"河北区","StationCode":"9685"},
			{"name":"红桥区","StationCode":"9685"},
			{"name":"和平区","StationCode":"9685"},
			{"name":"东丽区","StationCode":"9685"},
			{"name":"河东区","StationCode":"9685"},
			{"name":"河西区","StationCode":"9685"},
			{"name":"南开区","StationCode":"9685"},
			{"name":"西青区","StationCode":"9685"},
			{"name":"津南区","StationCode":"9685"},
			{"name":"滨海新区","StationCode":"9685"},
			{"name":"静海县","StationCode":"9685"},
			{"name":"奉节县","StationCode":"40519"},{"name":"荣昌县","StationCode":"40519"},{"name":"永川","StationCode":"40519"},{"name":"忠县","StationCode":"40519"},{"name":"万州区","StationCode":"40519"},{"name":"黔江","StationCode":"40519"},{"name":"酉阳县","StationCode":"40519"},{"name":"沙坪坝","StationCode":"40519"},{"name":"长寿","StationCode":"40519"},{"name":"双桥","StationCode":"40519"},{"name":"城口县","StationCode":"40519"},{"name":"江津","StationCode":"40519"},{"name":"南川","StationCode":"40519"},{"name":"南岸","StationCode":"40519"},{"name":"铜梁县","StationCode":"40519"},{"name":"巴南","StationCode":"40519"},{"name":"武隆县","StationCode":"40519"},{"name":"云阳县","StationCode":"40519"},{"name":"大渡口","StationCode":"40519"},{"name":"江北","StationCode":"40519"},{"name":"潼南县","StationCode":"40519"},{"name":"渝中","StationCode":"40519"},{"name":"九龙坡","StationCode":"40519"},{"name":"丰都县","StationCode":"40519"},{"name":"涪陵","StationCode":"40519"},{"name":"开县","StationCode":"40519"},{"name":"巫山县","StationCode":"40519"},{"name":"垫江县","StationCode":"40519"},{"name":"梁平县","StationCode":"40519"},{"name":"渝北","StationCode":"40519"},{"name":"大足县","StationCode":"40519"},{"name":"綦江县","StationCode":"40519"},{"name":"秀山县","StationCode":"40519"},{"name":"璧山","StationCode":"40519"},{"name":"合川","StationCode":"40519"},{"name":"万盛","StationCode":"40519"},{"name":"巫溪县","StationCode":"40519"},{"name":"彭水县","StationCode":"40519"},{"name":"北碚","StationCode":"40519"},{"name":"石柱县","StationCode":"40519"},
			{"name":"临沧市","StationCode":"238"},{"name":"丽江市","StationCode":"330"},{"name":"保山市","StationCode":"399"},{"name":"大理白族自治州","StationCode":"481"},{"name":"德宏傣族景颇族自治州","StationCode":"613"},{"name":"怒江傈僳族自治州","StationCode":"672"},{"name":"文山壮族苗族自治州","StationCode":"706"},{"name":"昆明市","StationCode":"823"},{"name":"昭通市","StationCode":"973"},{"name":"普洱市","StationCode":"1127"},{"name":"曲靖市","StationCode":"1246"},{"name":"楚雄彝族自治州","StationCode":"1383"},{"name":"玉溪市","StationCode":"1497"},{"name":"红河哈尼族彝族自治州","StationCode":"1587"},{"name":"西双版纳傣族自治州","StationCode":"1737"},{"name":"迪庆藏族自治州","StationCode":"1782"},{"name":"东胜市","StationCode":"1816"},{"name":"乌兰察布市","StationCode":"1922"},{"name":"乌兰浩特市","StationCode":"2107"},{"name":"乌海市","StationCode":"2199"},{"name":"兴安盟市","StationCode":"2223"},{"name":"鄂尔多斯市","StationCode":"45345"},{"name":"包头市","StationCode":"2315"},{"name":"呼伦贝尔市","StationCode":"2466"},{"name":"呼和浩特市","StationCode":"2626"},{"name":"巴彦淖尔市","StationCode":"2757"},{"name":"赤峰市","StationCode":"2891"},{"name":"通辽市","StationCode":"3144"},{"name":"锡林郭勒盟","StationCode":"3375"},{"name":"阿拉善盟","StationCode":"3449"},{"name":"北京市","StationCode":"3476"},{"name":"台湾市","StationCode":"3812"},{"name":"吉林市","StationCode":"3816"},{"name":"四平市","StationCode":"3982"},{"name":"延边朝鲜族自治州","StationCode":"4082"},{"name":"松原市","StationCode":"4182"},{"name":"白城市","StationCode":"4267"},{"name":"白山市","StationCode":"4380"},{"name":"辽源市","StationCode":"4452"},{"name":"通化市","StationCode":"4499"},{"name":"长春市","StationCode":"4601"},{"name":"乐山市","StationCode":"4772"},{"name":"内江市","StationCode":"5013"},{"name":"凉山彝族自治州","StationCode":"5139"},{"name":"南充市","StationCode":"5778"},{"name":"宜宾市","StationCode":"6214"},{"name":"巴中市","StationCode":"6411"},{"name":"广元市","StationCode":"6592"},{"name":"广安市","StationCode":"6883"},{"name":"德阳市","StationCode":"7070"},{"name":"成都市","StationCode":"7204"},{"name":"攀枝花市","StationCode":"7540"},{"name":"泸州市","StationCode":"7621"},{"name":"甘孜藏族自治州","StationCode":"7769"},{"name":"眉山市","StationCode":"8094"},{"name":"绵阳市","StationCode":"8232"},{"name":"自贡市","StationCode":"8537"},{"name":"资阳市","StationCode":"8651"},{"name":"达州市","StationCode":"8831"},{"name":"遂宁市","StationCode":"9152"},{"name":"阿坝藏族羌族自治州","StationCode":"9283"},{"name":"雅安市","StationCode":"9522"},{"name":"天津市","StationCode":"9685"},{"name":"舟山市","StationCode":"29304"},{"name":"衢州市","StationCode":"29353"},{"name":"金华市","StationCode":"29466"},{"name":"万宁市","StationCode":"29628"},{"name":"三亚市","StationCode":"29642"},{"name":"东方市","StationCode":"29651"},{"name":"临高市","StationCode":"29663"},{"name":"乐东黎族自治","StationCode":"29676"},{"name":"五指山市","StationCode":"29689"},{"name":"保亭黎族苗族自治","StationCode":"29698"},{"name":"儋州市","StationCode":"29709"},{"name":"定安市","StationCode":"29728"},{"name":"屯昌市","StationCode":"29740"},{"name":"文昌市","StationCode":"29750"},{"name":"昌江黎族自治","StationCode":"29768"},{"name":"海口市","StationCode":"29777"},{"name":"海南省直辖","StationCode":"29777"},{"name":"澄迈市","StationCode":"29823"},{"name":"琼中黎族苗族自治","StationCode":"29835"},{"name":"营口市","StationCode":"39789"},{"name":"葫芦岛市","StationCode":"39868"},{"name":"辽阳市","StationCode":"40003"},{"name":"铁岭市","StationCode":"40071"},{"name":"锦州市","StationCode":"40181"},{"name":"阜新市","StationCode":"40304"},{"name":"鞍山市","StationCode":"40406"},{"name":"重庆市","StationCode":"40519"},{"name":"咸阳市","StationCode":"41594"},{"name":"商洛市","StationCode":"41801"},{"name":"安康市","StationCode":"41972"},{"name":"宝鸡市","StationCode":"42183"},{"name":"延安市","StationCode":"42346"},{"name":"榆林市","StationCode":"42528"},{"name":"汉中市","StationCode":"42767"},{"name":"渭南市","StationCode":"43013"},{"name":"西安市","StationCode":"43221"},{"name":"铜川市","StationCode":"43411"},{"name":"属格尔木","StationCode":"43460"},{"name":"果洛藏族自治州","StationCode":"43463"},{"name":"海东地区","StationCode":"43514"},{"name":"海北玉树藏族自治州","StationCode":"43617"},{"name":"海南藏族自治州","StationCode":"43652"},{"name":"海西蒙古族藏族自治州","StationCode":"43694"},{"name":"玉树藏族自治州","StationCode":"43746"},{"name":"西宁市","StationCode":"43798"},{"name":"黄南藏族自治州","StationCode":"43878"},{"name":"香港市","StationCode":"43916"},{"name":"七台河市","StationCode":"43920"},{"name":"伊春市","StationCode":"43967"},{"name":"佳木斯市","StationCode":"44171"},{"name":"双鸭山市","StationCode":"44286"},{"name":"哈尔滨市","StationCode":"44373"},{"name":"大兴安岭地区","StationCode":"44668"},{"name":"大庆市","StationCode":"44720"},{"name":"牡丹江市","StationCode":"44821"},{"name":"绥化市","StationCode":"44918"},{"name":"鸡西市","StationCode":"45112"},{"name":"鹤岗市","StationCode":"45198"},{"name":"黑河市","StationCode":"45258"},{"name":"齐齐哈尔市","StationCode":"45344"},{"name":"南通市","StationCode":"19977"},{"name":"宿迁市","StationCode":"20121"},{"name":"常州市","StationCode":"20241"},{"name":"徐州市","StationCode":"20307"},{"name":"扬州市","StationCode":"20480"},{"name":"无锡市","StationCode":"20576"},{"name":"泰州市","StationCode":"20667"},{"name":"淮安市","StationCode":"20779"},{"name":"盐城市","StationCode":"20936"},{"name":"苏州市","StationCode":"21107"},{"name":"连云港市","StationCode":"21218"},{"name":"镇江市","StationCode":"21336"},{"name":"上饶市","StationCode":"21396"},{"name":"九江市","StationCode":"21634"},{"name":"宜春市","StationCode":"21848"},{"name":"南昌市","StationCode":"22042"},{"name":"吉安市","StationCode":"22162"},{"name":"抚州市","StationCode":"22397"},{"name":"新余市","StationCode":"22567"},{"name":"景德镇市","StationCode":"22605"},{"name":"萍乡市","StationCode":"22664"},{"name":"赣州市","StationCode":"22723"},{"name":"鹰潭市","StationCode":"23032"},{"name":"保定市","StationCode":"23079"},{"name":"唐山市","StationCode":"23445"},{"name":"廊坊市","StationCode":"23685"},{"name":"张家口市","StationCode":"23792"},{"name":"承德市","StationCode":"24041"},{"name":"沧州市","StationCode":"24265"},{"name":"石家庄市","StationCode":"24472"},{"name":"中卫市","StationCode":"9948"},{"name":"吴忠市","StationCode":"9993"},{"name":"固原市","StationCode":"10039"},{"name":"石嘴山市","StationCode":"10111"},{"name":"银川市","StationCode":"10152"},{"name":"六安市","StationCode":"10216"},{"name":"合肥市","StationCode":"10393"},{"name":"安庆市","StationCode":"10495"},{"name":"宣城市","StationCode":"10691"},{"name":"宿州市","StationCode":"10798"},{"name":"巢湖市","StationCode":"10911"},{"name":"亳州市","StationCode":"10993"},{"name":"池州市","StationCode":"11099"},{"name":"淮北市","StationCode":"11157"},{"name":"淮南市","StationCode":"11194"},{"name":"滁州市","StationCode":"11267"},{"name":"芜湖市","StationCode":"11459"},{"name":"蚌埠市","StationCode":"11517"},{"name":"铜陵市","StationCode":"11600"},{"name":"阜阳市","StationCode":"11630"},{"name":"马鞍山市","StationCode":"11815"},{"name":"黄山市","StationCode":"11851"},{"name":"东营市","StationCode":"11967"},{"name":"临沂市","StationCode":"12019"},{"name":"威海市","StationCode":"12212"},{"name":"德州市","StationCode":"12288"},{"name":"日照市","StationCode":"12425"},{"name":"枣庄市","StationCode":"12484"},{"name":"泰安市","StationCode":"12554"},{"name":"济南市","StationCode":"12647"},{"name":"济宁市","StationCode":"12793"},{"name":"淄博市","StationCode":"12961"},{"name":"滨州市","StationCode":"13077"},{"name":"潍坊市","StationCode":"13170"},{"name":"烟台市","StationCode":"13371"},{"name":"聊城市","StationCode":"13532"},{"name":"莱芜市","StationCode":"13678"},{"name":"菏泽市","StationCode":"13700"},{"name":"青岛市","StationCode":"13871"},{"name":"临汾市","StationCode":"14060"},{"name":"吕梁市","StationCode":"14249"},{"name":"大同市","StationCode":"14427"},{"name":"太原市","StationCode":"14576"},{"name":"忻州市","StationCode":"14691"},{"name":"晋中市","StationCode":"14897"},{"name":"晋城市","StationCode":"15041"},{"name":"朔州市","StationCode":"15133"},{"name":"运城市","StationCode":"15214"},{"name":"长治市","StationCode":"15381"},{"name":"阳泉市","StationCode":"15541"},{"name":"东莞市","StationCode":"15592"},{"name":"中山市","StationCode":"15626"},{"name":"云浮市","StationCode":"15652"},{"name":"佛山市","StationCode":"15723"},{"name":"广州市","StationCode":"15759"},{"name":"惠州市","StationCode":"15924"},{"name":"揭阳市","StationCode":"15997"},{"name":"梅州市","StationCode":"16086"},{"name":"汕头市","StationCode":"16205"},{"name":"汕尾市","StationCode":"16282"},{"name":"江门市","StationCode":"16339"},{"name":"河源市","StationCode":"16428"},{"name":"深圳市","StationCode":"16537"},{"name":"清远市","StationCode":"16599"},{"name":"湛江市","StationCode":"16693"},{"name":"潮州市","StationCode":"16824"},{"name":"珠海市","StationCode":"16878"},{"name":"肇庆市","StationCode":"16905"},{"name":"茂名市","StationCode":"17022"},{"name":"阳江市","StationCode":"17136"},{"name":"韶关市","StationCode":"17191"},{"name":"北海市","StationCode":"17314"},{"name":"南宁市","StationCode":"17351"},{"name":"崇左市","StationCode":"17487"},{"name":"来宾市","StationCode":"17573"},{"name":"柳州市","StationCode":"17652"},{"name":"桂林市","StationCode":"17780"},{"name":"梧州市","StationCode":"17943"},{"name":"河池市","StationCode":"18022"},{"name":"玉林市","StationCode":"18194"},{"name":"百色市","StationCode":"18311"},{"name":"贵港市","StationCode":"18495"},{"name":"贺州市","StationCode":"18587"},{"name":"钦州市","StationCode":"18654"},{"name":"防城港市","StationCode":"18724"},{"name":"乌鲁木齐市","StationCode":"18758"},{"name":"新疆自治区直辖","StationCode":"18758"},{"name":"伊犁哈萨克自治州","StationCode":"18841"},{"name":"克孜勒苏柯尔克孜自治州","StationCode":"18963"},{"name":"克拉玛依市","StationCode":"19007"},{"name":"博尔塔拉蒙古自治州","StationCode":"19026"},{"name":"吐鲁番地区","StationCode":"19049"},{"name":"和田地区","StationCode":"19081"},{"name":"哈密地区","StationCode":"19177"},{"name":"喀什地区","StationCode":"19224"},{"name":"塔城地区","StationCode":"19408"},{"name":"巴音郭楞蒙古自治州","StationCode":"19491"},{"name":"昌吉回族自治州","StationCode":"19578"},{"name":"阿克苏地区","StationCode":"19676"},{"name":"阿勒泰地区","StationCode":"19775"},{"name":"南京市","StationCode":"19841"},{"name":"秦皇岛市","StationCode":"24769"},{"name":"衡水市","StationCode":"24870"},{"name":"邢台市","StationCode":"25000"},{"name":"邯郸市","StationCode":"25214"},{"name":"三门峡市","StationCode":"25476"},{"name":"信阳市","StationCode":"25558"},{"name":"南阳市","StationCode":"25770"},{"name":"周口市","StationCode":"26016"},{"name":"商丘市","StationCode":"26223"},{"name":"安阳市","StationCode":"26422"},{"name":"平顶山市","StationCode":"26564"},{"name":"开封市","StationCode":"26705"},{"name":"新乡市","StationCode":"26830"},{"name":"洛阳市","StationCode":"26992"},{"name":"济源市","StationCode":"27190"},{"name":"漯河市","StationCode":"27208"},{"name":"濮阳市","StationCode":"27269"},{"name":"焦作市","StationCode":"27360"},{"name":"许昌市","StationCode":"27475"},{"name":"郑州市","StationCode":"27580"},{"name":"驻马店市","StationCode":"27763"},{"name":"鹤壁市","StationCode":"27965"},{"name":"丽水市","StationCode":"28010"},{"name":"台州市","StationCode":"28210"},{"name":"嘉兴市","StationCode":"28351"},{"name":"宁波市","StationCode":"28433"},{"name":"杭州市","StationCode":"28590"},{"name":"温州市","StationCode":"28803"},{"name":"湖州市","StationCode":"29107"},{"name":"绍兴市","StationCode":"29180"},{"name":"琼海市","StationCode":"29847"},{"name":"白沙黎族自治","StationCode":"29861"},{"name":"陵水黎族自治","StationCode":"29874"},{"name":"仙桃市","StationCode":"29888"},{"name":"十堰市","StationCode":"29908"},{"name":"咸宁市","StationCode":"30033"},{"name":"天门市","StationCode":"30110"},{"name":"孝感市","StationCode":"30137"},{"name":"宜昌市","StationCode":"30252"},{"name":"恩施土家族苗族自治州","StationCode":"30373"},{"name":"武汉市","StationCode":"30469"},{"name":"潜江市","StationCode":"30639"},{"name":"神农架市","StationCode":"30656"},{"name":"荆州市","StationCode":"30666"},{"name":"荆门市","StationCode":"30791"},{"name":"襄樊市","StationCode":"30854"},{"name":"鄂州市","StationCode":"30964"},{"name":"随州市","StationCode":"30991"},{"name":"黄冈市","StationCode":"31037"},{"name":"黄石市","StationCode":"31178"},{"name":"娄底市","StationCode":"31234"},{"name":"岳阳市","StationCode":"31332"},{"name":"常德市","StationCode":"31526"},{"name":"张家界市","StationCode":"31753"},{"name":"怀化市","StationCode":"31859"},{"name":"株洲市","StationCode":"32168"},{"name":"永州市","StationCode":"32311"},{"name":"湘潭市","StationCode":"32521"},{"name":"湘西土家族苗族自治州","StationCode":"32608"},{"name":"益阳市","StationCode":"32782"},{"name":"衡阳市","StationCode":"32883"},{"name":"邵阳市","StationCode":"33108"},{"name":"郴州市","StationCode":"33335"},{"name":"长沙市","StationCode":"33604"},{"name":"澳门市","StationCode":"33781"},{"name":"临夏回族自治州","StationCode":"33785"},{"name":"兰州市","StationCode":"33933"},{"name":"嘉峪关市","StationCode":"34052"},{"name":"天水市","StationCode":"34063"},{"name":"定西市","StationCode":"34194"},{"name":"平凉市","StationCode":"34323"},{"name":"庆阳市","StationCode":"34442"},{"name":"张掖市","StationCode":"34585"},{"name":"武威市","StationCode":"34660"},{"name":"甘南藏族自治州","StationCode":"34766"},{"name":"白银市","StationCode":"34885"},{"name":"酒泉市","StationCode":"34969"},{"name":"金昌市","StationCode":"35061"},{"name":"陇南市","StationCode":"35082"},{"name":"三明市","StationCode":"35289"},{"name":"南平市","StationCode":"35439"},{"name":"厦门市","StationCode":"35587"},{"name":"宁德市","StationCode":"35651"},{"name":"泉州市","StationCode":"35781"},{"name":"漳州市","StationCode":"35957"},{"name":"福州市","StationCode":"36104"},{"name":"莆田市","StationCode":"36297"},{"name":"龙岩市","StationCode":"36354"},{"name":"山南地区","StationCode":"36493"},{"name":"拉萨市","StationCode":"36588"},{"name":"日喀则地区","StationCode":"36661"},{"name":"昌都地区","StationCode":"36882"},{"name":"林芝地区","StationCode":"37032"},{"name":"那曲地区","StationCode":"37095"},{"name":" 阿里地区","StationCode":"37213"},{"name":"六盘水市","StationCode":"37258"},{"name":"安顺市","StationCode":"37361"},{"name":"毕节地区","StationCode":"37454"},{"name":"贵阳市","StationCode":"37713"},{"name":"遵义市","StationCode":"37843"},{"name":"铜仁地区","StationCode":"38098"},{"name":"黔东南苗族侗族自治州","StationCode":"38277"},{"name":"黔南布依族苗族自治州","StationCode":"38505"},{"name":"黔西南布依族苗族自治州","StationCode":"38758"},{"name":"丹东市","StationCode":"38898"},{"name":"大连市","StationCode":"38991"},{"name":"抚顺市","StationCode":"39162"},{"name":"朝阳市","StationCode":"39251"},{"name":"本溪市","StationCode":"39410"},{"name":"沈阳市","StationCode":"39474"},{"name":"盘锦市","StationCode":"39728"}]

		}
		]

    };

    return option;

}