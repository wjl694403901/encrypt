# encrypt
这是一个php使用的aes加密/解密类

## Installation

#### 使用 Composer 安装
- 执行 ： `$ composer require wjl/encrypt`

- 或在项目中的 `composer.json` 文件中添加依赖：
```json
"require": {
   "wjl/encrypt": "*" 
}
```
- 执行 `$ composer install` 

#### 直接下载源码安装

> 直接下载源代码也是一种安装 SDK 的方法，不过因为有版本更新的维护问题，所以这种安装方式**十分不推荐**，但由于种种原因导致无法使用 Composer，所以也提供了这种情况下的备选方案。

- 下载源代码包,解压到项目中 `https://github.com/wjl694403901/encrypt`
- 在项目中引入 autoload

#### 使用 具体参数根据自己需求更改
### 加密
Wjl/Encrypt::encrypt(string $data, string $key, string $algo = self::AES_128_ECB, string $iv = '')

### 解密
Wjl/Encrypt::decrypt(string $data, string $key, string $algo = self::AES_128_ECB, string $iv = '')