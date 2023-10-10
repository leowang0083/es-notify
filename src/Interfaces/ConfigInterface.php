<?php

namespace Yizuan\EsNotify\Interfaces;

interface ConfigInterface
{
    public function getNotifyClass(): NotifyInterface;
}
