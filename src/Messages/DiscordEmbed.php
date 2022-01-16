<?php
namespace CarloNicora\Minimalism\Services\Discord\Messages;

use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedAuthorInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedFieldInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedFooterInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedImageInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedProviderInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedThumbnailInterface;
use CarloNicora\Minimalism\Services\Discord\Interfaces\DiscordEmbedVideoInterface;

class DiscordEmbed implements DiscordEmbedInterface
{
    /**
     * DiscordEmbed constructor.
     * @param string|null $title
     * @param string|null $type
     * @param string|null $description
     * @param string|null $url
     * @param string|null $timestamp
     * @param int|null $color
     * @param DiscordEmbedFooterInterface|null $footer
     * @param DiscordEmbedImageInterface|null $image
     * @param DiscordEmbedThumbnailInterface|null $thumbnail
     * @param DiscordEmbedVideoInterface|null $video
     * @param DiscordEmbedProviderInterface|null $provider
     * @param DiscordEmbedAuthorInterface|null $author
     * @param DiscordEmbedFieldInterface[]|null $fields
     */
    public function __construct(
        private ?string $title=null,
        private ?string $type=DiscordEmbedInterface::TYPE_RICH,
        private ?string $description=null,
        private ?string $url=null,
        private ?string $timestamp=null,
        private ?int $color=null,
        private ?DiscordEmbedFooterInterface $footer=null,
        private ?DiscordEmbedImageInterface $image=null,
        private ?DiscordEmbedThumbnailInterface $thumbnail=null,
        private ?DiscordEmbedVideoInterface $video=null,
        private ?DiscordEmbedProviderInterface $provider=null,
        private ?DiscordEmbedAuthorInterface $author=null,
        private ?array $fields=null,
    )
    {
    }

    /**
     * @param string|null $title
     */
    public function setTitle(
        ?string $title,
    ): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getTitle(
    ): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $type
     */
    public function setType(
        ?string $type,
    ): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getType(
    ): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(
        ?string $description,
    ): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getDescription(
    ): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(
        ?string $url,
    ): void
    {
        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getUrl(
    ): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $timestamp
     */
    public function setTimestamp(
        ?string $timestamp,
    ): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return string|null
     */
    public function getTimestamp(
    ): ?string
    {
        return $this->timestamp;
    }

    /**
     * @param int|null $color
     */
    public function setColor(
        ?int $color,
    ): void
    {
        $this->color = $color;
    }

    /**
     * @return int|null
     */
    public function getColor(
    ): ?int
    {
        return $this->color;
    }

    /**
     * @param DiscordEmbedFooterInterface|null $footer
     */
    public function setFooter(
        ?DiscordEmbedFooterInterface $footer,
    ): void
    {
        $this->footer = $footer;
    }

    /**
     * @return DiscordEmbedFooterInterface|null
     */
    public function getFooter(
    ): ?DiscordEmbedFooterInterface
    {
        return $this->footer;
    }

    /**
     * @param DiscordEmbedImageInterface|null $image
     */
    public function setImage(
        ?DiscordEmbedImageInterface $image,
    ): void
    {
        $this->image = $image;
    }

    /**
     * @return DiscordEmbedImageInterface|null
     */
    public function getImage(
    ): ?DiscordEmbedImageInterface
    {
        return $this->image;
    }

    /**
     * @param DiscordEmbedThumbnailInterface|null $thumbnail
     */
    public function setThumbnail(
        ?DiscordEmbedThumbnailInterface $thumbnail
    ): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return DiscordEmbedThumbnailInterface|null
     */
    public function getThumbnail(
    ): ?DiscordEmbedThumbnailInterface
    {
        return $this->thumbnail;
    }

    /**
     * @param DiscordEmbedVideoInterface|null $video
     */
    public function setVideo(
        ?DiscordEmbedVideoInterface $video
    ): void
    {
        $this->video = $video;
    }

    /**
     * @return DiscordEmbedVideoInterface|null
     */
    public function getVideo(
    ): ?DiscordEmbedVideoInterface
    {
        return $this->video;
    }

    /**
     * @param DiscordEmbedProviderInterface|null $provider
     */
    public function setProvider(
        ?DiscordEmbedProviderInterface $provider,
    ): void
    {
        $this->provider = $provider;
    }

    /**
     * @return DiscordEmbedProviderInterface|null
     */
    public function getProvider(
    ): ?DiscordEmbedProviderInterface
    {
        return $this->provider;
    }

    /**
     * @param DiscordEmbedAuthorInterface|null $author
     */
    public function setAuthor(
        ?DiscordEmbedAuthorInterface $author,
    ): void
    {
        $this->author = $author;
    }

    /**
     * @return DiscordEmbedAuthorInterface|null
     */
    public function getAuthor(
    ): ?DiscordEmbedAuthorInterface
    {
        return $this->author;
    }

    /**
     * @param DiscordEmbedFieldInterface[]|null $fields
     */
    public function setFields(
        ?array $fields
    ): void
    {
        $this->fields = $fields;
    }

    /**
     * @return DiscordEmbedFieldInterface[]|null
     */
    public function getFields(
    ): ?array
    {
        return $this->fields;
    }

    /**
     * @param DiscordEmbedFieldInterface $field
     */
    public function addField(
        DiscordEmbedFieldInterface $field,
    ): void
    {
        if ($this->fields === null){
            $this->fields = [];
        }

        $this->fields[] = $field;
    }

    public function export(): array
    {
        $response = [];

        if ($this->title !== null){
            $response['title'] = $this->title;
        }

        if ($this->type !== null){
            $response['type'] = $this->type;
        }

        if ($this->description !== null){
            $response['description'] = $this->description;
        }

        if ($this->url !== null){
            $response['url'] = $this->url;
        }

        if ($this->timestamp !== null){
            $response['timestamp'] = $this->timestamp;
        }

        if ($this->color !== null){
            $response['color'] = $this->color;
        }

        if ($this->footer !== null){
            $response['footer'] = $this->footer->export();
        }

        if ($this->image !== null){
            $response['image'] = $this->image->export();
        }

        if ($this->thumbnail !== null){
            $response['thumbnail'] = $this->thumbnail->export();
        }

        if ($this->video !== null){
            $response['video'] = $this->video->export();
        }

        if ($this->provider !== null){
            $response['provider'] = $this->provider->export();
        }

        if ($this->author !== null){
            $response['author'] = $this->author->export();
        }

        if ($this->fields !== null){
            $fields = [];

            /** @var DiscordEmbedFieldInterface $field */
            foreach ($this->fields as $field){
                $fields[] = $field->export();
            }

            $response['fields'] = $fields;
        }

        return $response;
    }
}