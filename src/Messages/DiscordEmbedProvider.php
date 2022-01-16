<?php
namespace CarloNicora\Minimalism\Services\Discord\Messages;

use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedProviderInterface;

class DiscordEmbedProvider implements DiscordEmbedProviderInterface
{
    /**
     * DiscordEmbedProvider constructor.
     * @param string|null $name
     * @param string|null $url
     */
    public function __construct(
        private ?string $name=null,
        private ?string $url=null,
    )
    {
    }

    /**
     * @param string|null $name
     */
    public function setName(
        ?string $name,
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

        return $response;
    }
}