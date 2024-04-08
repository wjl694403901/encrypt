<?php
/**
 * @desc 加密工具类
 * @author Wjl
 * @date 2024/04/07 22:27
 */
declare(strict_types=1);

namespace Wjl\Encrypt;

class Encryption
{
    /** 加密模式*/
    public const AES_128_ECB = 'AES-128-ECB';
    public const AES_128_CBC = 'AES-128-CBC';
    public const AES_256_ECB = 'AES-256-ECB';
    public const AES_256_CBC = 'AES-256-CBC';

    /**
     * @desc 加密
     * @param string $data 加密的数据
     * @param string $key 密钥，必须是16、24或32个字符长度
     * @param string $algo 加密方式
     * @param string $iv 初始向量（IV）
     * @return string
     * @author Wjl
     */
    public static function encrypt(string $data, string $key, string $algo = self::AES_128_ECB, string $iv = ''): string
    {
        return base64_encode(openssl_encrypt($data, $algo, $key, OPENSSL_RAW_DATA, $iv));
    }

    /**
     * @desc 解密
     * @param string $data
     * @param string $key 密钥，必须是16、24或32个字符长度
     * @param string $algo 加密方式
     * @param string $iv 初始向量（IV）
     * @return false|string
     * @author Wjl
     */
    public static function decrypt(string $data, string $key, string $algo = self::AES_128_ECB, string $iv = '')
    {
        return openssl_decrypt(base64_decode($data), $algo, $key, OPENSSL_RAW_DATA, $iv);
    }

}
