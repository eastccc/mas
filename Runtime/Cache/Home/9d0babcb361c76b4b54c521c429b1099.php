<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title>联系我们</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="/Public/static/lib/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/css/swiper.min.css">
    <link href="/Public/static/css/common.css" rel="stylesheet" >
    <link href="/Public/static/css/contact.css" rel="stylesheet" >
</head>
<body>
<!-- 头部 head --> 
   <div class="head"> 
   <div class="container-fluid"> 
    <div class="row headrow"> 
     <!-- <div class="col-lg-4 col-md-4"> --> 
     <div class="logocontent">
      <a href="/home/Index/index"> 
        <div class="logo"> 
          <img src="/Public/static/images/logo.png" /> 
        </div> 
      </a> 
     </div> 
     <!-- <div class="col-lg-7  col-md-7 "> --> 
     <div class="navcontent"> 
      <ul class="nav nav-pills navlist"> 
        <li role="presentation"> 
          <a href="/home/company/index" data-toggle="dropdown"> 
            <label>公司简介</label> 
          </a> 
          <ul class="dropdown-menu "> 
            <li role="presentation"> 
              <a href="/home/company/index"> 
                <label>公司概况</label> 
              </a> 
            </li> 
            <li role="presentation"> 
              <a href="/home/company/index"> 
                <label>公司新闻</label> 
              </a> 
            </li> 
            <li role="presentation"> 
              <a href="/home/company/index"> 
                <label>荣获奖项</label> 
              </a> 
            </li> 
          </ul> 
        </li> 
       <li role="presentation"> 
        <a href="/home/team/team"> 
          <label>设计团队</label> 
        </a> 
        <ul class="dropdown-menu "> 
         <li role="presentation"> 
          <a href="/home/team/cooperate"> 
            <label>合伙人</label> </a> 
          </li> 
         <li role="presentation"> 
          <a href="/home/team/team"> 
            <label>团队伙伴</label> 
          </a> 
        </li> 
        </ul> 
      </li> 
       <li role="presentation"> 
        <a href="/home/work/index"> 
          <label>设计作品</label> 
        </a> 
        <ul class="dropdown-menu"> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>规化</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>综合体</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>购物中心</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>商业</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>办公</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>居住</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>教育</label>
          </a> 
        </li> 
        </ul> 
      </li> 
       <li role="presentation"> 
        <a href="/home/contact/index" data-toggle="dropdown"> 
          <label name="contact">联系我们</label> 
        </a> 
      </li> 
      </ul> 
     </div> 
     <div class="langToggle " id="lang"> 
      <label class="radio-inline"> <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="en" /> <i id="item1">English</i> </label> 
      <label class="radio-inline"> <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="zh-TW" /> <i id="item2"> 繁体 </i> </label> 
     </div> 
    </div> 
   </div> 
  </div> 
