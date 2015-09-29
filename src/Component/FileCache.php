<?php

namespace tourze\Cache\Component;

use tourze\Base\Component\CacheInterface;
use tourze\Cache\phpFastCacheComponent;

/**
 * 文件缓存
 *
 * @package tourze\Cache\Component
 */
class FileCache extends phpFastCacheComponent implements CacheInterface
{

    /**
     * {@inheritdoc}
     */
    public $storage = 'files';

    /**
     * 读取指定key的缓存
     *
     * @param string $name
     * @param mixed  $default
     * @return mixed
     */
    public function get($name, $default = null)
    {
        $result = $this->cacheHandler->get($name);
        return $result === null ? $default : $result;
    }

    /**
     * 保存缓存
     *
     * @param string $name
     * @param mixed  $value
     * @param int    $expired 过期秒数
     * @return bool
     */
    public function set($name, $value, $expired = null)
    {
        $this->cacheHandler->set($name, $value, $expired);
    }

    /**
     * 删除缓存
     *
     * @param string $name
     * @return bool
     */
    public function remove($name)
    {
        $this->cacheHandler->delete($name);
    }
}
