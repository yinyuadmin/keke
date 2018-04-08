/**
 * Created by admin on 2018/4/4.
 */
var arrImg = ['img/1.jpg','img/2.jpg'];
var num = 1;//头像的更改地址
var iNum = 0;//保存消息的浮动方向
/*
点击头像更换头像
 */
$('#footer_img').click(function(){
    if (num==1)
    {
        this.src=arrImg[0];
        num=0;
    }else
    {
        this.src=arrImg[1];
        num=1;
    }
});
/*
点击按钮发送消息
 */
$('#btn').click(function(){
    var text = $('#text').val();//得到文本框的值
    if(text==''&& text==null)
    {
        alert('请输入内容!!!');
    }else
    {
        var content = $("ul");
        iNum++;
        if (num==0)
        {
            content.append('<li><img src="rebate.js"'+arrImg[0]+'"><span>'+text+'</span></li>');
        }
    }


});
