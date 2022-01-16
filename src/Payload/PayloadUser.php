<?php
namespace CarloNicora\Minimalism\Services\Discord\Payload;

class PayloadUser
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
        $this->id = $payload['member']['user']['id'];
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}