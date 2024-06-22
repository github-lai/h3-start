# H3
一款高效简洁优雅的php mvc web开发框架，帮助您快速构建web应用

<b>说明</b>
<ol>
<li>PHP version >= PHP5.3(因为使用了命名空间)</li>
<li>设置apache AllowOverride All(因为开启了url重写)</li>
<li>开启apache模块 rewrite_module</li>
<li>为了在linux下能正常运行，开发过程中请注意大小写要求，遵守psr-4规范</li>
<li>框架开发过程中遵循基本原则：文件夹全部小写，类文件全部大写，模板文件全部大写字母开头。控制器里大写字母开头的都是Action，小写开头的都是内部方法</li>

</ol>

<b>框架特点</b>
<ol>
<li>web应用高效率开发</li>
<li>代码简洁优雅，可读性好，可维护性强</li>
<li>性能接近原生php</li>
</ol>


<b>H3入门手册</b><br/>

http://www.helper3.com/res/article/9897.html


# 开发常见问题
项目根目录下执行命令：
    composer require h3/framework:v1.0
打印异常如下
    Root composer.json requires h3/framework, it could not be found in any version, there may be a typo in the package name.
问题原因：
    国内无法访问packagist外国镜像导致 https://packagist.phpcomposer.com
解决办法：
    改为国内阿里云镜像 https://mirrors.aliyun.com/composer 再执行命令即可


# 其他
<br/><b>Bug反馈与建议</b><br/>

qq群：570078429
