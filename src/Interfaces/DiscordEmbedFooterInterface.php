<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface DiscordEmbedFooterInterface extends ExportableInterface
{
    /**
     * DiscordEmbedFooter constructor.
     * @param string $text
     * @param string|null $icon_url
     * @param string|null $proxy_icon_url
     */
    public function __construct(
        string $text,
        ?string $icon_url=null,
        ?string $proxy_icon_url=null,
    );

    /**
     * @param string $text
     */
    public function setText(
        string $text
    ): void;

    /**
     * @return string
     */
    public function getText(
    ): string;

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