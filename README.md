# Swoole hprose seed
这是一个使用 Swoole、phalcon、hprose 三种PHP扩展结合起来，用来开发高效Api的种子项目。

## 使用需求
你需要PHP5.6以上版本，并安装一下扩展。

    1. Hprose
    2. Swoole    
    3. Phalcon
    4. Xxtea (启用xxtea加密过滤功能需要此扩展)


## 安装说明
```
git clone https://github.com/Lao-liu/Swoole-hprose-seed.git hproseApi
cd hproseApi
composer install
```

## 示例说明

此项目中，包含了一个 Chat 的示例，如果在本地测试，需要一下步骤。

### 修改 WebSocket 监听地址

```php
// vim hproseApi/app/services/ChatPublishWebSocketService.php
$server = new WebSocketServer("ws://192.168.1.25:5555");
```

```javascript
// vim hproseApi/public/Chat.html
var client = hprose.Client.create('ws://192.168.1.25:5555/', ['getAllUsers', 'sendMessage', 'broadcast']);
```

### 运行示例

    1. 使用Apache或Nginx，将前端访问目录指向至 `hproseApi/public` 目录
    2. 在 hproseApi 目录下运行 php server.php 启动Swoole后端

### 项目结构

    app/config/         项目配置目录
    app/filters/        Hprose 过滤器
    app/middleware/     Hprose 中间件
    app/services/       Hprose 服务方法