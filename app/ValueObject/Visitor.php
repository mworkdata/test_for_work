<?php

namespace App\ValueObject;

class Visitor
{
    /**
     * @var string
     */
    private $sIpAddress;
    private $sUserAgent;
    private $sPageUrl;

    public function __construct()
    {
        $this->sIpAddress = (string) $_SERVER['REMOTE_ADDR'];
        $this->sUserAgent = (string) $_SERVER['HTTP_USER_AGENT'];
        $this->sPageUrl = (string) $_SERVER['HTTP_REFERER'];
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->sIpAddress;
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->sUserAgent;
    }

    /**
     * @return string
     */
    public function getPageUrl(): string
    {
        return $this->sPageUrl;
    }
}