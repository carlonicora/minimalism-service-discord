<?php
namespace CarloNicora\Minimalism\Services\Discord\Abstracts;

use CarloNicora\JsonApi\Document;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\ExportableInterface;
use CarloNicora\Minimalism\Services\Discord\Messages\DiscordEmbed;
use CarloNicora\Minimalism\Services\Discord\Messages\DiscordEmbedFooter;
use CarloNicora\Minimalism\Services\Discord\Messages\DiscordEmbedImage;
use CarloNicora\Minimalism\Services\Discord\Messages\DiscordMessage;
use Exception;

abstract class AbstractDiscordView implements ExportableInterface
{
    /**
     * @param Document $document
     */
    public function __construct(
        protected Document $document,
    )
    {
    }

    /**
     * @return array
     * @throws Exception
     */
    final public function export(
    ): array
    {
        if ($this->document->resources[0]->type === 'error'){
            $response = new DiscordMessage();

            $response->addEmbed(
                new DiscordEmbed(
                    title: 'Error',
                    description: $this->document->resources[0]->attributes->get('description'),
                    color: DiscordEmbedInterface::COLOUR_RED,
                    footer: new DiscordEmbedFooter('Error'),
                    image: $this->document->resources[0]->attributes->has('image') ? new DiscordEmbedImage($this->document->resources[0]->attributes->get('image')) : null,
                )
            );

            return $response->export();
        }

        return $this->exportView();
    }

    /**
     * @return array
     */
    abstract public function exportView():array;
}