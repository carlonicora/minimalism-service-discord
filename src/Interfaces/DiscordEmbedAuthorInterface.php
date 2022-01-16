<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface DiscordEmbedAuthorInterface extends ExportableInterface
{
    /**
     * DiscordEmbedAuthor constructor.
     * @param string|null $name
     * @param string|null $url
     * @param string|null $icon_url
     * @param string|null $proxy_icon_url
     */
    public function __construct(
        ?string $name=null,
        ?string $url=null,
        ?string $icon_url=null,
        ?string $proxy_icon_url=null
    );

    /**
     * @param string|null $name
     */
    public function setName(
        ?string $name
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

    /**
     * @param string|null $icon_url
     */
    public function setIconUrl(
        ?string $icon_url,
    ): void;

    /**
     * @return string|null
     */
    public function getIconUrl(
    ): ?string;

    /**
     * @param string|null $proxy_icon_url
     */
    public function setProxyIconUrl(
        ?string $proxy_icon_url
    ): void;

    /**
     * @return string|null
     */
    public function getProxyIconUrl(
    ): ?string;
}