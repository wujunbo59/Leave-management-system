<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/Public/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/assets/css/admin.css">
    <link rel="stylesheet" href="/Public/assets/css/app.css">
</head>

<body data-type="generalComponents">
<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="/Public/assets/img/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-bell-o"></span> 提醒 <span class="am-badge tpl-badge-success am-round">5</span></span>
                </a>
                <!--<ul class="am-dropdown-content tpl-dropdown-content">-->
                    <!--<li class="tpl-dropdown-content-external">-->
                        <!--<h3>你有 <span class="tpl-color-success">5</span> 条提醒</h3><a href="###">全部</a></li>-->
                    <!--<li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span> 【预览模块】移动端 查看时 手机、电脑框隐藏。</a>-->
                        <!--<span class="tpl-dropdown-list-fr">3小时前</span>-->
                    <!--</li>-->
                    <!--<li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span> 移动端，导航条下边距处理</a>-->
                        <!--<span class="tpl-dropdown-list-fr">15分钟前</span>-->
                    <!--</li>-->
                    <!--<li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span> 追加统计代码</a>-->
                        <!--<span class="tpl-dropdown-list-fr">2天前</span>-->
                    <!--</li>-->
                <!--</ul>-->
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-comment-o"></span> 消息 <span class="am-badge tpl-badge-danger am-round">9</span></span>
                </a>
                <!--<ul class="am-dropdown-content tpl-dropdown-content">-->
                    <!--<li class="tpl-dropdown-content-external">-->
                        <!--<h3>你有 <span class="tpl-color-danger">9</span> 条新消息</h3><a href="###">全部</a></li>-->
                    <!--<li>-->
                        <!--<a href="#" class="tpl-dropdown-content-message">-->
                                <!--<span class="tpl-dropdown-content-photo">-->
                      <!--<img src="/Public/assets/img/user02.png" alt=""> </span>-->
                            <!--<span class="tpl-dropdown-content-subject">-->
                      <!--<span class="tpl-dropdown-content-from"> 禁言小张 </span>-->
                                <!--<span class="tpl-dropdown-content-time">10分钟前 </span>-->
                                <!--</span>-->
                            <!--<span class="tpl-dropdown-content-font"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </span>-->
                        <!--</a>-->
                        <!--<a href="#" class="tpl-dropdown-content-message">-->
                                <!--<span class="tpl-dropdown-content-photo">-->
                      <!--<img src="/Public/assets/img/user03.png" alt=""> </span>-->
                            <!--<span class="tpl-dropdown-content-subject">-->
                      <!--<span class="tpl-dropdown-content-from"> Steam </span>-->
                                <!--<span class="tpl-dropdown-content-time">18分钟前</span>-->
                                <!--</span>-->
                            <!--<span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>-->
                        <!--</a>-->
                    <!--</li>-->

                <!--</ul>-->
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-calendar"></span> 进度 <span class="am-badge tpl-badge-primary am-round">4</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-primary">3</span> 个任务进度</h3><a href="###">全部</a></li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">这是第一个</span>
                                <span class="percent">45%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-success" style="width:45%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">这是第二个 </span>
                                <span class="percent">30%</span>
                                </span>
                            <span class="progress">
                       <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">这个第三个 </span>
                                <span class="percent">60%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-warning" style="width:60%"></div></div>
                    </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick"><?php echo ($header_name); ?></span><span class="tpl-header-list-user-ico">
                    <!--<img src="/Public/assets/img/user01.png">-->
                </span>
                </a>
                <ul class="am-dropdown-content">
                    <!--<li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>-->
                    <li><a href="/index.php?c=admin&a=apply"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="/index.php?c=login&a=logout"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>