<!-- 内容区域 content -->
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-4" style="height:100%;">

                <div style="display: flex;align-items: center;height: 100%;">
                    <div style="height: 80%;">
                        <div class="contactUsItem active">
                            <div class="addr">
                                <div class=" " style="height: 100%;display: flex;align-items: center;">
                                    <a href="#"> 上海</a>
                                </div>
                            </div>
                            <div class="contactUsInfo">
                                <p >
                                    上海市卢湾区南塘浜路116号1号楼2楼（200023）
                                    Floor 2, Building 1, No.116, NanTangBang Rd, LuWan District, Shanghai, China(200023)
                                </p>

                                <div  > T : 86-21-53018787    </div>
                                <div  > F : 86-21-53027178   </div>
                                <div  > 联系邮箱： <a href="#" class="emailE">mas@mas2000.com  </a>   </div>
                                <div  > 应聘邮箱： <a class="emailE" href="#">mas@mas2000.com  </a>  </div>

                            </div>
                        </div>

                        <div class="contactUsItem">
                            <div class="addr">
                                <div class=" " style="height: 100%;display: flex;align-items: center;">
                                    <a href="#"> 郑州</a>
                                </div>
                            </div>
                            <div class="contactUsInfo">
                                <p >
                                    郑州市金水区黄河路95号新田大厦3楼（450000）
                                    3F, Xin Tian head quarter, No.95, Huanghe Rd, Jinshui District, Zhengzhou, China (450000)
                                </p>

                                <div  > T : 86-0371-68265798    </div>
                                <div  > F : 86-0371-68265698   </div>
                                <div  > 联系邮箱： <a href="#" class="emailE">maszz@mas2000.com  </a>   </div>
                                <div  > 应聘邮箱： <a class="emailE" href="#">mas@ mas2000 .com  </a>  </div>


                            </div>
                        </div>

                        <div class="contactUsItem" style="margin-bottom: 0px;">
                            <div class="addr">
                                <div class=" " style="height: 100%;display: flex;align-items: center;">
                                    <a href="#"> 台北 </a>
                                </div>
                            </div>
                            <div class="contactUsInfo">
                                <p >
                                    台北市信义区基隆路一段163号8楼之3
                                    8F.-3, No.163, sec.1, Keelung Rd.,Xinyi Dist.,Taipei City110, Taiwan
                                </p>

                                <div  > T : 886-02-37653358    </div>
                                <div  > F : 886-02-37653359   </div>
                                <div  > 联系邮箱： <a href="#" class="emailE">mas.Taipei31838242@gmail.com  </a>   </div>
                                <div  > 应聘邮箱： <a class="emailE" href="#">mas.Taipei31838242@gmail.com  </a>  </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8" style="height: 100%;">

                <!--地图 -->
                <div class="container" id="containerMap">

                    <div class="popover  pop1" data-easein="cardInRight" data-easeout="cardOutRight" id="pop1">

                        <div class="popover-inner">

                            <h3 class="popover-title">郑州</h3>

                        </div>

                    </div>


                    <div class="popover  pop2" data-easein="cardInTop" data-easeout="cardOutTop" id="pop2">

                        <div class="popover-inner">

                            <h3 class="popover-title"> 上海</h3>


                        </div>

                    </div>


                    <div class="popover  pop3" data-easein="cardInLeft" data-easeout="cardOutLeft" id="pop3">


                        <div class="popover-inner">

                            <h3 class="popover-title">台北</h3>

                        </div>

                    </div>




                    <!--<img src="/Public/static/lib/hotsopot/images/arrow1.png" alt="info" class="info-icon info-icon1" data-target="pop1"  />-->

                    <!--<img src="/Public/static/lib/hotsopot/images/arrow1.png" alt="info" class="info-icon info-icon2" data-target="pop2"  />-->

                    <!--<img src="lib/hotsopot/images/arrow1.png" alt="info" class="info-icon info-icon3" data-target="pop3"  />-->


                    <img src="/Public/static/lib/hotsopot/images/map.png" alt="" class="largeimage lg-image">
                    <img src="/Public/static/lib/hotsopot/images/map_md.png" alt="" class="largeimage md-image">

                </div>


            </div>
        </div>

        <div class="email">
            <h3 style="font-size: 23px;margin-bottom: 20px;"> 联系我们</h3>

            <form class="form-horizontal">

                <div class="form-group">
                    <!--<label for="emailAdd" class="col-sm-2 control-label">Email</label>-->
                    <div class="col-sm-offset-1 col-sm-10">
                        <input type="email" class="form-control" id="emailName" placeholder="请输入你的名字">
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="emailAdd" class="col-sm-2 control-label">Email</label>-->
                    <div class="col-sm-offset-1 col-sm-10">
                        <input type="email" class="form-control" id="emailAdd" placeholder="请输入您的邮箱">
                    </div>
                </div>

                <div class="form-group">
                    <!--<label for="emailAdd" class="col-sm-2 control-label">Email</label>-->
                    <div class="col-sm-offset-1 col-sm-10">
                        <textarea class="form-control" id="content" rows="3" placeholder="请输入内容......"></textarea>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 54px;">
                    <div class="col-sm-offset-8 col-sm-1">
                        <button type="submit" class="btn btn-default">发送</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>

<div class="foot"> 
 <div class="container-fluid"> 
  <div class="row"> 
   <!-- 语言切换 languageToggle --> 
   <div class="col-lg-offset-8 col-md-offset-8 col-lg-4  col-md-4" style="color: #999999;"> 
    <span>上海奇皇室内设计（集团）有限公司版权所有</span> 
    <span> 沪ICP备07027802号-1</span> 
   </div> 
  </div> 
 </div> 
</div> 
</body>
</html>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/js/swiper.js"></script>

<script src="/Public/static/js/base.js"></script>
<script src="/Public/static/js/contactUs.js"></script>