<?php
namespace CarloNicora\Minimalism\Services\Discord\ApplicationCommands;

use CarloNicora\Minimalism\Services\Discord\Enums\ApplicationCommandType;
use CarloNicora\Minimalism\Services\Discord\Interfaces\ApplicationCommandInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\ApplicationCommandOptionInterface;
use RuntimeException;

class ApplicationCommand implements ApplicationCommandInterface
{
    /** @var ApplicationCommandOptionInterface[]  */
    private array $options = [];

    /**
     * @param string $id
     * @param string $applicationId
     * @param string $name
     * @param string $description
     * @param ApplicationCommandType $type
     * @param string|null $guildId
     */
    public function __construct(
        private string $id,
        private string $applicationId,
        private string $name,
        private string $description,
        private ApplicationCommandType $type = ApplicationCommandType::CHAT_INPUT,
        private ?string $guildId = null,
    )
    {
    }

    /**
     * @param string $guildId
     */
    public function setGuildId(
        string $guildId,
    ): void
    {
        $this->guildId = $guildId;
    }

    /**
     * @param ApplicationCommandOptionInterface $option
     */
    public function addOption(
        ApplicationCommandOptionInterface $option,
    ): void
    {
        if (!empty($this->options) && $this->options[0]->getType()->isCommand() !== $option->getType()->isCommand()) {
            throw new RuntimeException('Malformed command');
        }

        $this->options[] = $option;
    }

    /**
     * @return array
     */
    public function export(
    ): array
    {
        $response = [
            'id' => $this->id,
            'type' => $this->type->value,
            'application_id' => $this->applicationId,
            'name' => $this->name,
            'description' => $this->description,
        ];

        if ($this->guildId !== null){
            $response['guild_id'] = $this->guildId;
        }

        if ($this->options !== []){
            $response['options'] = [];
            foreach ($this->options as $option){
                $response['options'][] = $option->export();
            }
        }

        return $response;
    }
}