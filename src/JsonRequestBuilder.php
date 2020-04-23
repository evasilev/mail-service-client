<?php

namespace Tsum\MailingClient;

class JsonRequestBuilder
{

    /**
     * @param Email $email
     * @return array
     */
    public function buildFromEmail(Email $email)
    {
        return [
            'subject' => $email->getSubject(),
            'textBody' => $email->getTextBody(),
            'htmlBody' => $email->getHtmlBody(),
            'toAddress' => $email->getTo(),
            'ccAddress' => $email->getCc(),
            'bccAddress' => $email->getBcc(),
        ];
    }

}
