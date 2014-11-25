<?php

namespace EbayShop;

/**
 * Class ShopCredentials
 *
 * Keeps access data for eBay API
 *
 * @package EbayShop
 */
class Credentials
{
    /**
     * @var string
     */
	protected $appId;

    /**
     * @var string
     */
	protected $certId;

    /**
     * @var string
     */
	protected $deviceId;

    /**
     * @var boolean
     */
	protected $isSandbox;

    /**
     * Constructor
     *
     * @param string  $appId
     * @param string  $certId
     * @param string  $deviceId
     * @param boolean $isSandbox
     */
	public function __construct($appId = null, $certId = null, $deviceId = null, $isSandbox = null)
	{
        $this->setAppId(isset($appId) ? $appId : APP_ID);
        $this->setCertId(isset($certId) ? $certId : CERT_ID);
        $this->setDeviceId(isset($deviceId) ? $deviceId : DEVICE_ID);
        $this->setIsSandbox(isset($isSandbox) ? $isSandbox : IS_SANDBOX);
	}

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     *
     * @return Credentials
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCertId()
    {
        return $this->certId;
    }

    /**
     * @param string $certId
     *
     * @return Credentials
     */
    public function setCertId($certId)
    {
        $this->certId = $certId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     *
     * @return Credentials
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isSandbox()
    {
        return $this->isSandbox;
    }

    /**
     * @param boolean $isSandbox
     *
     * @return Credentials
     */
    public function setIsSandbox($isSandbox)
    {
        $this->isSandbox = $isSandbox;
        return $this;
    }
}