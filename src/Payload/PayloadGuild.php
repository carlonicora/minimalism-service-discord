<?php
namespace CarloNicora\Minimalism\Services\Discord\Payload;

class PayloadGuild
{
    /** @var string  */
    private string $id;

    /**
     * @param array $payload
     */
    public function __construct(
        array $payload
    )
    {
        $this->id = $payload['guild_id'];
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}