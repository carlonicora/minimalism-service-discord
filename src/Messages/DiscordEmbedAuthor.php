<?php
namespace CarloNicora\Minimalism\Services\Discord\Messages;

use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedAuthorInterface;

class DiscordEmbedAuthor implements DiscordEmbedAuthorInterface
{
    /**
     * DiscordEmbedAuthor constructor.
     * @param string|null $name
     * @param string|null $url
     * @param string|null $icon_url
     * @param string|null $proxy_icon_url
     */
    public function __construct(
        private ?string $name=null,
        private ?string $url=null,
        private ?string $icon_url=null,
        private ?string $proxy_icon_url=null
    )
    {
    }

    /**
     * @param string|null $name
     */
    public function setName(
        ?string $name
    ): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getName(
    ): ?string
    {
        return $this->name;
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
     * @param string|null $icon_url
     */
    public function setIconUrl(
        ?string $icon_url,
    ): void
    {
        $this->icon_url = $icon_url;
    }

    /**
     * @return string|null
     */
    public function getIconUrl(
    ): ?string
    {
        return $this->icon_url;
    }

    /**
     * @param string|null $proxy_icon_url
     */
    public function setProxyIconUrl(
        ?string $proxy_icon_url
    ): void
    {
        $this->proxy_icon_url = $proxy_icon_url;
    }

    /**
     * @return string|null
     */
    public function getProxyIconUrl(
    ): ?string
    {
        return $this->proxy_icon_url;
    }

    /**
     * @return array
     */
    public function export(): array
    {
        $response = [];

        if ($this->name !== null){
            $response['name'] = $this->name;
        }

        if ($this->url !== null){
            $response['url'] = $this->url;
        }

        if ($this->icon_url !== null){
            $response['icon_url'] = $this->icon_url;
        }

        if ($this->proxy_icon_url !== null){
            $response['proxy_icon_url'] = $this->proxy_icon_url;
        }

        return $response;
    }
}