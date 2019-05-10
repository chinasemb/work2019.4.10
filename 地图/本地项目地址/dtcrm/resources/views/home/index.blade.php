<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script type="text/javascript" src="/static/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/home/js/echarts.min.js"></script>
    <script type="text/javascript" src="/static/home/js/map/china.js"></script>
    
    <link rel="stylesheet" href="/static/home/css/china.css" />
    <link rel="stylesheet" href="/static/home/css/table.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    
    <style>
        * {
            margin: 0;
            padding: 0;
            /* bottom: 0; */
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        #china-map {
            width: 100vw;
            height: 100vh;
            margin: auto;
        }

        #box {
            display: '';
            background-color: goldenrod;
            width: 180px;
            height: 30px;
        }

        #box-title {
            display: block;
        }

        body .kongyu button {
            width: 100%;
            height: 5vh;
            margin-top: 1vh;
            background-color: #c7000b;
            color: #fff;
            border-radius: 6px;
            line-height: 40px;
            font-size: 15px;
        }

        .china img {
            display: block;
            max-width: 100%;
        }
        body,div,h2{margin:0;padding:0;}
        h2{color:red;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;text-align:center;}
        body{font:12px/1.5 \5fae\8f6f\96c5\9ed1;color:#333;}
        #drag{position:absolute;left:30%;top:30%;background:#e9e9e9;border:1px solid #444;border-radius:5px;box-shadow:0 1px 3px 2px #666;}
        #drag .title{position:relative;height:27px;margin:5px;}
        #drag .title h2{font-size:14px;height:27px;line-height:24px;border-bottom:1px solid #A1B4B0;}
        #drag .title div{position:absolute;height:19px;top:2px;right:0;}
        #drag .title a,a.open{float:left;width:21px;height:19px;display:block;margin-left:5px;}
        a.open{position:absolute;top:10px;left:50%;margin-left:-10px;background-position:0 0;}
        a.open:hover{background-position:0 -29px;}
        #drag .title a.min{z-index:3;background-position:-29px 0;}
        #drag .title a.min:hover{color:green;}
        #drag .title a.max{z-index:3;background-position:-60px 0;}
        #drag .title a.max:hover{color:green;}
        #drag .title a.revert{z-index:3;background-position:-149px 0;}
        #drag .arrow:hover{color: green}
        /* display:none */

        #drag .title a.revert:hover{color:green;}
        #drag .title a.close{z-index:3;background-position:-89px 0;}
        #drag .title a.close:hover{color:green;}
        #drag .content{overflow:auto;margin:0 5px;color:red;font-size:15px;}
        #drag .resizeBR{position:absolute;width:14px;height:14px;right:0;bottom:0;overflow:hidden;cursor:nw-resize;}
        #drag .resizeL,#drag .resizeT,#drag .resizeR,#drag .resizeB,#drag .resizeLT,#drag .resizeTR,#drag .resizeLB{position:absolute;background:#000;overflow:hidden;opacity:0;filter:alpha(opacity=0);}
        #drag .resizeL,#drag .resizeR{top:0;width:5px;height:100%;cursor:w-resize;}
        #drag .resizeR{right:0;}
        #drag .resizeT,#drag .resizeB{width:100%;height:5px;cursor:n-resize;}
        #drag .resizeT{top:0;}
        #drag .resizeB{bottom:0;}
        #drag .resizeLT,#drag .resizeTR,#drag .resizeLB{width:8px;height:8px;background:#FF0;}
        #drag .resizeLT{top:0;left:0;cursor:nw-resize;}
        #drag .resizeTR{top:0;right:0;cursor:ne-resize;}
        #drag .resizeLB{left:0;bottom:0;cursor:ne-resize;}

        .arrow{
          font-size: 35px;
          line-height: 18px;
        }
        /* .title{
          padding-left: 3px;
        } */

</style>
  </head>

  <body>
    <div class="china">
      <div class="ditu">
        <button id="back" class="none">返回全国</button>
        <div id="china-map"></div>


        <!-- 隐藏窗口变显示 -->
        <div class="shi visibility" id="drag" style="overflow:scroll-x;width:99%;height:50%">
            <div class="title">
                <a href="javascript:;" title="返回上一页" class="arrow">☚</a>
                <h2>可拖窗口</h2>
                <div>
                    <a class="revert" href="javascript:;" title="还原">回</a>
                    <a class="max" href="javascript:;" title="最大化">口</a>
                    <a class="close" href="javascript:;" title="关闭">X</a>
                </div>
            </div>
            <div class="wrapper-table">
              <!-- 表格 -->
              <table class="table table-hover">
                <tr class="success">
                  <th>用户列表</th>
                  <th>详情</th>
                  <th>跟单阶段</th>
                  <th>审核状态</th>
                  <th>签收状态</th>
                  <th>招商顾问</th>
                  <th>归属部门</th>
                  <th>时间</th>
                </tr>
               
                <tr class="active" >
                  <th>用户A</th>
                  <th><a hef="/msg">详情查看</a></th>
                  <th>完成</th>
                  <th>完成</th>
                  <th>完成</th>
                  <th>XX部门</th>
                  <th>XX部门</th>
                  <th>2019年4月29日</th>
                </tr>
      
              </table>
              <!-- 表格 -->


              <!-- 分桢 -->
              <iframe
              src="/msg"
              overflow= "auto";
              width="100%"
              height="95%"
              frameborder="10"
              class="fenxian"
              >
              </iframe>
              <!-- 分桢 -->
            </div>
            <!-- 拖拽边框 -->
            <div class="resizeL"></div>
            <div class="resizeT"></div>
            <div class="resizeR"></div>
            <div class="resizeB"></div>
            <div class="resizeLT"></div>
            <div class="resizeTR"></div>
            <div class="resizeBR"></div>
            <div class="resizeLB"></div>
            <!-- 拖拽边框 -->
            
        </div>
        <!-- 隐藏窗口变显示 -->
      </div>
    </div>
  </body>

<!-- 地图的JS start-->
  <script>
    function unitConvert(num) {
      if (num) {
        var moneyUnits = ['', '万'],
          dividend = 10000,
          curentNum = num, //转换数字
          curentUnit = moneyUnits[0]; //转换单位
        for (var i = 0; i < 2; i++) {
          curentUnit = moneyUnits[i];
          if (strNumSize(curentNum) < 5) {
            return num;
          }
        }
        curentNum = curentNum / dividend;
        var m = {
          num: 0,
          unit: '',
        };
        m.num = curentNum.toFixed(2);
        m.unit = curentUnit;
        return m.num + m.unit;
      }
    }

    function strNumSize(tempNum) {
      var stringNum = tempNum.toString();
      var index = stringNum.indexOf('.');
      var newNum = stringNum;
      if (index != -1) {
        newNum = stringNum.substring(0, index);
      }
      return newNum.length;
    }

    // 金额转换万字单位 end

    var myChart = echarts.init(document.getElementById('china-map'));
    var oBack = document.getElementById('back');

    var provinces = [
      'shanghai',
      'hebei',
      'shanxi',
      'neimenggu',
      'liaoning',
      'jilin',
      'heilongjiang',
      'jiangsu',
      'zhejiang',
      'anhui',
      'fujian',
      'jiangxi',
      'shandong',
      'henan',
      'hubei',
      'hunan',
      'guangdong',
      'guangxi',
      'hainan',
      'sichuan',
      'guizhou',
      'yunnan',
      'xizang',
      'shanxi1',
      'gansu',
      'qinghai',
      'ningxia',
      'xinjiang',
      'beijing',
      'tianjin',
      'chongqing',
      'xianggang',
      'aomen',
    ];

    var provincesText = [
      '上海',
      '河北',
      '山西',
      '内蒙古',
      '辽宁',
      '吉林',
      '黑龙江',
      '江苏',
      '浙江',
      '安徽',
      '福建',
      '江西',
      '山东',
      '河南',
      '湖北',
      '湖南',
      '广东',
      '广西',
      '海南',
      '四川',
      '贵州',
      '云南',
      '西藏',
      '陕西',
      '甘肃',
      '青海',
      '宁夏',
      '新疆',
      '北京',
      '天津',
      '重庆',
      '香港',
      '澳门',
    ];

    var toolTipData = [
      {
        provinceName: '北京',
        provinceKey: 110000,
        cityName: null,
        cityKey: null,
        shopCount: 4,
        totalPrice: 860448.7,
        orderCount: 31744,
        onlineCount: 0,
      },
      {
        provinceName: '天津',
        provinceKey: 120000,
        cityName: null,
        cityKey: null,
        shopCount: 4,
        totalPrice: 697438.3,
        orderCount: 30025,
        onlineCount: 0,
      },
      {
        provinceName: '河北',
        provinceKey: 130000,
        cityName: null,
        cityKey: null,
        shopCount: 26,
        totalPrice: 1051461.5,
        orderCount: 50625,
        onlineCount: 0,
      },
      {
        provinceName: '山西',
        provinceKey: 140000,
        cityName: null,
        cityKey: null,
        shopCount: 12,
        totalPrice: 432680.2,
        orderCount: 20427,
        onlineCount: 0,
      },
      {
        provinceName: '内蒙古',
        provinceKey: 150000,
        cityName: null,
        cityKey: null,
        shopCount: 6,
        totalPrice: 379952.5,
        orderCount: 14585,
        onlineCount: 0,
      },
      {
        provinceName: '辽宁',
        provinceKey: 210000,
        cityName: null,
        cityKey: null,
        shopCount: 11,
        totalPrice: 543290.6,
        orderCount: 27143,
        onlineCount: 0,
      },
      {
        provinceName: '吉林',
        provinceKey: 220000,
        cityName: null,
        cityKey: null,
        shopCount: 9,
        totalPrice: 234353.7,
        orderCount: 11123,
        onlineCount: 0,
      },
      {
        provinceName: '黑龙江',
        provinceKey: 230000,
        cityName: null,
        cityKey: null,
        shopCount: 10,
        totalPrice: 152894.8,
        orderCount: 6481,
        onlineCount: 0,
      },
      {
        provinceName: '上海',
        provinceKey: 310000,
        cityName: null,
        cityKey: null,
        shopCount: 3,
        totalPrice: 665877.5,
        orderCount: 26753,
        onlineCount: 0,
      },
      {
        provinceName: '江苏',
        provinceKey: 320000,
        cityName: null,
        cityKey: null,
        shopCount: 43,
        totalPrice: 3302139.4,
        orderCount: 158180,
        onlineCount: 0,
      },
      {
        provinceName: '浙江',
        provinceKey: 330000,
        cityName: null,
        cityKey: null,
        shopCount: 19,
        totalPrice: 2285259.3,
        orderCount: 116344,
        onlineCount: 0,
      },
      {
        provinceName: '安徽',
        provinceKey: 340000,
        cityName: null,
        cityKey: null,
        shopCount: 17,
        totalPrice: 1081322.1,
        orderCount: 57139,
        onlineCount: 0,
      },
      {
        provinceName: '福建',
        provinceKey: 350000,
        cityName: null,
        cityKey: null,
        shopCount: 4,
        totalPrice: 1352019.8,
        orderCount: 65228,
        onlineCount: 0,
      },
      {
        provinceName: '江西',
        provinceKey: 360000,
        cityName: null,
        cityKey: null,
        shopCount: 7,
        totalPrice: 689353.7,
        orderCount: 31822,
        onlineCount: 0,
      },
      {
        provinceName: '山东',
        provinceKey: 370000,
        cityName: null,
        cityKey: null,
        shopCount: 31,
        totalPrice: 1177320.9,
        orderCount: 59966,
        onlineCount: 0,
      },
      {
        provinceName: '河南',
        provinceKey: 410000,
        cityName: null,
        cityKey: null,
        shopCount: 19,
        totalPrice: 953710.6,
        orderCount: 52829,
        onlineCount: 0,
      },
      {
        provinceName: '湖北',
        provinceKey: 420000,
        cityName: null,
        cityKey: null,
        shopCount: 0,
        totalPrice: 890921.4,
        orderCount: 46768,
        onlineCount: 0,
      },
      {
        provinceName: '湖南',
        provinceKey: 430000,
        cityName: null,
        cityKey: null,
        shopCount: 19,
        totalPrice: 1007182.7,
        orderCount: 44094,
        onlineCount: 0,
      },
      {
        provinceName: '广东',
        provinceKey: 440000,
        cityName: null,
        cityKey: null,
        shopCount: 5,
        totalPrice: 3792306.1,
        orderCount: 165774,
        onlineCount: 0,
      },
      {
        provinceName: '广西',
        provinceKey: 450000,
        cityName: null,
        cityKey: null,
        shopCount: 8,
        totalPrice: 1252955,
        orderCount: 69882,
        onlineCount: 0,
      },
      {
        provinceName: '海南',
        provinceKey: 460000,
        cityName: null,
        cityKey: null,
        shopCount: 0,
        totalPrice: 617514,
        orderCount: 33090,
        onlineCount: 0,
      },
      {
        provinceName: '重庆',
        provinceKey: 500000,
        cityName: null,
        cityKey: null,
        shopCount: 4,
        totalPrice: 468892.6,
        orderCount: 20163,
        onlineCount: 0,
      },
      {
        provinceName: '四川',
        provinceKey: 510000,
        cityName: null,
        cityKey: null,
        shopCount: 8,
        totalPrice: 793622.7,
        orderCount: 43625,
        onlineCount: 0,
      },
      {
        provinceName: '贵州',
        provinceKey: 520000,
        cityName: null,
        cityKey: null,
        shopCount: 3,
        totalPrice: 659747.2,
        orderCount: 28817,
        onlineCount: 0,
      },
      {
        provinceName: '云南',
        provinceKey: 530000,
        cityName: null,
        cityKey: null,
        shopCount: 4,
        totalPrice: 657485.2,
        orderCount: 30916,
        onlineCount: 0,
      },
      {
        provinceName: '西藏',
        provinceKey: 540000,
        cityName: null,
        cityKey: null,
        shopCount: 0,
        totalPrice: 106922.4,
        orderCount: 2470,
        onlineCount: 0,
      },
      {
        provinceName: '陕西',
        provinceKey: 610000,
        cityName: null,
        cityKey: null,
        shopCount: 7,
        totalPrice: 589961.2,
        orderCount: 27093,
        onlineCount: 0,
      },
      {
        provinceName: '甘肃',
        provinceKey: 620000,
        cityName: null,
        cityKey: null,
        shopCount: 2,
        totalPrice: 248209.2,
        orderCount: 12390,
        onlineCount: 0,
      },
      {
        provinceName: '青海',
        provinceKey: 630000,
        cityName: null,
        cityKey: null,
        shopCount: 3,
        totalPrice: 33328.1,
        orderCount: 1161,
        onlineCount: 0,
      },
      {
        provinceName: '宁夏',
        provinceKey: 640000,
        cityName: null,
        cityKey: null,
        shopCount: 2,
        totalPrice: 146590.7,
        orderCount: 5240,
        onlineCount: 0,
      },
      {
        provinceName: '新疆',
        provinceKey: 650000,
        cityName: null,
        cityKey: null,
        shopCount: 4,
        totalPrice: 294423.4,
        orderCount: 11741,
        onlineCount: 0,
      },
    ];
    var seriesData = [];

    // fuzhizhantie
    for (var i = 0; i < toolTipData.length; i++) {
      seriesData[i] = {};
      seriesData[i].name = toolTipData[i].provinceName;
      seriesData[i].value = toolTipData[i].shopCount;
      seriesData[i].provinceKey = toolTipData[i].provinceKey;
    }
    // 请求省市数据，传递provinceKey进行ajax请求 province(key)
    var provinceData = [
      {
        provinceName: null,
        provinceKey: null,
        cityName: '乌鲁木齐市',
        cityKey: 650100,
        shopCount: 17,
        totalPrice: 89429.1,
        orderCount: 4019,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '克拉玛依市',
        cityKey: 650200,
        shopCount: 1,
        totalPrice: 363.6,
        orderCount: 17,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '昌吉回族自治州',
        cityKey: 652300,
        shopCount: 3,
        totalPrice: 2203.7,
        orderCount: 82,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '博尔塔拉蒙古自治州',
        cityKey: 652700,
        shopCount: 1,
        totalPrice: 7327.7,
        orderCount: 236,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '巴音郭楞蒙古自治州',
        cityKey: 652800,
        shopCount: 2,
        totalPrice: 28768.4,
        orderCount: 961,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '阿克苏地区',
        cityKey: 652900,
        shopCount: 5,
        totalPrice: 78415.2,
        orderCount: 3108,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '喀什地区',
        cityKey: 653100,
        shopCount: 4,
        totalPrice: 38870.1,
        orderCount: 1477,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '和田地区',
        cityKey: 653200,
        shopCount: 1,
        totalPrice: 10488,
        orderCount: 218,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '伊犁哈萨克自治州',
        cityKey: 654000,
        shopCount: 6,
        totalPrice: 32864.2,
        orderCount: 1363,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '塔城地区',
        cityKey: 654200,
        shopCount: 1,
        totalPrice: 160,
        orderCount: 5,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '省直辖行政单位',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
       //海南
    {
      provinceName: null,
      provinceKey: null,
      cityName: '海口市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '三亚市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '琼山区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '龙华区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '秀英区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '美兰区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '儋州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '五指山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '文昌市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '琼海市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '万宁市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '东方市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '临高县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '澄迈县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '屯昌县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '定安县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '琼中黎族苗族自治县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '保亭黎族苗族自治县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '白沙黎族自治县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '昌江黎族自治县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '乐东黎族自治县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '陵水黎族自治县',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
      //海南
      //广东
    {
      provinceName: null,
      provinceKey: null,
      cityName: '珠海市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '汕头市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '佛山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '韶关市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '湛江市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '肇庆市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '江门市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '茂名市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '惠州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '梅州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '汕尾市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '河源市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '阳江市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '清远市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '东莞市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '中山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '潮州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '揭阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '云浮市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '深圳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '广州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
      //广东
      //广西
      {
        provinceName: null,
        provinceKey: null,
        cityName: '南宁市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '崇左市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '柳州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '来宾市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '桂林市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '梧州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '贺州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '玉林市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '贵港市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '百色市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '钦州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '河池市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '北海市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '防城港市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '凭祥市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '合山市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '岑溪市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '岑溪市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '北流市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '桂平市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '宜州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '东兴市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      //广西
      //福建
      {
        provinceName: null,
        provinceKey: null,
        cityName: '福州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '宁德市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '泉州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '厦门市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '莆田市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '南平市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '龙岩市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '三明市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '漳州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      //福建
      // 江西
      {
        provinceName: null,
        provinceKey: null,
        cityName: '南昌市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '九江市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '上饶市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '抚州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '宜春市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '吉安市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '赣州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '景德镇市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '萍乡市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '新余市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '鹰潭市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      // 江西
      // 湖南
      {
        provinceName: null,
        provinceKey: null,
        cityName: '长沙市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '株洲市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '湘潭市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '衡阳市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '邵阳市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '岳阳市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '常德市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '张家界市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '益阳市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '郴州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '永州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '娄底市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '怀化市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      // 湖南
      // 贵州
      {
        provinceName: null,
        provinceKey: null,
        cityName: '贵阳市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '遵义市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '六盘水市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '安顺市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '毕节市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '铜仁市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '黔东南苗族侗族自治州',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '黔南布依族苗族自治州',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      // 贵州
      // 四川
      {
        provinceName: null,
        provinceKey: null,
        cityName: '甘孜藏族自治州',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '阿坝藏族羌族自治州',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '凉山彝族自治州',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '眉山市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '巴中市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '广安市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '雅安市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '达州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '南充市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '宜宾市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '资阳市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '乐山市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '内江市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '遂宁市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '广元市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '德阳市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '泸州市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '攀枝花市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '自贡市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '绵阳市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      {
        provinceName: null,
        provinceKey: null,
        cityName: '成都市',
        cityKey: 659000,
        shopCount: 2,
        totalPrice: 5533.4,
        orderCount: 255,
        onlineCount: 0,
      },
      // 四川
      // 黑龙江市
    {
      provinceName: null,
      provinceKey: null,
      cityName: '大兴安岭地区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '黑河市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '齐齐哈尔市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '大庆市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '绥化市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '哈尔滨市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '伊春市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '鹤岗市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '佳木斯市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '双鸭山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '七台河市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '鸡西市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '牡丹江市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 吉林市 
    {
      provinceName: null,
      provinceKey: null,
      cityName: '长春市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '吉林市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '四平市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '通化市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '白山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '辽源市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '白城市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '松原市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '延边朝鲜族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 内蒙古
    {
      provinceName: null,
      provinceKey: null,
      cityName: '呼和浩特市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '包头市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '乌海市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '赤峰市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '通辽市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '鄂尔多斯市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '呼伦贝尔市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '巴彦淖尔市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '乌兰察布市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '兴安盟',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '锡林郭勒盟',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '阿拉善盟',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 辽宁
    {
      provinceName: null,
      provinceKey: null,
      cityName: '沈阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '大连市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '鞍山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '抚顺市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '本溪市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '丹东市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '锦州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '营口市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '阜新市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '辽阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '盘锦市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '铁岭市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '朝阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '葫芦岛市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 河北省
    {
      provinceName: null,
      provinceKey: null,
      cityName: '石家庄市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '唐山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '秦皇岛市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '邯郸市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '邢台市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '保定市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '张家口市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '承德市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '沧州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '廊坊市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '衡水市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
        // 天津
        {
      provinceName: null,
      provinceKey: null,
      cityName: '东丽区',
      cityKey: 659000,
      shopCount: 5,
      totalPrice: 5533.4,
      orderCount: 555,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '西青区',
      cityKey: 659000,
      shopCount: 5,
      totalPrice: 5533.4,
      orderCount: 555,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '津南区',
      cityKey: 659000,
      shopCount: 5,
      totalPrice: 5533.4,
      orderCount: 555,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '北辰区',
      cityKey: 659000,
      shopCount: 5,
      totalPrice: 5533.4,
      orderCount: 555,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '静海区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '武清区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '宝坻区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '宁河区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '滨海新区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '红桥区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '河北区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '河西区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '南开区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '和平区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    
    // 北京
    {
      provinceName: null,
      provinceKey: null,
      cityName: '密云区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '延庆区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '朝阳区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '丰台区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '石景山区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '海淀区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '门头沟区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '房山区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '通州区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '顺义区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '昌平区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 宁夏
    {
      provinceName: null,
      provinceKey: null,
      cityName: '银川市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '石嘴山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '吴忠市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '固原市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '中卫市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 山西
    {
      provinceName: null,
      provinceKey: null,
      cityName: '太原市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '大同市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '朔州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '阳泉市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '长治市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '忻州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '吕梁市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '晋中市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '临汾市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '运城市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '晋城市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 山东
    {
      provinceName: null,
      provinceKey: null,
      cityName: '济南市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '青岛市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '淄博市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '枣庄市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '东营市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '烟台市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '潍坊市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '济宁市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '泰安市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '威海市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '日照市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '滨州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '德州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '聊城市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '临沂市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '菏泽市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '莱芜市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 陕西
    {
      provinceName: null,
      provinceKey: null,
      cityName: '西安市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '宝鸡市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '延安市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '铜川市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '渭南市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '榆林市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '咸阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '汉中市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '商洛市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '安康市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 甘肃
    {
      provinceName: null,
      provinceKey: null,
      cityName: '兰州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '嘉峪关市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '金昌市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '白银市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '天水市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '武威市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '张掖市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '平凉市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '酒泉市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '庆阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '定西市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '陇南市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '临夏回族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '甘南藏族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 青海
    {
      provinceName: null,
      provinceKey: null,
      cityName: '西宁市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '海东市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '海北藏族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '海南藏族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '黄南藏族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '果洛藏族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '海西蒙古族藏族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '玉树藏族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 西藏
    {
      provinceName: null,
      provinceKey: null,
      cityName: '阿里地区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '那曲地区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '日喀则市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '拉萨市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '山南市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '林芝市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '昌都市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 河南
    {
      provinceName: null,
      provinceKey: null,
      cityName: '郑州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '开封市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '洛阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '平顶山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '安阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '鹤壁市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '新乡市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '焦作市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '濮阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '许昌市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '漯河市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '三门峡市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '南阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '商丘市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '信阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '周口市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '驻马店市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '济源市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    //江苏
    {
      provinceName: null,
      provinceKey: null,
      cityName: '常州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '徐州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '南京市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '淮安市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '南通市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '宿迁市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '无锡市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '扬州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '盐城市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '苏州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '泰州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '镇江市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '连云港市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    //安徽
    {
      provinceName: null,
      provinceKey: null,
      cityName: '宿州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '淮北市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '亳州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '阜阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '蚌埠市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '淮南市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '滁州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '六安市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '马鞍山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '安庆市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '芜湖市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '铜陵市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '宣城市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '池州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '黄山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '合肥市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    //上海
    {
      provinceName: null,
      provinceKey: null,
      cityName: '松江区',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    //上海
    // 湖北 
    {
      provinceName: null,
      provinceKey: null,
      cityName: '武汉市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '黄石市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '十堰市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '宜昌市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '襄阳市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '鄂州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '荆门市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '孝感市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '荆州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '黄冈市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '咸宁市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '随州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '恩施土家族苗族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    // 湖北
        // 浙江
        {
      provinceName: null,
      provinceKey: null,
      cityName: '金华市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '杭州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '湖州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '绍兴市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '宁波市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '嘉兴市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '丽水市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '衢州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '台州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '温州市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '舟山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    //云南 
    {
      provinceName: null,
      provinceKey: null,
      cityName: '怒江傈僳族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '迪庆藏族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '德宏傣族景颇族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '、大理白族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '楚雄彝族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '、西双版纳傣族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '红河哈尼族彝族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '文山壮族苗族自治州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '临沧市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '丽江市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '保山市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '普洱市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '玉溪市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '昭通市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '曲靖市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '昆明市',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    //云南
    //重庆
    {
      provinceName: null,
      provinceKey: null,
      cityName: '渝中',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '沙坪坝',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '九龙坡',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '大渡口',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '江北',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '渝北',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '北碚',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '南岸',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '巴南',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '万州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '涪陵',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '黔江',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '长寿',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '万盛',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '双桥',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '渝中',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '沙坪坝',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '九龙坡',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '大渡口',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '江北',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '渝北',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '北碚',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '南岸',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '巴南',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '万州',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '涪陵',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '涪陵',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '黔江',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '长寿',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '万盛',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    {
      provinceName: null,
      provinceKey: null,
      cityName: '双桥',
      cityKey: 659000,
      shopCount: 2,
      totalPrice: 5533.4,
      orderCount: 255,
      onlineCount: 0,
    },
    ];

    var seriesDataPro = [];
    for (var i = 0; i < provinceData.length; i++) {
      seriesDataPro[i] = {};
      seriesDataPro[i].name = provinceData[i].cityName;
      seriesDataPro[i].value = provinceData[i].shopCount;
    }

    var max = Math.max.apply(
        Math,
        seriesData.map(function(o) {
          return o.value;
        })
      ),
      min = 0; // 侧边最大值最小值
    var maxSize4Pin = 40,
      minSize4Pin = 20;

    // fuzhizhantie

    // fuzhizhantie2
    var mapName = '';

    function getGeoCoordMap(name) {
      name = name ? name : 'china';
      /*获取地图数据*/
      var geoCoordMap = {};
      myChart.showLoading(); // loading start
      var mapFeatures = echarts.getMap(name).geoJson.features;
      myChart.hideLoading(); // loading end
      mapFeatures.forEach(function(v) {
        var name = v.properties.name; // 地区名称
        geoCoordMap[name] = v.properties.cp; // 地区经纬度
      });
      return geoCoordMap;
    }

    function convertData(data) {
      // 转换数据
      var geoCoordMap = getGeoCoordMap(mapName);
      var res = [];
      for (var i = 0; i < data.length; i++) {
        var geoCoord = geoCoordMap[data[i].name]; // 数据的名字对应的经纬度
        if (geoCoord) {
          // 如果数据data对应上，
          res.push({
            name: data[i].name,
            value: geoCoord.concat(data[i].value),
          });
        }
      }
      return res;
    }

    // fuzhizhantie2
    var num;
    oBack.onclick = function() {
      $('#back').addClass('none');
      mapName = '';
      initEcharts('china', '中国');
      // initEcharts("china", "中国");
      // $(window).location.reload();
    };

    initEcharts('china', '中国');

    // 初始化echarts
    function initEcharts(pName, Chinese_) {
      var tmpSeriesData = pName === 'china' ? seriesData : seriesDataPro;
      var tmp = pName === 'china' ? toolTipData : provinceData;

      var option = {
        toolbox: {
          show: true,
          orient: 'vertical',
          left: 'right',
          top: 'center',
          feature: {
            mark: {show: true},
            dataView: {show: true, readOnly: false},
            restore: {show: true},
            saveAsImage: {show: true},
          },
        },
        title: {
          text: Chinese_ || pName,
          left: 'center',
        },
        textStyle: {
          color: 'yellow',
          decoration: 'none',
          // fontFamily: 'Verdana, sans-serif',
          fontSize: 12,
          // fontStyle: 'italic',
          fontWeight: 'bold',
        },
        tooltip: {
          showDelay: 0,
          hideDelay: 0,
          borderColor: '#f50',
          borderRadius: 8,
          borderWidth: 2,
          padding: [5, 10, 0, 20],
          position: function(p) {
            // 位置回调
            // console.log(p);
            // console.log && console.log(p);
            return [p[0] + 10, p[1] - 80];
          },
          // grid:normal,
          trigger: 'item',
          formatter: function(params) {
            // 鼠标滑过显示的数据
            if (pName === 'china') {
              var toolTiphtml = '';
              for (var i = 0; i < tmp.length; i++) {
                if (params.name == tmp[i].provinceName) {
                  toolTiphtml +=
                    tmp[i].provinceName +
                    '<br>销售额：' +
                    unitConvert(tmp[i].totalPrice) +
                    '<br>订单数：' +
                    tmp[i].orderCount +
                    '单' +
                    '<br>门店数：' +
                    tmp[i].shopCount;
                }
              }
              return toolTiphtml;
            } else {
              var toolTiphtml = '';
              for (var i = 0; i < tmp.length; i++) {
                if (params.name == tmp[i].cityName) {
                  toolTiphtml +=
                    tmp[i].cityName +
                    '<br>销售额：' +
                    unitConvert(tmp[i].totalPrice) +
                    '<br>订单数：' +
                    tmp[i].orderCount +
                    '单' +
                    '<br>门店数：' +
                    tmp[i].shopCount;
                }
              }
              return toolTiphtml;
            }
          },
        },
        visualMap: {
          //视觉映射组件
          show: true,
          min: min,
          max: max, // 侧边滑动的最大值，从数据中获取
          left: '5%',
          top: '46%',

          inverse: true, //是否反转 visualMap 组件
          // itemHeight:200,  //图形的高度，即长条的高度
          text: ['高', '低'], // 文本，默认为数值文本
          calculable: true, //是否显示拖拽用的手柄（手柄能拖拽调整选中范围）
          seriesIndex: 1, //指定取哪个系列的数据，即哪个系列的 series.data,默认取所有系列
          orient: 'horizontal',
          inRange: {
            color: ['#dbfefe', '#1066d5'], // 蓝绿
          },
        },
        geo: {
          show: true,
          map: pName,
          roam: false,
          label: {
            normal: {
              show: false,
            },
            emphasis: {
              show: false,
            },
          },
          itemStyle: {
            normal: {
              areaColor: '#3c8dbc', // 没有值得时候颜色
              borderColor: '#097bba',
            },
            emphasis: {
              areaColor: '#fbd456', // 鼠标滑过选中的颜色
            },
          },
        },

        series: [
          {
            name: '散点',
            type: 'scatter',
            coordinateSystem: 'geo',
            data: tmpSeriesData,
            symbolSize: '1',
            label: {
              normal: {
                show: true,
                formatter: '{b}',
                position: 'right',
              },
              emphasis: {
                show: true,
              },
            },
            itemStyle: {
              normal: {
                color: '#895139', // 字体颜色
              },
            },
          },

          {
            name: Chinese_ || pName,
            type: 'map',
            mapType: pName,
            roam: false, //是否开启鼠标缩放和平移漫游
            data: tmpSeriesData,
            // top: "3%",//组件距离容器的距离
            // geoIndex: 0,
            // aspectScale: 0.75,       //长宽比
            // showLegendSymbol: false, // 存在legend时显示
            selectedMode: 'single',
            label: {
              normal: {
                show: true, //显示省份标签
                textStyle: {
                  color: '#895139',
                }, //省份标签字体颜色
              },
              emphasis: {
                //对应的鼠标悬浮效果
                show: true,
                textStyle: {
                  color: 'red',
                },
              },
            },
            itemStyle: {
              normal: {
                borderWidth: 0.5, //区域边框宽度
                borderColor: '#0550c3', //区域边框颜色
                areaColor: '#0b7e9e', //区域颜色
              },
              emphasis: {
                borderWidth: 0.5,
                borderColor: '#4b0082',
                areaColor: '#ece39e',
              },
            },
          },
          {
            name: '点',
            type: 'scatter',
            coordinateSystem: 'geo',
            symbol: 'pin', //气泡
            symbolSize: function(val) {
              var a = (maxSize4Pin - minSize4Pin) / (max - min);
              var b = minSize4Pin - a * min;
              b = maxSize4Pin - a * max;

              return a * val[2] + b;
            },
            label: {
              normal: {
                show: true,
                formatter: function(params) {
                  return params.data.value[2];
                },
                textStyle: {
                  color: '#fff',
                  fontSize: 9,
                },
              },
            },
            itemStyle: {
              normal: {
                color: 'red', //标志颜色'purple'
              },
              emphasis: {
                shadowBlur: 10,
                shadowOffsetX: 0,
                shadowColor: 'rgba(30, 144, 255，0.5)',
              },
            },
            zlevel: 6,
            data: convertData(tmpSeriesData),
          },
        ],
      };

      // 针对海南放大
      if (pName == '海南') {
        option.series[1].center = [109.844902, 19.0392];
        option.series[1].layoutCenter = ['50%', '50%'];
        option.series[1].layoutSize = '300%';
      } else {
        //非显示海南时，将设置的参数恢复默认值
        option.series[1].center = undefined;
        option.series[1].layoutCenter = undefined;
        option.series[1].layoutSize = undefined;
      }
      myChart.setOption(option);
      /* 响应式 */
      $(window).resize(function() {
        myChart.resize();
      });

      myChart.off('click');

      if (pName === 'china') {
        // 全国时，添加click 进入省级

        myChart.on('click', function(param) {
          // console.log(param.name);
          $('#back').removeClass('none');
          //遍历取到provincesText 中的下标  去拿到对应的省js
          for (var i = 0; i < provincesText.length; i++) {
            if (param.name === provincesText[i]) {
              //显示对应省份的方法
              showProvince(provinces[i], provincesText[i]);

              break;
            }
          }
          if (param.componentType === 'series') {
            var provinceName = param.name;
            $('#box').css('display', 'block');
            $('#box-title').html(provinceName);
          }
        });
      } else {
        // 省份，添加双击 回退到全国
        //点击省份，拖拽的分桢显示
        myChart.on('click', function() {
          // initEcharts("china", "中国");
          var clicty = this._chartsViews[1].__model._targetList;
          console.log(clicty);  
          
          for (var i = 0; i <  clicty.length; i++) {
            if (clicty[i].selected == true) {
                var tmpcy = clicty[i]['name'];
                num = tmpcy;
          };
        }
       
          $.ajax({
              type:'post',
              url:'/csm',
          
              data: {'_token': $('meta[name=csrf-token]').attr("content"), 'city': num},
              dataType:"json",
               headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
              success:function(e){
                console.log(num);
               
                

              }

          })

      


          for (var q = 0; q < this._chartsViews[0].__model.option.length; q++) {
            if (this._chartsViews[0].__model._targetList[q].selected == true) {
              // console.log(this._chartsViews[0].__model.option);
              $('.shi>h3').text(
                this._chartsViews[0].__model._targetList[q].name
              );
            }
          }
          $('.shi').addClass('show');

          $('tbody').css({
            "display": "",
          });
        });
      }
    
      if (pName === 'china') {
        // 全国时，添加click 进入省级
        myChart.on('click', function(param) {
          // console.log(param.name);
          if (param.data && param.data.provinceKey) {
            var key = param.data.provinceKey;
            // province(key);  省份请求
            if (provinceData.length) {
              $('#back').removeClass('hidden');
              // 遍历取到provincesText 中的下标  去拿到对应的省js
              for (var i = 0; i < provincesText.length; i++) {
                if (param.name === provincesText[i]) {
                  mapName = provincesText[i];
                  //显示对应省份的方法
                  showProvince(provinces[i], provincesText[i]);
                  break;
                }
              }
            }
          }
        });
      } else {
        // 省份，添加双击 回退到全国
        myChart.on('dblclick', function() {
          $('#back').addClass('hidden');
          mapName = '';
          initEcharts('china', '中国');
        });
      }
    }

    $('.shi .close').click(function() {
      $('.shi').addClass('none');
    });

    // 展示对应的省
    function showProvince(pName, Chinese_) {
      //这写省份的js都是通过在线构建工具生成的，保存在本地，需要时加载使用即可，最好不要一开始全部直接引入。
      loadBdScript(
        '$' + pName + 'JS',
        '/static/home/js/map/province/' + pName + '.js',
        function() {
          initEcharts(Chinese_);
        }
      );
    }

    // 加载对应的JS
    function loadBdScript(scriptId, url, callback) {
      var script = document.createElement('script');
      script.type = 'text/javascript';
      if (script.readyState) {
        //IE
        script.onreadystatechange = function() {
          if (
            script.readyState === 'loaded' ||
            script.readyState === 'complete'
          ) {
            script.onreadystatechange = null;
            callback();
          }
        };
      } else {
        // Others
        script.onload = function() {
          callback();
        };
      }
      script.src = url;
      script.id = scriptId;
      document.getElementsByTagName('head')[0].appendChild(script);
    }
</script>
<!-- 地图的JS end-->

<!-- table -->
<script>
    $(".table a").click(function () {
      $(".table").hide();
      $(".fenxian").show();
      $(".wrap").css({
        "overflow-y": "hidden"
      })
    })
      $(".back a").on("click",function(){
　  window.history.go(-1);
      
 })

</script>
<!-- table -->
<!-- 拖拽的iframe start-->

  <script type="text/javascript"> 
    /*-------------------------- +
    获取id, class, tagName
    +-------------------------- */
    var get = {
      byId: function(id) {
        return typeof id === "string" ? document.getElementById(id) : id
      },
      byClass: function(sClass, oParent) {
        var aClass = [];
        var reClass = new RegExp("(^| )" + sClass + "( |$)");
        var aElem = this.byTagName("*", oParent);
        for (var i = 0; i < aElem.length; i++) reClass.test(aElem[i].className) && aClass.push(aElem[i]);
        return aClass
      },
      byTagName: function(elem, obj) {
        return (obj || document).getElementsByTagName(elem)
      }
    };
    var dragMinWidth = 450;
    var dragMinHeight = 124;
    /*-------------------------- +
    拖拽函数
    +-------------------------- */
    function drag(oDrag, handle)
    {
      var disX = dixY = 0;
      var oMin = get.byClass("min", oDrag)[0];
      var oMax = get.byClass("max", oDrag)[0];
      var oRevert = get.byClass("revert", oDrag)[0];
      var oClose = get.byClass("close", oDrag)[0];
      handle = handle || oDrag;
      handle.style.cursor = "move";
      handle.onmousedown = function (event)
      {
        var event = event || window.event;
        disX = event.clientX - oDrag.offsetLeft;
        disY = event.clientY - oDrag.offsetTop;
        document.onmousemove = function (event)
        {
          var event = event || window.event;
          var iL = event.clientX - disX;
          var iT = event.clientY - disY;
          var maxL = document.documentElement.clientWidth - oDrag.offsetWidth;
          var maxT = document.documentElement.clientHeight - oDrag.offsetHeight;
          iL <= 0 && (iL = 0);
          iT <= 0 && (iT = 0);
          iL >= maxL && (iL = maxL);
          iT >= maxT && (iT = maxT);
          oDrag.style.left = iL + "px";
          oDrag.style.top = iT + "px";
          return false
        };
        document.onmouseup = function ()
        {
          document.onmousemove = null;
          document.onmouseup = null;
          this.releaseCapture && this.releaseCapture()
        };
        this.setCapture && this.setCapture();
        return false
      };
      //最大化按钮
      oMax.onclick = function ()
      {
        oDrag.style.top = oDrag.style.left = 0;
        oDrag.style.width = document.documentElement.clientWidth - 2 + "px";
        oDrag.style.height = document.documentElement.clientHeight - 2 + "px";
        this.style.display = "visibility";
        oRevert.style.display = "block";
      };
      //还原按钮
      oRevert.onclick = function ()
      {
        oDrag.style.width = dragMinWidth + 500 + "px";
        oDrag.style.height = dragMinHeight + 200 + "px";
        oDrag.style.left = (document.documentElement.clientWidth - oDrag.offsetWidth) / 2 + "px";
        oDrag.style.top = (document.documentElement.clientHeight - oDrag.offsetHeight) / 2 + "px";
        this.style.display = "visibility";
        oMax.style.display = "block";
      };
      //最小化按钮
      //$(".table").show();
      //$(".fenxian").hide();
      oClose.onclick = function ()
      {
        var oTable = get.byClass("table", oDrag)[0];
        var oFenxian = get.byClass("fenxian", oDrag)[0];  
        oTable.style.display = "";
        oFenxian.style.display = "none";
        oDrag.style.display = "";
        var oA = document.createElement("a");
        oA.className = "open";
        oA.href = "javascript:;";
        oA.title = "还原";
        document.body.appendChild(oA);
        // oDrag.style[overflow-y] = "scroll";
        oA.onclick = function ()
        {
          oDrag.style.display = "block";
          document.body.removeChild(this);
          this.onclick = null;
        };
        $('.shi').removeClass('show')
        $('.shi').css({
          display:'block'
        })
        // location.reload()
        
        // window.location.reload();
      };
      //阻止冒泡
      oMax.onmousedown = oClose.onmousedown = function (event)
      {
        this.onfocus = function () {this.blur()};
        (event || window.event).cancelBubble = true 
      };
    }
    /*-------------------------- +
    改变大小函数
    +-------------------------- */
    function resize(oParent, handle, isLeft, isTop, lockX, lockY)
    {
      handle.onmousedown = function (event)
      {
        var event = event || window.event;
        var disX = event.clientX - handle.offsetLeft;
        var disY = event.clientY - handle.offsetTop;  
        var iParentTop = oParent.offsetTop;
        var iParentLeft = oParent.offsetLeft;
        var iParentWidth = oParent.offsetWidth;
        var iParentHeight = oParent.offsetHeight;
        document.onmousemove = function (event)
        {
          var event = event || window.event;
          var iL = event.clientX - disX;
          var iT = event.clientY - disY;
          var maxW = document.documentElement.clientWidth - oParent.offsetLeft - 2;
          var maxH = document.documentElement.clientHeight - oParent.offsetTop - 2;          var iW = isLeft ? iParentWidth - iL : handle.offsetWidth + iL;
          var iH = isTop ? iParentHeight - iT : handle.offsetHeight + iT;
          isLeft && (oParent.style.left = iParentLeft + iL + "px");
          isTop && (oParent.style.top = iParentTop + iT + "px");
          iW < dragMinWidth && (iW = dragMinWidth);
          iW > maxW && (iW = maxW);
          lockX || (oParent.style.width = iW + "px");
          iH < dragMinHeight && (iH = dragMinHeight);
          iH > maxH && (iH = maxH);
          lockY || (oParent.style.height = iH + "px");
          if((isLeft && iW == dragMinWidth) || (isTop && iH == dragMinHeight)) document.onmousemove = null;
          return false;  
        };
        document.onmouseup = function ()
        {
          document.onmousemove = null;
          document.onmouseup = null;
        };
        return false;
      }
    };
    window.onload = window.onresize = function ()
    {
      var oDrag = document.getElementById("drag");
      var oTitle = get.byClass("title", oDrag)[0];
      var oL = get.byClass("resizeL", oDrag)[0];
      var oT = get.byClass("resizeT", oDrag)[0];
      var oR = get.byClass("resizeR", oDrag)[0];
      var oB = get.byClass("resizeB", oDrag)[0];
      var oLT = get.byClass("resizeLT", oDrag)[0];
      var oTR = get.byClass("resizeTR", oDrag)[0];
      var oBR = get.byClass("resizeBR", oDrag)[0];
      var oLB = get.byClass("resizeLB", oDrag)[0];
      drag(oDrag, oTitle);
      //四角
      resize(oDrag, oLT, true, true, false, false);
      resize(oDrag, oTR, false, true, false, false);
      resize(oDrag, oBR, false, false, false, false);
      resize(oDrag, oLB, true, false, false, false);
      //四边
      resize(oDrag, oL, true, false, false, true);
      resize(oDrag, oT, false, true, true, false);
      resize(oDrag, oR, false, false, false, true);
      resize(oDrag, oB, false, false, true, false);
      oDrag.style.left = (document.documentElement.clientWidth - oDrag.offsetWidth) / 5 + "px";
      oDrag.style.top = (document.documentElement.clientHeight - oDrag.offsetHeight) / 5 + "px";
    }
    $(".arrow").click(function () {
      $(".table").show();
      $(".fenxian").hide();
    })
</script>

<!-- 拖拽的iframe end-->

<!-- table -->
<script>
//   $(".table a").click(function () {
//   console.log('A');
//   window.open('/pages/msg', 'newwindow', 'height=600, width=1400, top=100, left=100, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no') 
// })
</script>
<!-- table -->
  
</html>
