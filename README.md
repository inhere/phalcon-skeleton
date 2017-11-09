# UEM - User extension information module

用户扩展信息模块

## 暂定包含板块

- 聊天
- 动态
- 评价，反馈
- 模特扩展信息（相册，认证资料）
- 关注

## 使用框架

- php `phalcon`
- api 文档 `swagger`

## phalcon

- IDEA 提示支持 `composer require --dev phalcon/ide-stubs:3.2.4`

## swagger 文档

- `swagger.json` gen by `"zircote/swagger-php": "^2.0"`
- swagger-ui 下载 `npm install swagger-ui-dist`

### 文档生成

```sh
// 扫描当前文件夹下所有目录
~/AppData/Roaming/Composer/vendor/bin/swagger --output swagger-ui/docs
// 指定扫描一个或多个目录
 ~/AppData/Roaming/Composer/vendor/bin/swagger --output swagger-ui/docs [dirs ...]
```

### 文档查看

- 运行服务器

```
./bin/swagger-ui
```

- 访问： `127.0.0.1:8055`