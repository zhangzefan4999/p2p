$(function () {
    $(".registerForm").bootstrapValidator({
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
            checkPassword: {
                message: '确认密码验证失败',
                //验证的规则
                validators: {
                    //非空
                    notEmpty: {
                        message: '确认密码必须填写'
                    },
                    //长度
                    stringLength: {
                        min: 6, //最小
                        max: 18, //最大
                        message: '确认密码长度必须在6~18位之间'
                    },
                    //密码相同性的验证
                    identical: {
                        field: 'password', //对哪个字段做比较
                        message: '两次输入的密码不一致'
                    }
                }
            },
            mobile: {
                message: '手机号码验证失败',
                validators: {
                    regexp: { //正则表达式
                        regexp: /^1(3|4|5|6|7|8|9)\d{9}$/,
                        message: '手机号码不对'
                      },
                      notEmpty: {
                        message: '手机号必须填写'
                    },
                }
            },
            email: {
                message: '电子邮件验证失败',
                validators: {
                    notEmpty: {
                        message: '邮箱地址不能为空'
                    },
                    emailAddress: {
                        message: '邮箱地址格式有误'
                    }
                }
            },
        }
    }).on('success.form.bv', function (e) {

    });
})