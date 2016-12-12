<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/baleijia/Admin/Public/css/index.css">
</head>
<body>
    <!--顶部-->
    <div class="top"></div>
    <!--中央区域-->
    <div class="center">
        <div class="center_top"> 后台登录 </div>
        <!--输入框-->
        <div class="center_bottom">
            <form action="http://localhost/baleijia/admin.php/Home/Index/login" method="POST" enctype="multipart/form-data" accept-charset="UTF-8" target="_self">
                <table>
                    <tr>
                        <th style="font: 22px 黑体">账号：</th>
                        <th> <input type="text" name="username"> </th>
                    </tr>
                    <tr>
                        <th style="font: 22px 黑体">密码：</th>
                        <th> <input type="password" name="userpwd"> </th>
                    </tr>
                </table>
                <!--登录按钮-->
                <div class="center_login_button">
                    <input class="center_login_button_input" type="submit" value="登录">
                </div>
            </form>
        </div>
    </div>
</body>
</html>