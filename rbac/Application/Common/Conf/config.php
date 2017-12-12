<?php
return array(
	//'配置项'=>'配置值'
        /* 应用设定 */

        /* 数据库设置 */
        'DB_TYPE'               =>  'mysql',     // 数据库类型
        'DB_HOST'               =>  '127.0.0.1', // 服务器地址
        'DB_NAME'               =>  'myproject',          // 数据库名
        'DB_USER'               =>  'root',      // 用户名
        'DB_PWD'                =>  '',          // 密码
        'DB_PORT'               =>  '3306',        // 端口
        'DB_PREFIX'             =>  '',    // 数据库表前缀
        'DB_PARAMS'          	=>  array(), // 数据库连接参数
        'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
        'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
        'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
        'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
        'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
        'DB_SLAVE_NO'           =>  '', // 指定从服务器序号


        /* 错误设置 */
        'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
        'ERROR_PAGE'            =>  '',	// 错误定向页面
        'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息
        'TRACE_MAX_RECORD'      =>  100,    // 每个级别的错误信息 最大记录数

        /* 日志设置 */
        'LOG_RECORD'            =>  false,   // 默认不记录日志
        'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
        'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',// 允许记录的日志级别
        'LOG_FILE_SIZE'         =>  2097152,	// 日志文件大小限制
        'LOG_EXCEPTION_RECORD'  =>  false,    // 是否记录异常信息日志

        /* SESSION设置 */
        'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session
        'SESSION_OPTIONS'       =>  array(), // session 配置数组 支持type name id path expire domain 等参数
        'SESSION_TYPE'          =>  '', // session hander类型 默认无需设置 除非扩展了session hander驱动
        'SESSION_PREFIX'        =>  '', // session 前缀
        //'VAR_SESSION_ID'      =>  'session_id',     //sessionID的提交变量







);