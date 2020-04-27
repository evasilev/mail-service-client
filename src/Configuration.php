<?php

namespace Tsum\MailingClient;

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

    private $apiKey = '';
    private $sender = self::SENDER_DEFAULT;

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

}
