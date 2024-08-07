<?php

namespace App\Classes;

use Illuminate\Support\Arr;

class Webflow
{
    protected ?array $config;

    public function __construct(
        protected string $routeName
    ){
        $this->config = Arr::get(
            array: config("webflow.routes"),
            key: $routeName,
            default: []
        );
    }

    public static function make(string $routeName): static
    {
        return new static($routeName);
    }

    /**
     * Resolves the data-wf-page attribute that should be
     * used given a certain view
     */
    public function page(): ?string
    {
        return Arr::get($this->config, "data-wf-page");
    }

    /**
     * Resolves the data-wf-site attribute that should be
     * used given a certain view
     */
    public function site(): ?string
    {
        return Arr::get($this->config, "data-wf-site");
    }

    /**
     * Determines if the given instance has webflow configuration
     * based on the current given route.
     */
    public function hasConfig(): bool
    {
        return ! empty($this->config);
    }
}

