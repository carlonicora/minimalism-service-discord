<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

use CarloNicora\Minimalism\Services\Discord\Enums\ApplicationCommandOptionType;

interface ApplicationCommandOptionInterface extends ExportableInterface
{
    /**
     * @param ApplicationCommandOptionType $type
     * @param string $name
     * @param string $description
     * @param bool $isRequired
     * @param ApplicationCommandChoiceInterface[] $choices
     */
    public function __construct(
        ApplicationCommandOptionType $type,
        string $name,
        string $description,
        bool $isRequired=false,
        array $choices=[],
    );

    /**
     * @return ApplicationCommandOptionType
     */
    public function getType(
    ): ApplicationCommandOptionType;

    /**
     * @param ApplicationCommandOptionInterface $option
     */
    public function addOption(
        ApplicationCommandOptionInterface $option,
    ): void;

    /**
     * @param ApplicationCommandChoiceInterface $choice
     */
    public function addChoice(
        ApplicationCommandChoiceInterface $choice,
    ): void;

    /**
     * @param ApplicationCommandChoiceInterface[] $choices
     */
    public function addChoices(
        array $choices,
    ): void;

    /**
     * @param int|float $minValue
     */
    public function setMinValue(
        int|float $minValue,
    ): void;

    /**
     * @param int|float $maxValue
     */
    public function setMaxValue(
        int|float $maxValue,
    ): void;
}