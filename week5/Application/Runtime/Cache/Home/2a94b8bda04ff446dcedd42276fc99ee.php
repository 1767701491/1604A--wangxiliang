<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<input type="text" id="sou" placeholder="输入标题搜索"/>
<input type="button" value="搜索" id="so"/>
<table border="1">
    <tr>
        <td>id</td>
        <td>标题</td>
        <td>添加时间</td>
        <td>点击次数</td>
    </tr>
    <?php foreach($list as $key=>$val):?>
    <tr>
        <td><?=$val['id']?></td>
        <td><?=$val['title']?></td>
        <td><?=date('Y/m/d',$val['addtime']);?></td>
        <td><?=$val['click']?></td>
    </tr>
    <?php endforeach;?>
    <tr>
        <td colspan="4" style="text-align: center;"><?php echo ($page); ?></td>
    </tr>
</table>
</body>
</html>
<script type="text/javascript" src="/week5/public/jquery-1.8_/jquery-1.8.0.min.js"></script>
<script>
    $(document).on('click','#so',function(){
        var title = $('#sou').val();
        var url = "/week5/index.php/Home/Index/index";
        $.ajax({
            url:url,
            data:{title:title},
            type:'get',
            dataType:'JSON',
            success:function(res){
                console.log(res);
            }
        });
    });
</script>