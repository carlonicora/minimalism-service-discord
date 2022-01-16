<?php
namespace CarloNicora\Minimalism\Services\Discord\Messages;

use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedFooterInterface;

class DiscordEmbedFooter implements DiscordEmbedFooterInterface
{
    /**
     * DiscordEmbedFooter constructor.
     * @param string $text
     * @param string|null $icon_url
     * @param string|null $proxy_icon_url
     */
    public function __construct(
        private string $text,
        private ?string $icon_url=null,
        private ?string $proxy_icon_url=null,
    )
    {
    }

    /**
     * @param string $text
     */
    public function setText(
        string $text
    ): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(
    ): string
    {
        return $this->text;
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
        $response = [
            'text' => $this->text
        ];

        if ($this->icon_url !== null){
            $response['icon_url'] = $this->icon_url;
        }

        if ($this->proxy_icon_url !== null){
            $response['proxy_icon_url'] = $this->proxy_icon_url;
        }

        return $response;
    }
}