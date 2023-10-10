<?php

namespace Yizuan\EsNotify\Interfaces;

interface NotifyInterface
{
    public function does(MessageInterface $message);
}
