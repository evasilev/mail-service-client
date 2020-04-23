<?php

namespace Tsum\MailingClient;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class MailingClient
{

    private const MAILING_SERVICE_HOST = 'https://mailing.blv.ru';

    /** @var Configuration $configuration */
    private $configuration;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @param Email $email
     * @throws MailingServiceException
     */
    public function send(Email $email)
    {
        $client = new Client([
            'base_uri' => self::MAILING_SERVICE_HOST,
            'timeout'  => 2.0,
        ]);
        $json = (new JsonRequestBuilder())->buildFromEmail($email);
        $json['fromAddress'] = [$this->configuration->getSender()];
        $response = $client->post('/email', [
            RequestOptions::HEADERS => [
                'X-ApiKey' => $this->configuration->getApiKey(),
            ],
            RequestOptions::JSON => $json,
        ]);
        $responseText = (string)$response->getBody();
        $data = json_decode($responseText, true);
        if (isset($data['error'])) {
            $message = $data['error']['developerMsg'] ?? $data['error']['userMsg'] ?? $data['error']['message'];
            throw new MailingServiceException($message, $data['error']['code']);
        }
    }

}