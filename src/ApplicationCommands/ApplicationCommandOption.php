<?php
namespace CarloNicora\Minimalism\Services\Discord\ApplicationCommands;

use CarloNicora\Minimalism\Services\Discord\Enums\ApplicationCommandOptionType;
use CarloNicora\Minimalism\Services\Discord\Interfaces\ApplicationCommandChoiceInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\ApplicationCommandOptionInterface;
use RuntimeException;

class ApplicationCommandOption implements ApplicationCommandOptionInterface
{
    /** @var ApplicationCommandOptionInterface[] */
    private array $options=[];

    /** @var int|float|null  */
    private int|float|null $minValue=null;

    /** @var int|float|null  */
    private int|float|null $maxValue=null;

    /**
     * @param ApplicationCommandOptionType $type
     * @param string $name
     * @param string $description
     * @param bool $isRequired
     * @param ApplicationCommandChoiceInterface[] $choices
     */
    public function __construct(
        private ApplicationCommandOptionType $type,
        private string $name,
        private string $description,
        private bool $isRequired = false,
        private array $choices=[],
    )
    {
    }

    /**
     * @return ApplicationCommandOptionType
     */
    public function getType(
    ): ApplicationCommandOptionType
    {
        return $this->type;
    }

    /**
     * @param ApplicationCommandOptionInterface $option
     */
    public function addOption(
        ApplicationCommandOptionInterface $option,
    ): void
    {
        if (
            (!$this->type->isCommand())
            ||
            ($this->type === ApplicationCommandOptionType::SUB_COMMAND_GROUP && $option->getType() !== ApplicationCommandOptionType::SUB_COMMAND)
        ) {
            throw new RuntimeException('Malformed command');
        }

        $this->options[] = $option;
    }

    /**
     * @param ApplicationCommandChoiceInterface $choice
     */
    public function addChoice(
        ApplicationCommandChoiceInterface $choice,
    ): void
    {
        $this->choices[] = $choice;

        if (count($this->choices) > 25){
            throw new RuntimeException('Malformed command');
        }
    }

    /**
     * @param ApplicationCommandChoiceInterface[] $choices
     */
    public function addChoices(
        array $choices,
    ): void
    {
        $this->choices = array_merge($this->choices, $choices);

        if (count($this->choices) > 25){
            throw new RuntimeException('Malformed command');
        }
    }

    /**
     * @param int|float $minValue
     */
    public function setMinValue(
        int|float $minValue,
    ): void
    {
        $this->minValue = $minValue;
    }

    /**
     * @param int|float $maxValue
     */
    public function setMaxValue(
        int|float $maxValue,
    ): void
    {
        $this->maxValue = $maxValue;
    }

    /**
     * @return array
     */
    public function export(): array
    {
        $response = [
            'type' => $this->type->value,
            'name' => $this->name,
            'description' => $this->description,
            'required' => $this->isRequired,
        ];

        if ($this->type === ApplicationCommandOptionType::INTEGER){
            if ($this->minValue !== null){
                $response['min_value'] = $this->minValue;
            }
            if ($this->maxValue !== null){
                $response['max_value'] = $this->maxValue;
            }
        }

        if ($this->options !== []){
            $response['options'] = [];
            foreach ($this->options as $option){
                $response['options'][] = $option->export();
            }
        }

        if ($this->choices !== []){
            $response['choices'] = [];
            foreach ($this->choices as $choice){
                $response['choices'][] = $choice->export();
            }
        }

        return $response;
    }
}