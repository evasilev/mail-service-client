<?php

namespace Tsum\MailingClient;

class Email
{

    private $subject = '';
    private $textBody = '';
    private $htmlBody = '';
    private $to = [];
    private $cc = [];
    private $bcc = [];

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getTextBody(): string
    {
        return $this->textBody;
    }

    /**
     * @param string $textBody
     */
    public function setTextBody(string $textBody): void
    {
        $this->textBody = $textBody;
    }

    /**
     * @return string
     */
    public function getHtmlBody(): string
    {
        return $this->htmlBody;
    }

    /**
     * @param string $htmlBody
     */
    public function setHtmlBody(string $htmlBody): void
    {
        $this->htmlBody = $htmlBody;
    }

    /**
     * @return array
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     * @param $address
     * @param string $name
     */
    public function addToAddress($address, $name = ''): void
    {
        $this->to[] = [
            'address' => $address,
            'name' => $name,
        ];
    }

    /**
     * @return array
     */
    public function getCc(): array
    {
        return $this->cc;
    }

    /**
     * @param $address
     * @param string $name
     */
    public function addCcAddress($address, $name = ''): void
    {
        $this->cc[] = [
            'address' => $address,
            'name' => $name,
        ];
    }

    /**
     * @return array
     */
    public function getBcc(): array
    {
        return $this->bcc;
    }

    /**
     * @param $address
     * @param string $name
     */
    public function addBccAddress($address, $name = ''): void
    {
        $this->bcc[] = [
            'address' => $address,
            'name' => $name,
        ];
    }

}
