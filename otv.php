<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit" />
<meta name="force-rendering" content="webkit" />
<meta content="width=device-width,initial-scale=0,maximum-scale=0,user-scalable=no" name="viewport">
<style type="text/css">
body,html{margin: 0;background-color:#000;}
</style>

</head>
<body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="kuayu.js"></script>
<script>
    //var k='R5E430164U3096F010K7780515CI979E4371PBM3233C4BV1044EZ33519WE6219665241&playtoken=ABCDEFGHI';

    url='http://www.nettvplus.live/embed/otvcloud.php';
    $.get(url,
        function (data) {
          var reg=/video:'(.*?)'/
          var k=data.match(reg)[1].split('m3u8?k=')[1]; 

vid = window.location.href.split('id=')[1];
if(vid=='cctv1'){uid='1'};// CCTV1
if(vid=='cctv1hd'){uid='101'};// CCTV1hd
if(vid=='cctv2'){uid='2'};// CCTV2
if(vid=='cctv3'){uid='3'};// CCTV3
if(vid=='cctv4'){uid='4'};// CCTV4
if(vid=='cctv5'){uid='5'};// CCTV5
if(vid=='cctv5p'){uid='13'};// CCTV5+
if(vid=='cctv6'){uid='6'};// CCTV6
if(vid=='cctv7'){uid='7'};// CCTV7
if(vid=='cctv8'){uid='8'};// CCTV8
if(vid=='cctv9'){uid='9'};// CCTV9
if(vid=='cctv10'){uid='10'};// CCTV10
if(vid=='cctv11'){uid='41'};// CCTV11
if(vid=='cctv12'){uid='11'};// CCTV12
if(vid=='cctv13'){uid='39'};// CCTV13
if(vid=='cctv14'){uid='12'};// CCTV14
if(vid=='cctv15'){uid='40'};// CCTV15
if(vid=='cctv17'){uid='90'};// CCTV17

if(vid=='dszn'){uid='10003'};//CCTV电视指南
if(vid=='fyzq'){uid='22019'}//CCTV风云足球
if(vid=='lgs'){uid='22020';}//CCTV老故事
if(vid=='dyjc'){uid='43056'};//CCTV第1剧场
if(vid=='sjdl'){uid='43057'};//CCTV世界地理
if(vid=='shpd'){uid='43059'};//书画频道
if(vid=='bqkj'){uid='43060'};//CCTV兵器科技
if(vid=='fyyy'){uid='51012';}//CCTV风云音乐
if(vid=='nxss'){uid='51014';}//CCTV女性时尚
if(vid=='zxs'){uid='51019';}//CCTV中学生
if(vid=='zxs2'){uid='51032';}//CCTV中学生2

if(vid=='cctv4k'){uid='51021';}//CCTV4K超高清
if(vid=='4kcqdy'){uid='51024';}//CCTV4K超高清电影
if(vid=='zsgw'){uid='11010';}//CCTV中视购物
if(vid=='yggw'){uid='11011';}//央广购物
if(vid=='bxjk'){uid='51031';}//百姓健康

if(vid=='cgtn'){uid='15';}//CGTN
if(vid=='cgtnjl'){uid='14';}//CGTN纪录
if(vid=='cgtnf'){uid='68';}//CGTN法语

if(vid=='cetv1'){uid='33';}//CETV1中教1台
if(vid=='cetv12'){uid='10001';}//CETV4中教1台
if(vid=='cetv4'){uid='38';}//CETV4中教4台
if(vid=='cetv42'){uid='10000';}//CETV4中教4台
if(vid=='cetvzj'){uid='51017';}//CETV早期教育

if(vid=='chcgqdy'){uid='43063';}//CHC高清电影
if(vid=='chcjtyy'){uid='51010';}//CHC家庭影院
if(vid=='chcdzdy'){uid='51011';}//CHC动作电影

if(vid=='shpd'){uid='11009'};// 书画频道
if(vid=='zsgw'){uid='11010'};// 中视购物
if(vid=='yggw'){uid='11011'};// 央广购物

if(vid=='gxpd'){uid='43058';}//国学频道
if(vid=='zgtq'){uid='11006';}//中国天气


if(vid=='bjws'){uid='24'};// 北京卫视
if(vid=='dfws'){uid='26'};// 东方卫视
if(vid=='tjws'){uid='28'};// 天津卫视
if(vid=='cqws'){uid='56'};// 重庆卫视
if(vid=='hljws'){uid='27'};// 黑龙江卫视
if(vid=='jlws'){uid='20'};// 吉林卫视
if(vid=='ybws'){uid='22001';}//延边卫视

if(vid=='lnws'){uid='32'};// 辽宁卫视
if(vid=='nmws'){uid='93'};// 内蒙古卫视
if(vid=='nxws'){uid='69'};// 宁夏卫视
if(vid=='gsws'){uid='57'};// 甘肃卫视
if(vid=='qhws'){uid='60'};// 青海卫视
if(vid=='sxws'){uid='55'};// 陕西卫视
if(vid=='nlws'){uid='61001';}//农林卫视
if(vid=='hbws'){uid='79'};// 河北卫视
if(vid=='sxiws'){uid='54'};// 山西卫视
if(vid=='sdws'){uid='29'};// 山东卫视
if(vid=='ahws'){uid='23'};// 安徽卫视
if(vid=='hnws'){uid='78'};// 河南卫视
if(vid=='hubws'){uid='21'};// 湖北卫视
if(vid=='hunws'){uid='25'};// 湖南卫视
if(vid=='jxws'){uid='22'};// 江西卫视
if(vid=='jsws'){uid='18'};// 江苏卫视
if(vid=='zjws'){uid='19'};// 浙江卫视
if(vid=='dnws'){uid='80'};// 东南卫视
if(vid=='gdws'){uid='16'};// 广东卫视
if(vid=='szws'){uid='17'};// 深圳卫视
if(vid=='gxws'){uid='59'};// 广西卫视
if(vid=='ynws'){uid='61'};// 云南卫视
if(vid=='gzws'){uid='30'};// 贵州卫视
if(vid=='scws'){uid='31'};// 四川卫视
if(vid=='xjws'){uid='64'};// 新疆卫视
if(vid=='btws'){uid='67';}//兵团卫视
if(vid=='xzws'){uid='66'};// 西藏卫视
if(vid=='hinws'){uid='62'};// 海南卫视

if(vid=='bjdajs'){uid='11001'};// 北京冬奥纪实
if(vid=='bjdajs2'){uid='22030';}//北京冬奥纪实2
if(vid=='zgjthb'){uid='11002'};// 中国交通河北
if(vid=='bjkk'){uid='11003'};// 北京卡酷少儿
if(vid=='cmpd'){uid='11004'};// 车迷频道
if(vid=='hqly'){uid='11005'};// 环球旅游
if(vid=='hqqg'){uid='51018'};// 环球奇观
if(vid=='zgtq'){uid='11006'};// 中国天气
if(vid=='yybb'){uid='11007'};// 优优宝贝
if(vid=='shdy'){uid='43036';}//四海钓鱼
if(vid=='jshqjx'){uid='11008'};// 聚鲨环球精选
if(vid=='doxtv'){uid='22023';}//DOXtv

if(vid=='dfcj'){uid='43050';}//东方财经
if(vid=='wxty'){uid='11223';}//五星体育
if(vid=='jbty'){uid='43038';}//劲爆体育
if(vid=='jbty2'){uid='43084';}//劲爆体育2
if(vid=='jbty3'){uid='50050';}//劲爆体育3
if(vid=='hxjc'){uid='43039';}//欢笑剧场
if(vid=='qjs'){uid='43040';}//全纪实
if(vid=='yxfy'){uid='43041';}//游戏风云
if(vid=='jsqc'){uid='43042';}//极速汽车
if(vid=='shss'){uid='43043';}//生活时尚
if(vid=='xfc'){uid='43044';}//幸福彩
if(vid=='xfc2'){uid='51033';}//幸福彩
if(vid=='xfc3'){uid='51034';}//幸福彩
if(vid=='dmxc'){uid='43045';}//动漫秀场
if(vid=='fztd'){uid='43046';}//法治天地
if(vid=='qcxj'){uid='31001';}//七彩戏剧
if(vid=='dsjc'){uid='43085';}//都市剧场
if(vid=='xsj'){uid='51009';}//新视觉
if(vid=='xsj2'){uid='43082';}//新视觉
if(vid=='mlzq'){uid='43083';}//魅力足球

if(vid=='cqqm'){uid='51038';}//重庆汽摩
if(vid=='cqssgw'){uid='44';}//重庆时尚购物

if(vid=='jlsh'){uid='22003';}//吉林生活
if(vid=='jlys'){uid='22004';}//吉林影视
if(vid=='jlgg'){uid='22005';}//吉林公共新闻
if(vid=='jlds'){uid='22017';}//吉林都市
if(vid=='jlxc'){uid='22018';}//吉林乡村
if(vid=='dbxq'){uid='22032';}//吉林东北戏曲
if(vid=='jl7pd'){uid='22013';}//吉林7频道
if(vid=='jygw'){uid='22002';}//家有购物

if(vid=='jljy'){uid='22006';}//吉林教育
if(vid=='yxjj'){uid='51013';}//游戏竞技
if(vid=='jtlc'){uid='21001';}//家族理财

if(vid=='cczh'){uid='22011';}//长春综合
if(vid=='ccyl'){uid='22008';}//长春娱乐
if(vid=='ccsm'){uid='22009';}//长春市民
if(vid=='ccjj'){uid='22010';}//长春经济
if(vid=='ccqc'){uid='22012';}//长春汽车
if(vid=='cypd'){uid='22007';}//长影频道

if(vid=='zqpd'){uid='15001'};// 足球频道

if(vid=='jzpd'){uid='62001'};// 家政

if(vid=='hbjj'){uid='13003'};// 河北经济生活
if(vid=='hbnm'){uid='13004'};// 河北农民
if(vid=='hbds'){uid='13005'};// 河北都市
if(vid=='hbysj'){uid='13006'};// 河北影视剧
if(vid=='hbsekj'){uid='13007'};// 河北少儿科教
if(vid=='hbgg'){uid='13008'};// 河北公共
if(vid=='hbsjgw'){uid='12001'};// 河北三佳购物
if(vid=='hbzj'){uid='13002'};// 河北杂技
if(vid=='hbsszn'){uid='13010';}//河北收视指南
if(vid=='zgjthb'){uid='11002';}//中国交通-河北

if(vid=='sjzyl'){uid='13011'};// 石家庄娱乐
if(vid=='sjzsh'){uid='13012'};// 石家庄生活
if(vid=='sjzds'){uid='13013'};// 石家庄都市
if(vid=='sjzxwzh'){uid='13014'};// 石家庄新闻综合

if(vid=='hdxwzh'){uid='13009'};// 邯郸新闻综合

if(vid=='sxjjzx'){uid='84';}//山西经济资讯
if(vid=='sxys'){uid='85';}//山西影视
if(vid=='sxkj'){uid='86';}//山西科教
if(vid=='sxgg'){uid='87';}//山西公共
if(vid=='sxhh'){uid='88';}//山西黄河频道
if(vid=='sxse'){uid='89';}//山西少儿
if(vid=='sxygw'){uid='43';}//山西优购物
 
if(vid=='cmzx'){uid='51036';}//彩民在线

if(vid=='yqxwzh'){uid='71';}//阳泉新闻综合
if(vid=='yqkj'){uid='72';}//阳泉科教
 
if(vid=='sdjy'){uid='37001';}//山东教育
if(vid=='zhms'){uid='43061';}//中华美食

if(vid=='hends'){uid='41101';}//河南都市
if(vid=='henms'){uid='41102';}//河南民生
if(vid=='henfz'){uid='41103';}//河南法治
if(vid=='hendsj'){uid='41104';}//河南电视剧
if(vid=='hnxw'){uid='41105';}//河南新闻
if(vid=='hengg'){uid='41106';}//河南公共
if(vid=='henxnc'){uid='41107';}//河南新农村
if(vid=='jczy'){uid='41108';}//睛彩中原
if(vid=='ydxq'){uid='41109';}//移动戏曲
if(vid=='henly'){uid='13001'};// 河南梨园
if(vid=='wssj'){uid='41110';}//武术世界
if(vid=='wwbk'){uid='41111';}//文物宝库

if(vid=='zzxwzh'){uid='41112';}//郑州新闻综合
if(vid=='zkxwzh'){uid='41113';}//周口新闻综合
if(vid=='kfxwzh'){uid='41114';}//开封新闻综合
if(vid=='lyxwzh'){uid='41115';}//洛阳新闻综合
if(vid=='pdsxwzh'){uid='41116';}//平顶山新闻综合
if(vid=='ayxwzh'){uid='41117';}//安阳新闻综合
if(vid=='hbxwzh'){uid='41118';}//鹤壁新闻综合
if(vid=='xinxxwzh'){uid='41119';}//新乡新闻综合
if(vid=='jzzh'){uid='41120';}//焦作综合
if(vid=='pyzh'){uid='41121';}//濮阳综合
if(vid=='xuczh'){uid='41122';}//许昌综合
if(vid=='lhxwzh'){uid='41123';}//漯河新闻综合
if(vid=='smxxwzh'){uid='41124';}//三门峡新闻综合
if(vid=='sqxwzh'){uid='41125';}//商丘新闻综合
if(vid=='zmdxwzh'){uid='41126';}//驻马店新闻综合
if(vid=='nyxwzh'){uid='41127';}//南阳新闻综合
if(vid=='xyxwzh'){uid='41128';}//信阳新闻综合
if(vid=='jyzh'){uid='41129';}//济源综合
 
if(vid=='xxzn'){uid='51035';}//湖北休闲指南

if(vid=='hungj'){uid='43022'};// 湖南国际
if(vid=='hundaos'){uid='43023'};// 湖南导视
if(vid=='hunjs'){uid='43024'};// 湖南经视
if(vid=='hunyl'){uid='43027'};// 湖南娱乐
if(vid=='hunds'){uid='43028'};// 湖南都市
if(vid=='hundy'){uid='43029'};// 湖南电影
if(vid=='hundsj'){uid='43030'};// 湖南电视剧
if(vid=='hungg'){uid='43031'};// 湖南公共
if(vid=='hunklg'){uid='43032'};// 湖南快乐购

if(vid=='cpd'){uid='43048'};// 茶频道
if(vid=='klcd'){uid='43047'};// 快乐垂钓
if(vid=='jyjs'){uid='43025'};// 金鹰纪实
if(vid=='jyjs2'){uid='43087';}//金鹰纪实2
if(vid=='jykt'){uid='81'};// 金鹰卡通
if(vid=='xfpy'){uid='43062';}//先锋乒羽

if(vid=='hnetv'){uid='43021'};// 湖南教育

if(vid=='csxw'){uid='43064';}//长沙新闻
if(vid=='zzxwzh'){uid='43065';}//株洲新闻综合
if(vid=='hyxwzh'){uid='43066';}//衡阳新闻综合
if(vid=='czxwzh'){uid='43067';}//郴州新闻综合
if(vid=='yzxwzh'){uid='43068';}//永州新闻综合
if(vid=='ldzh'){uid='43069';}//娄底综合
if(vid=='syxwzh'){uid='43070';}//邵阳新闻综合
if(vid=='cdxwzh'){uid='43071';}//常德新闻综合
if(vid=='zjjxwzh'){uid='43072';}//张家界新闻综合
if(vid=='xxxwzh'){uid='43073';}//湘西新闻综合
if(vid=='hhxwzh'){uid='43074';}//怀化新闻综合
if(vid=='yyxwzh'){uid='43075';}//岳阳新闻综合
if(vid=='xtxwzh'){uid='43077';}//湘潭新闻综合

if(vid=='yiyxwzh'){uid='43076';}//益阳新闻综合
if(vid=='yiyxwzh2'){uid='43088';}//益阳新闻综合2
if(vid=='yiyjy'){uid='43089';}//益阳教育
if(vid=='yiygg'){uid='43090';}//益阳公共

if(vid=='jctc'){uid='43049'};// 江西陶瓷

if(vid=='hxgw'){uid='32010';}//好享购物
if(vid=='jslz'){uid='51015';}//江苏靓妆
if(vid=='cftx'){uid='43037';}//江苏财富天下
if(vid=='ymkt'){uid='53';}//优漫卡通

if(vid=='xz1'){uid='32001';}//徐州1
if(vid=='xz2'){uid='32002';}//徐州2
if(vid=='xz3'){uid='32003';}//徐州3
if(vid=='xz4'){uid='32004';}//徐州4

if(vid=='gdzj'){uid='65'};// 广东珠江
if(vid=='gdgg'){uid='45'};// 广东公共
if(vid=='gdty'){uid='34'};// 广东体育
if(vid=='gdse'){uid='63'};// 广东少儿
if(vid=='gdgef'){uid='43035'};// 广东高尔夫

if(vid=='szds'){uid='46'};// 深圳都市
if(vid=='szdsj'){uid='47'};// 深圳电视剧
if(vid=='szcj'){uid='48'};// 深圳财经生活
if(vid=='szyl'){uid='49'};// 深圳娱乐
if(vid=='sztyjk'){uid='50'};// 深圳体育健康
if(vid=='szse'){uid='51'};// 深圳少儿
if(vid=='szgg'){uid='52'};// 深圳公共
if(vid=='szdv'){uid='51039';}//深圳DV生活
if(vid=='yhgw'){uid='42'};// 宜和购物

if(vid=='sktv'){uid='37'};// 蛇口电视台

if(vid=='tywq'){uid='43033';}//天元围棋
if(vid=='sypd'){uid='43034';}//摄影频道
if(vid=='sypd2'){uid='51037';}//摄影频道
 
if(vid=='scwhly'){uid='51001';}//四川文化旅游
if(vid=='scjj'){uid='51002';}//四川经济
if(vid=='scxw'){uid='51003';}//四川新闻
if(vid=='scyswy'){uid='51004';}//四川影视文艺
if(vid=='sckj'){uid='51006';}//四川科教
if(vid=='scggxc'){uid='51007';}//四川公共乡村
if(vid=='sc7pd'){uid='51005';}//四川7频道
if(vid=='scemdy'){uid='51008';}//四川峨嵋电影 

if(vid=='qspd'){uid='43051'};//求索纪录
if(vid=='qsdw'){uid='43053';}//求索动物
if(vid=='qssh'){uid='43052'};//求索生活
if(vid=='qskx'){uid='43054'};//求索科学

if(vid=='xfjc'){uid='43055'};// CBN幸福剧场
if(vid=='cbnmryy'){uid='43091';}//CBN每日影院
if(vid=='cbnxfyl'){uid='43092';}//CBN幸福娱乐
if(vid=='cbnfsss'){uid='43093';}//CBN风尚生活

var xl='http://sk.live.otvcloud.com/otv/skcc/live/channel'+uid+'/index.m3u8?k='+k;

location.href=xl;

});


</script>

</body>
</html>