<?php
/**
 * Created by PhpStorm.
 * User: rubin
 * Date: 2019-02-28
 * Time: 19:06
 */

namespace Yonyou\Uhy\AccessToken;


use Hanson\Foundation\AbstractAccessToken;

class AccessToken extends AbstractAccessToken
{

    /**
     * 会员体系id.
     * @var string 
     */
    protected $appId = '';

    /**
     * Secret.
     * @var string 
     */
    protected $secret = '';

    /**
     * AccessToken
     * @var string 
     */
    protected $accessToken = '';

    protected $tokenJsonKey = 'access_token';

    const DOMAIN = 'https://uhy.yonyoucloud.com';

    /**
     * AccessToken constructor.
     *
     * @param $appId
     * @param $secret
     * @param $accessToken
     */
    public function __construct($appId, $secret, $accessToken)
    {
        $this->appId = $appId;
        $this->secret = $secret;
        $this->accessToken = $accessToken;
    }

    /**
     * @param bool $forceRefresh
     *
     * @return string
     */
    public function getToken($forceRefresh = false)
    {
        return $this->token ?: parent::getToken($forceRefresh);
    }

    /**
     * @return mixed|string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @return mixed|string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Get token from remote server.
     *
     * @return mixed
     */
    public function getTokenFromServer()
    {
        return ['access_token' => $this->accessToken];
    }

    /**
     * Throw exception if token is invalid.
     *
     * @param $result
     *
     * @return mixed
     */
    public function checkTokenResponse($result)
    {
        // TODO: Implement checkTokenResponse() method.
    }

    /**
     * @param $params
     *
     * @return string
     */
    public function signature(&$params)
    {
        $str = json_encode($params);
        return hash_hmac("sha256", $str, $this->secret);
    }
    
}