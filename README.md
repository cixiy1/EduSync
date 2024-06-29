# 学校多媒体设备互联系统计划书

## 目的

目前学校主流多媒体设备（如老式`Windows`台式机、希沃白板等）配套的第一方软件生态，主要还是针对以本机为中心进行教学资源管理与其他课堂互动操作。而本系统通过中心化的调配管理可以更好地让学校信息人员进行多媒体设备的机况评估与临时介入处理。

## 功能

### 一、实时的设备运行状况检测

通过让终端给中心服务器发送自身的使用信息，并在服务器上处理和在后台给管理员进行展示。

### 二、服务器介入远程处理终端

为了能更好地优化多媒体设备，可以使用服务端后台进行一些远程指令，比如远程停止进程等。

### 三、教育资源多端共享

将一些老师常用的学科课件及讲义上传至服务器后台，一键无物理介质下载所需课件。

## 特色

### 终端与服务器互联过程

>服务器提供一个口令-->让终端发送这个口令-->服务器识别来源链接-->创建`Token`-->终端与服务器凭证通信

### 后台基本逻辑

>展示各设备运行状况
>>控制各设备运行指令操作

>资源上传平台

>用户权限管理平台（可以让各个老师检查各班多媒体运行状况和定义自己的教育资源上传平台）