<div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
        <div class="tpl-left-nav-title">
            功能列表
        </div>
        <div class="tpl-left-nav-list">
            <ul class="tpl-left-nav-menu">
                <li class="tpl-left-nav-item">
                    <a href="/index.php?c=index" class="nav-link active">
                        <i class="am-icon-home"></i>
                        <span>系统首页</span>
                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-table"></i>
                        <span>请假管理</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu">
                        <li>
                            <a href="/index.php?c=leave&a=apply">
                                <i class="am-icon-angle-right"></i>
                                <span>假条申请</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                            <a href="/index.php?c=leave&a=index">
                                <i class="am-icon-angle-right"></i>
                                <span>假条注销</span>
                                <i class="tpl-left-nav-content tpl-badge-success">
                                    18
                                </i>
                            </a>
                                <a href="/index.php?c=leave&a=show">
                                    <i class="am-icon-angle-right"></i>
                                    <span>假条模板</span>
                                    <i class="tpl-left-nav-content tpl-badge-primary">
                                        5
                                    </i>
                                </a>

                                    <!--<a href="">-->
                                        <!--<i class="am-icon-angle-right"></i>-->
                                        <!--<span>假条列表</span>-->
                                    <!--</a>-->
                        </li>
                    </ul>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="/index.php?c=student" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-user"></i>
                        <span>学生信息</span>
                        <i class="tpl-left-nav-content tpl-badge-danger">
                            12
                        </i>
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="/index.php?c=class" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-users"></i>
                        <span>班级信息</span>

                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="/index.php?c=grade" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-th-list"></i>
                        <span>级别信息</span>

                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="/index.php?c=student" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-th"></i>
                        <span>学期信息</span>

                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list ">
                        <i class="am-icon-plus-square"></i>
                        <span>添加信息</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" >
                        <li>
                            <a href="/index.php?c=student&a=apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加学生</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                            <a href="/index.php?c=class&a=apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加班级</span>
                            </a>
                            <a href="/index.php?c=grade&a=apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加级别</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-cog"></i>
                        <span>系统设置</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" >
                        <li>
                            <a href="/index.php?c=admin&a=apply">
                                <i class="am-icon-angle-right"></i>
                                <span>用户管理</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                            <!--<a href="/index.php?c=admin&a=apply">-->
                                <!--<i class="am-icon-angle-right"></i>-->
                                <!--<span>新增用户</span>-->
                            <!--</a>-->
                            <a href="/index.php?c=admin&a=log">
                                <i class="am-icon-angle-right"></i>
                                <span>登录日志</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="login.html" class="nav-link tpl-left-nav-link-list">-->
                        <!--<i class="am-icon-key"></i>-->
                        <!--<span>登录</span>-->

                    <!--</a>-->
                <!--</li>-->
            </ul>
        </div>
    </div>
</div>

        <div class="tpl-content-wrapper">
            <!--<div class="tpl-content-page-title">-->
                <!--Amaze UI 表单-->
            <!--</div>-->
            <!--<ol class="am-breadcrumb">-->
                <!--<li><a href="#" class="am-icon-home">首页</a></li>-->
                <!--<li><a href="#">表单</a></li>-->
                <!--<li class="am-active">Amaze UI 表单</li>-->
            <!--</ol>-->
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 假条申请
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <!--<i class="am-icon-search"></i>-->
                                <input type="hidden" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>请假管理系统</title>
</head>
<style>
    .all{
        margin: auto;
        text-align: center;
        width: 1000px;
    }
    td{
        text-align: left;
    }
    div{
        font-size: 22px;
        font-family:"宋体";
        font-weight:bold;
    }
    .line1{
        margin-left: -5px;

    }
    h2{
        margin-left: 40px;
        text-align: left;
    }
