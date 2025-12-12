<?php declare(strict_types=1);

namespace Macademy\Blog\Api\Data;

/**
 * Blog post Interface
 * @api
 * @since 1.0.0
 */
interface PostInterface
{
    public const ID = 'post_id';
    public const TITLE = 'title';
    public const CONTENT = 'content';
    public const CREATED_AT = 'created_at';

    /** 
     * @return int
    */
    public function getId(): int;

    /** 
     * @param int $id
     * @return void
    */
    public function setId(int $id): void;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void;

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     * @return void
     */
    public function setCreatedAt(string $createdAt): void;
}