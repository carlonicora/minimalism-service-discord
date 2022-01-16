<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface DiscordInteractionApplicationCommandCallbackDataInterface
{
    /**
     * @return bool|null
     */
    public function getTts(
    ): ?bool;

    /**
     * @param bool|null $tts
     */
    public function setTts(
        ?bool $tts,
    ): void;

    /**
     * @return string|null
     */
    public function getContent(
    ): ?string;

    /**
     * @param string|null $content
     */
    public function setContent(
        ?string $content,
    ): void;

    /**
     * @return DiscordEmbedInterface[]|null
     */
    public function getEmbeds(
    ): ?array;

    /**
     * @param DiscordEmbedInterface[]|null $embeds
     */
    public function setEmbeds(
        ?array $embeds,
    ): void;

    /**
     * @param DiscordEmbedInterface $embed
     */
    public function addEmbed(
        DiscordEmbedInterface $embed
    ): void;
}