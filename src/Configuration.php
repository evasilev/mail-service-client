<?php

namespace Tsum\MailingClient;

use Exception;

class Configuration
{

    public const SENDER_BLV = [
        'name' => 'Mercury customer service',
        'address' => 'no-reply@mailing.blv.ru',
    ];
    public const SENDER_WBM = [
        'name' => 'Wedding By Mercury',
        'address' => 'info@weddingbymercury.ru',
    ];
    public const SENDER_DEFAULT = self::SENDER_BLV;
    public const DEFAULT_TIMEOUT = 5.0;

    private $apiKey = '';
    private $sender = self::SENDER_DEFAULT;
    private $timeout = self::DEFAULT_TIMEOUT;

    /**
     * @param mixed $apiKey
     */
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return mixed
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return array
     */
    public function getSender(): array
    {
        return $this->sender;
    }

    /**
     * @param array $sender
     */
    public function setSender(array $sender): void
    {
        $this->sender = $sender;
    }

    /**
     * @return float
     */
    public function getTimeout(): float
    {
        return $this->timeout;
    }

    /**
     * @param float $timeout
     * @throws Exception
     */
    public function setTimeout(float $timeout): void
    {
        if ($timeout < 0) {
            throw new Exception('Timeout can not be less then 0');
        }
        $this->timeout = $timeout;
    }

}
