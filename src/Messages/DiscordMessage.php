<?php
namespace CarloNicora\Minimalism\Services\Discord\Messages;

use CarloNicora\Minimalism\Services\Discord\Enums\DiscordFlag;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordInteractionApplicationCommandCallbackDataInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordInteractionResponseInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordMessageInterface;

class DiscordMessage implements DiscordInteractionResponseInterface, DiscordMessageInterface, DiscordInteractionApplicationCommandCallbackDataInterface
{
    /** @var int  */
    private int $type=DiscordInteractionResponseInterface::TYPE_CHANNEL_MESSAGE_WITH_SOURCE;

    /** @var bool|null  */
    private ?bool $tts=null;

    /** @var string|null  */
    private ?string $content=null;

    /** @var DiscordEmbedInterface[]|null  */
    private ?array $embeds=null;

    /** @var int|null  */
    private ?int $flags=null;

    /**
     * @param int $type
     */
    public function setType(
        int $type,
    ): void
    {
        $this->type = $type;
    }

    /**
     * @return bool|null
     */
    public function getTts(): ?bool
    {
        return $this->tts;
    }

    /**
     * @param bool|null $tts
     */
    public function setTts(
        ?bool $tts,
    ): void
    {
        $this->tts = $tts;
    }

    /**
     * @return string|null
     */
    public function getContent(
    ): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     */
    public function setContent(
        ?string $content,
    ): void
    {
        $this->content = $content;
    }

    /**
     * @return DiscordEmbedInterface[]|null
     */
    public function getEmbeds(): ?array
    {
        return $this->embeds;
    }

    /**
     * @param DiscordEmbedInterface[]|null $embeds
     */
    public function setEmbeds(
        ?array $embeds,
    ): void
    {
        $this->embeds = $embeds;
    }

    /**
     * @param DiscordEmbedInterface $embed
     */
    public function addEmbed(
        DiscordEmbedInterface $embed
    ): void
    {
        if ($this->embeds === null){
            $this->embeds = [];
        }

        $this->embeds[] = $embed;
    }

    /**
     * @param DiscordFlag $flag
     */
    public function addFlag(
        DiscordFlag $flag,
    ): void
    {
        $this->flags += $flag->value;
    }

    /**
     * @return array
     */
    public function export(): array
    {
        $response = [];
        $response['type'] = $this->type;

        $interactionApplicationCommandCallbackData = [];

        $interactionApplicationCommandCallbackData['tts'] = $this->tts ?? false;

        if ($this->content !== null){
            $interactionApplicationCommandCallbackData['content'] = $this->content;
        }

        if ($this->flags){
            $interactionApplicationCommandCallbackData['flags'] = $this->flags;
        }

        if ($this->embeds !== null){
            $embeds = [];

            /** @var DiscordEmbedInterface $embed */
            foreach ($this->embeds as $embed) {
                $embeds[] = $embed->export();
            }

            $interactionApplicationCommandCallbackData['embeds'] = $embeds;
        }

        $response['data'] = $interactionApplicationCommandCallbackData;

        return $response;
    }
}