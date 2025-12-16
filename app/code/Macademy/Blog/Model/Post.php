<?php declare(strict_types=1);

namespace Macademy\Blog\Model;

use Macademy\Blog\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements PostInterface
{
    protected function _construct(): void
    {
        $this->_init(ResourceModel\Post::class);
    }

    // public function getId(): int
    // {
    //     return (int) $this->getData(self::ID);
    // }

    // public function setId(int $id)
    // {
    //    $this->setData(self::ID, $id);
    //    return $this;
    // }

    public function getTitle(): string
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle(string $title)
    {
        $this->setData(self::TITLE, $title);
    }

    public function getContent(): string
    {
        return (string) $this->getData(self::CONTENT);
    }

    public function setContent(string $content)
    {
        return $this->setData(self::CONTENT, $content);
    }


    public function getCreatedAt(): string
    {
        return (string) $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);
    }
}
