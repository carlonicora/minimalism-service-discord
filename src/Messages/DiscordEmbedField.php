<?php
namespace CarloNicora\Minimalism\Services\Discord\Messages;

use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedFieldInterface;

class DiscordEmbedField implements DiscordEmbedFieldInterface
{
    /**
     * DiscordEmbedField constructor.
     * @param string $name
     * @param string $value
     * @param bool|null $inline
     */
    public function __construct(
        private string $name,
        private string $value,
        private ?bool $inline=null
    )
    {
    }

    /**
     * @param string $name
     */
    public function setName(
        string $name,
    ): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(
    ): string
    {
        return $this->name;
    }

    /**
     * @param string $value
     */
    public function setValue(
        string $value,
    ): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(
    ): string
    {
        return $this->value;
    }

    /**
     * @param bool|null $inline
     */
    public function setInline(
        ?bool $inline,
    ): void
    {
        $this->inline = $inline;
    }

    /**
     * @return bool|null
     */
    public function getInline(
    ): ?bool
    {
        return $this->inline;
    }

    /**
     * @return array
     */
    public function export(): array
    {
        $response = [
            'name' => $this->name,
            'value' => $this->value,
        ];

        if ($this->inline !== null){
            $response['inline'] = $this->inline;
        }

        return $response;
    }
}