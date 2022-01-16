<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface DiscordEmbedFieldInterface extends ExportableInterface
{
    /**
     * DiscordEmbedField constructor.
     * @param string $name
     * @param string $value
     * @param bool|null $inline
     */
    public function __construct(
        string $name,
        string $value,
        ?bool $inline=null
    );

    /**
     * @param string $name
     */
    public function setName(
        string $name,
    ): void;

    /**
     * @return string
     */
    public function getName(
    ): string;

    /**
     * @param string $value
     */
    public function setValue(
        string $value,
    ): void;

    /**
     * @return string
     */
    public function getValue(
    ): string;

    /**
     * @param bool|null $inline
     */
    public function setInline(
        ?bool $inline,
    ): void;

    /**
     * @return bool|null
     */
    public function getInline(
    ): ?bool;
}