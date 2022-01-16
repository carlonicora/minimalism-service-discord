<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface DiscordEmbedImageInterface extends ExportableInterface
{
    /**
     * DiscordEmbedImage constructor.
     * @param string|null $url
     * @param string|null $proxy_url
     * @param int|null $height
     * @param int|null $width
     */
    public function __construct(
        ?string $url=null,
        ?string $proxy_url=null,
        ?int $height=null,
        ?int $width=null,
    );

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
     * @param string|null $proxy_url
     */
    public function setProxyUrl(
        ?string $proxy_url,
    ): void;

    /**
     * @return string|null
     */
    public function getProxyUrl(
    ): ?string;

    /**
     * @param int|null $height
     */
    public function setHeight(
        ?int $height,
    ): void;

    /**
     * @return int|null
     */
    public function getHeight(
    ): ?int;

    /**
     * @param int|null $width
     */
    public function setWidth(
        ?int $width,
    ): void;

    /**
     * @return int|null
     */
    public function getWidth(
    ): ?int;
}