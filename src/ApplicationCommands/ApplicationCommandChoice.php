<?php
namespace CarloNicora\Minimalism\Services\Discord\ApplicationCommands;

use CarloNicora\Minimalism\Services\Discord\Interfaces\ApplicationCommandChoiceInterface;

class ApplicationCommandChoice implements ApplicationCommandChoiceInterface
{
    /**
     * @param string $name
     * @param float|int|string $value
     */
    public function __construct(
        private string $name,
        private float|int|string $value,
    )
    {
    }

    /**
     * @return array
     */
    public function export(
    ): array
    {
        return [
            'name' => $this->name,
            'value' => $this->value,
        ];
    }
}