</style>
<body>
<div class="all" >
    <h2>草原与资源环境学院长期请假条（存根）</h2>
    <div class="line1" align="left">班主任、学办老师：</div>
    <table align="" width="90%" >

        <tr>
            <td colspan="2" >
                <div  class="line2">您好！本人因
                    <u><?php echo ($leave["l_cause"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        （请 假 原 因 ）</u>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div class="line3">
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>需向您请假<u><?php echo ($leave["l_day"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                </u>天。
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div>请假时间为：<u>&nbsp;&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;&nbsp;</u> 日 至
                    <u>&nbsp;&nbsp;&nbsp;</u> 年 <u>&nbsp;&nbsp;&nbsp;</u>  月  <u>&nbsp;&nbsp;&nbsp;</u>   日  </div>

            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div>学号：<u><?php echo ($leave["l_s_card"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>班级：<u><?php echo ($leave["l_s_grade"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>级<u><?php echo ($leave["l_s_class"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>班
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>联系方式: <u><?php echo ($leave["l_s_phone"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>请假去往地点:<u><?php echo ($leave["l_address"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>。  </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><div>特此请假，恳请批准！</div></td>
        </tr>
        <tr>
            <td colspan="2"><div>此致  </div></td>
        </tr>
        <tr>
            <td colspan="2"><div>敬礼！</div></td>
        </tr>
        <tr>
            <td><div>承诺人（请假人）：</div></td>
            <td align="left" rowspan="8" width="65%" >
                <table style="font-size: 20px;font-family:'宋体';font-weight:400;border:1px solid #000000;" >
                    <tr><td style="font-size: 22px;font-family:'宋体';font-weight:bold;">本人承诺：</td></tr>
                    <tr><td>&nbsp;&nbsp;请假期间本人保证遵纪守法，和学校保持信</td></tr>
                    <tr><td>息畅通，保证不因为请假耽误完成毕业论文和其</td></tr>
                    <tr><td>它教学环节。在请假离校期间本人人身安全由自</td></tr>
                    <tr><td>己负责，返校后及时销假。</td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;&nbsp;&nbsp;</u> 月 <u>&nbsp;&nbsp;&nbsp;</u>  日</div></td>
        </tr>
        <tr>
            <td><div>班主任同意签名：</div></td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;&nbsp;&nbsp;</u> 月 <u>&nbsp;&nbsp;&nbsp;</u>  日</div></td>
        </tr>
        <tr>
            <td><div>学办老师同意签名：</div></td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;&nbsp;&nbsp;</u> 月 <u>&nbsp;&nbsp;&nbsp;</u>  日</div></td>
        </tr>
        <tr>
            <td><div>返校销假签字：</div></td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;&nbsp;&nbsp;</u> 月 <u>&nbsp;&nbsp;&nbsp;</u>  日</div></td>
        </tr>
    </table>
    <h2 >草原与资源环境学院长期请假条</h2>
    <div class="line1" align="left">班主任、学办老师：</div>
    <table align="" width="90%" >

        <tr>
            <td colspan="2" >
                <div  class="line2">您好！本人因
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        （请 假 原 因 ）</u>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div class="line3">
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>需向您请假<u>&nbsp;&nbsp;&nbsp;&nbsp;
                </u>天。
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div>请假时间为：<u>&nbsp;&nbsp;&nbsp;</u>年<u>&nbsp;&nbsp;&nbsp;</u>月<u>&nbsp;&nbsp;&nbsp;</u> 日 至
                    <u>&nbsp;&nbsp;&nbsp;</u> 年 <u>&nbsp;&nbsp;&nbsp;</u>  月  <u>&nbsp;&nbsp;&nbsp;</u>   日  </div>

            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <div>学号：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>班级：<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>级<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>班
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>联系方式: <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>请假去往地点:<u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>。  </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><div>特此请假，恳请批准！</div></td>
        </tr>
        <tr>
            <td colspan="2"><div>此致  </div></td>
        </tr>
        <tr>
            <td colspan="2"><div>敬礼！</div></td>
        </tr>
        <tr>
            <td><div>承诺人（请假人）：</div></td>
            <td align="left" rowspan="8" width="65%" >
                <table style="font-size: 20px;font-family:'宋体';font-weight:400;border:1px solid #000000;" >
                    <tr><td style="font-size: 22px;font-family:'宋体';font-weight:bold;">本人承诺：</td></tr>
                    <tr><td>&nbsp;&nbsp;请假期间本人保证遵纪守法，和学校保持信</td></tr>
                    <tr><td>息畅通，保证不因为请假耽误完成毕业论文和其</td></tr>
                    <tr><td>它教学环节。在请假离校期间本人人身安全由自</td></tr>
                    <tr><td>己负责，返校后及时销假。</td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;&nbsp;&nbsp;</u> 月 <u>&nbsp;&nbsp;&nbsp;</u>  日</div></td>
        </tr>
        <tr>
            <td><div>班主任同意签名：</div></td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;&nbsp;&nbsp;</u> 月 <u>&nbsp;&nbsp;&nbsp;</u>  日</div></td>
        </tr>
        <tr>
            <td><div>学办老师同意签名：</div></td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;&nbsp;&nbsp;</u> 月 <u>&nbsp;&nbsp;&nbsp;</u>  日</div></td>
        </tr>
        <tr>
            <td><div>返校销假签字：</div></td>
        </tr>
        <tr>
            <td><div>2017年<u>&nbsp;&nbsp;&nbsp;</u> 月 <u>&nbsp;&nbsp;&nbsp;</u>  日</div></td>
        </tr>
    </table>




</div>
</body>
</html>










        </div>

    </div>


    <script src="/Public/assets/js/jquery.min.js"></script>
    <script src="/Public/assets/js/amazeui.min.js"></script>
    <script src="/Public/assets/js/app.js"></script>
</body>

</html>