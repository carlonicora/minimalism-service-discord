<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

use CarloNicora\Minimalism\Services\Discord\Enums\ApplicationCommandType;

interface ApplicationCommandInterface extends ExportableInterface
{
    /**
     * @param string $id
     * @param string $applicationId
     * @param string $name
     * @param string $description
     * @param ApplicationCommandType $type
     * @param string|null $guildId
     */
    public function __construct(
        string $id,
        string $applicationId,
        string $name,
        string $description,
        ApplicationCommandType $type=ApplicationCommandType::CHAT_INPUT,
        ?string $guildId=null,
    );

    /**
     * @param string $guildId
     */
    public function setGuildId(string $guildId): void;

    /**
     * @param ApplicationCommandOptionInterface $option
     */
    public function addOption(ApplicationCommandOptionInterface $option): void;
}