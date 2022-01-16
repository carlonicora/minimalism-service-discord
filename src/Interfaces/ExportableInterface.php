<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface ExportableInterface
{
    /**
     * @return array
     */
    public function export(): array;
}