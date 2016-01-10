# OS X Lion 配置Apache PHP MySQL
日期：2015-1-10

### 配置Apache
- 在系统偏好设置里打开“Web 共享”
- 用浏览器打开localhost或则127.0.0.1，显示“It works!”表示Apache运行正常。

### 配置PHP
- 修改`/etc/apache2/httpd.conf`文件，找到`#LoadModule php5_module libexec/apache2/libphp5.so`删掉最前面的`#`
- 使用Shell命令`sudo apachectl restart`来重启Apache
- 在`~/Sites`新建一个PHP测试文件，内容为`<?php phpinfo(); ?>`，如果文件名为test.php，可以输入Shell命令`open "http://127.0.0.1/~$(whoami)/test.php"`来测试。

### 安装MySQL
- 去`http://downloads.mysql.com/archives/community/`下载5.5.40版本的MySQL，更高的版本已经不支持Lion。

### 配置MySQL
把`/usr/local/mysql/bin`加入`PATH`环境变量

mysqladmin -u root password ***(#初始密码)

如果设置完成后，需要修改，执行命令
mysqladmin -u root -p password new***(#最新密码)
接着会提示输入密码，此时输入旧密码，回车

连接数据库 mysql -u root -p









