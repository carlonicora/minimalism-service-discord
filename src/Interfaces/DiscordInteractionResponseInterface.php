<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface DiscordInteractionResponseInterface extends ExportableInterface
{
    public const TYPE_PONG=1;
    public const TYPE_ACKNOWLEDGE=2;
    public const TYPE_CHANNEL_MESSAGE=3;
    public const TYPE_CHANNEL_MESSAGE_WITH_SOURCE=4;
    public const TYPE_DEFERRED_CHANNEL_MESSAGE_WITH_SOURCE=5;

    /**
     * @param int $type
     */
    public function setType(
        int $type,
    ): void;
}