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

    });
})