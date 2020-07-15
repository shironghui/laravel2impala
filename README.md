# laravel2impala
## A PHP extension library that can directly connect to Impala.

# 一、环境安装

1、官网下载.tar.gz安装包，地址：https://mirrors.tuna.tsinghua.edu.cn/apache/thrift/0.13.0/thrift-0.13.0.tar.gz

2、解压、编译、安装：

./configure ./configure --without-java (不需要支持的语言使用参数--without-xxx)

make && make install

3、进入加压后的目录，创建结构和接口定义文件server.thrift:

    struct message { 
      i32 seqId, 
      string content 
    } 
    service serDemo { 
      void put(message msg) 
    }
    
执行命令：thrift -gen php server.thrift
生成gen-php说明安装成功。


# 二、安装laravel依赖包

1、非常简单，项目根目录执行命令：

composer require semir/laravel2impala:1.1

参考地址：https://packagist.org/packages/semir/laravel2impala

提示success后，查看vender/目录下是否有semir/laravel2impala/src目录且不为空；

2、修改config/app.php

providers添加Odbc\Impala\ImpalaServiceProvider::class

3、.env文件添加配置项：

IMPALA_HOST=x.x.x.x

IMPALA_PORT=21000

至此，恭喜你！安装完毕。


# 三、Demo

```php
use App\Http\Proxy\ImpalaProxy;
$sql = "show tables";
// $keys 参数可选传，如果不传则返回纯数据（没有key只有value）；如果传值，需要与select后的属性相对应
$keys = []; 
// 返回数组 只有value
$result1 = ImpalaProxy::getInstance()->execute($sql);
// 返回数组 key=>value 形式
$result2 = ImpalaProxy::getInstance()->execute($sql, $keys);
print_r($result1);
print_r($result2);
```
