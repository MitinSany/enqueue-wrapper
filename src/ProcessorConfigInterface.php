<?php

namespace MitinSany\EnqueueWrapper;

interface ProcessorConfigInterface
{
    public function getQueueName(): string;
}
