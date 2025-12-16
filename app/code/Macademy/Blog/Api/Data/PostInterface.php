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
    public function getId();

    /** 
     * @param int $id
     * @return $this
    */
    public function setId(int $id);

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content);

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt);
}