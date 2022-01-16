<?php
namespace CarloNicora\Minimalism\Services\Discord\Interfaces;

interface DiscordEmbedInterface extends ExportableInterface
{
    public const TYPE_RICH='rich';
    public const TYPE_IMAGE='image';
    public const TYPE_VIDEO='video';
    public const TYPE_GIFV='gifv';
    public const TYPE_ARTICLE='article';
    public const TYPE_LINK='link';

    public const COLOUR_BLUE=0x0000ff;
    public const COLOUR_GREEN=0x00ff00;
    public const COLOUR_RED=0xff0000;


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
        ?string $title=null,
        ?string $type=DiscordEmbedInterface::TYPE_RICH,
        ?string $description=null,
        ?string $url=null,
        ?string $timestamp=null,
        ?int $color=null,
        ?DiscordEmbedFooterInterface $footer=null,
        ?DiscordEmbedImageInterface $image=null,
        ?DiscordEmbedThumbnailInterface $thumbnail=null,
        ?DiscordEmbedVideoInterface $video=null,
        ?DiscordEmbedProviderInterface $provider=null,
        ?DiscordEmbedAuthorInterface $author=null,
        ?array $fields=null,
    );

    /**
     * @param string|null $title
     */
    public function setTitle(
        ?string $title,
    ): void;

    /**
     * @return string|null
     */
    public function getTitle(
    ): ?string;

    /**
     * @param string|null $type
     */
    public function setType(
        ?string $type,
    ): void;

    /**
     * @return string|null
     */
    public function getType(
    ): ?string;

    /**
     * @param string|null $description
     */
    public function setDescription(
        ?string $description,
    ): void;

    /**
     * @return string|null
     */
    public function getDescription(
    ): ?string;

    /**
     * @param string|null $url
     */
    public function setUrl(
        ?string $url,
    ): void;

    /**
     * @return string|null
     */
    public function getUrl(
    ): ?string;

    /**
     * @param string|null $timestamp
     */
    public function setTimestamp(
        ?string $timestamp,
    ): void;

    /**
     * @return string|null
     */
    public function getTimestamp(
    ): ?string;

    /**
     * @param int|null $color
     */
    public function setColor(
        ?int $color,
    ): void;

    /**
     * @return int|null
     */
    public function getColor(
    ): ?int;

    /**
     * @param DiscordEmbedFooterInterface|null $footer
     */
    public function setFooter(
        ?DiscordEmbedFooterInterface $footer,
    ): void;

    /**
     * @return DiscordEmbedFooterInterface|null
     */
    public function getFooter(
    ): ?DiscordEmbedFooterInterface;

    /**
     * @param DiscordEmbedImageInterface|null $image
     */
    public function setImage(
        ?DiscordEmbedImageInterface $image,
    ): void;

    /**
     * @return DiscordEmbedImageInterface|null
     */
    public function getImage(
    ): ?DiscordEmbedImageInterface;

    /**
     * @param DiscordEmbedThumbnailInterface|null $thumbnail
     */
    public function setThumbnail(
        ?DiscordEmbedThumbnailInterface $thumbnail
    ): void;

    /**
     * @return DiscordEmbedThumbnailInterface|null
     */
    public function getThumbnail(
    ): ?DiscordEmbedThumbnailInterface;

    /**
     * @param DiscordEmbedVideoInterface|null $video
     */
    public function setVideo(
        ?DiscordEmbedVideoInterface $video
    ): void;

    /**
     * @return DiscordEmbedVideoInterface|null
     */
    public function getVideo(
    ): ?DiscordEmbedVideoInterface;

    /**
     * @param DiscordEmbedProviderInterface|null $provider
     */
    public function setProvider(
        ?DiscordEmbedProviderInterface $provider,
    ): void;

    /**
     * @return DiscordEmbedProviderInterface|null
     */
    public function getProvider(
    ): ?DiscordEmbedProviderInterface;

    /**
     * @param DiscordEmbedAuthorInterface|null $author
     */
    public function setAuthor(
        ?DiscordEmbedAuthorInterface $author,
    ): void;

    /**
     * @return DiscordEmbedAuthorInterface|null
     */
    public function getAuthor(
    ): ?DiscordEmbedAuthorInterface;

    /**
     * @param DiscordEmbedFieldInterface[]|null $fields
     */
    public function setFields(
        ?array $fields
    ): void;

    /**
     * @return DiscordEmbedFieldInterface[]|null
     */
    public function getFields(
    ): ?array;

    /**
     * @param DiscordEmbedFieldInterface $field
     */
    public function addField(
        DiscordEmbedFieldInterface $field,
    ): void;
}