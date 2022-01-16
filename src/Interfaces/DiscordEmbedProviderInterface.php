<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface DiscordEmbedProviderInterface extends ExportableInterface
{
    /**
     * DiscordEmbedProvider constructor.
     * @param string|null $name
     * @param string|null $url
     */
    public function __construct(
        ?string $name=null,
        ?string $url=null,
    );

    /**
     * @param string|null $name
     */
    public function setName(
        ?string $name,
    ): void;

    /**
     * @return string|null
     */
    public function getName(
    ): ?string;

    /**
     * @param string|null $url
     */
    public function setUrl(
        ?string $url,
    ): void;

    /**
     * @return string|null
     */
    public function getUrl(
    ): ?string;
}