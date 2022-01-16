<?php
namespace CarloNicora\Minimalism\Services\Discord\Messages;

use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedImageInterface;

class DiscordEmbedImage implements DiscordEmbedImageInterface
{
    /**
     * DiscordEmbedImage constructor.
     * @param string|null $url
     * @param string|null $proxy_url
     * @param int|null $height
     * @param int|null $width
     */
    public function __construct(
        private ?string $url=null,
        private ?string $proxy_url=null,
        private ?int $height=null,
        private ?int $width=null,
    )
    {
    }

    /**
     * @param string|null $url
     */
    public function setUrl(
        ?string $url,
    ): void
    {
        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getUrl(
    ): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $proxy_url
     */
    public function setProxyUrl(
        ?string $proxy_url,
    ): void
    {
        $this->proxy_url = $proxy_url;
    }

    /**
     * @return string|null
     */
    public function getProxyUrl(
    ): ?string
    {
        return $this->proxy_url;
    }

    /**
     * @param int|null $height
     */
    public function setHeight(
        ?int $height,
    ): void
    {
        $this->height = $height;
    }

    /**
     * @return int|null
     */
    public function getHeight(
    ): ?int
    {
        return $this->height;
    }

    /**
     * @param int|null $width
     */
    public function setWidth(
        ?int $width,
    ): void
    {
        $this->width = $width;
    }

    /**
     * @return int|null
     */
    public function getWidth(
    ): ?int
    {
        return $this->width;
    }

    /**
     * @return array
     */
    public function export(): array
    {
        $response = [];

        if ($this->url !== null){
            $response['url'] = $this->url;
        }

        if ($this->proxy_url !== null){
            $response['proxy_url'] = $this->proxy_url;
        }

        if ($this->height !== null){
            $response['height'] = $this->height;
        }

        if ($this->width !== null){
            $response['width'] = $this->width;
        }

        return $response;
    }
}