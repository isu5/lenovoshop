## 后台登录使用验证码
https://packagist.org/packages/mews/captcha

    1.安装：composer require mews/captcha
    2.config/app.php  引入
     'providers' => [
            // ...
            Mews\Captcha\CaptchaServiceProvider::class,
        ]
    3.在config文件夹生成配置文件 php artisan vendor:publish
    4.登录页调用 <img src="{{captcha_src()}}" />  更多参考以上链接
  
## 后台首页模版布局
    
   
    
