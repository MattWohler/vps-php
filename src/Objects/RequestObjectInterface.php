<?php

namespace VPS\Objects;

interface RequestObjectInterface
{
    public function getUrl();

    public function getMethod();
}