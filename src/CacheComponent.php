<?php

namespace tourze\Cache;

use BasePhpFastCache;
use phpFastCache;
use phpfastcache_driver;
use tourze\Base\Component;

class CacheComponent extends Component
{

    /**
     * @var BasePhpFastCache|phpfastcache_driver
     */
    public $cacheHandler;

    /**
     * @var string 驱动
     */
    public $storage = '';

    /**
     * @var string 缓存路径
     */
    public $path = '';

    /**
     * @var string 安全码
     */
    public $securityKey = '';

    /**
     * @var array 调用失败后的处理
     */
    public $fallback = [
        "example"  => "files",
        "memcache" => "files",
        "apc"      => "sqlite",
    ];

    /**
     * @var bool 是否开启htaccess保护
     */
    public $htaccess = true;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        $this->cacheHandler = new phpFastCache($this->storage, [
            'path'        => $this->path,
            'securityKey' => $this->securityKey,
            'fallback'    => $this->fallback,
            'htaccess'    => $this->htaccess,
        ]);
    }
}
