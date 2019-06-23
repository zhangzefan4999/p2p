$(function () {
    $(".loginForm").bootstrapValidator({
        message: 'This value is not valid', //全局的出错消息配置
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: '用户名不能为空'
                    },
                    stringLength: {  //长度限制
                        min: 6,
                        max: 12,
                        message: '用户名长度必须在6到12位之间'
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: '密码不能为空'
                    },
                    stringLength: {  //长度限制
                        min: 6,
                        max: 18,
                        message: '密码长度必须在6到18位之间'
                    },
                }
            },
        }
    }).on('success.form.bv', function (e) {
        e.preventDefault();//阻止表单submit提交  因为我们要使用下面的ajax的post提交方式
        var $form = $(e.target); //获取form对象
        var bv = $form.data('bootstrapValidator');//获取实例
        $.post("./api/userLogin.php",$form.serialize(),function(result){  
            //$form.serialize()  批量获取用户填写的表单数据  得到是个字符串 跟url传参格式一样
            if(result.isSuccess){
                $('#myRegisterModal').modal('show')
                $("#myModalLabel").text(result.msg)
                $("#myModalBody").html(`<span class='glyphicon glyphicon-ok'></span> ${result.msg}，等待<span id
                ='num'>6</span>秒后跳转到个人中心`);
                //定时器修改等待的数字
                let num=3;
                var timesID=setInterval(()=>{
                   num--;
                   $("#num").text(num);
                   if(num==0){
                       clearInterval(timesID);
                       location.href="./index.php";//跳转到登录页面
                   }
                },1000);
            }else{
                $('#myRegisterModal').modal('show')
                $("#myModalLabel").text(result.msg)
                $("#myModalBody").text("请重新填写！！！")
            } 
        },'json')  
    });
})