<?php declare(strict_types=1);

namespace Macademy\Blog\Model;

use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

use Macademy\Blog\Api\Data\PostInterface;
use Macademy\Blog\Api\PostRepositoryInterface;
use Macademy\Blog\Model\ResourceModel\Post as PostResourceModel;


class PostRepository implements PostRepositoryInterface
{
    public function __construct(
        private PostFactory $postFactory, // este es el factory del modelo Post, se crea automaticamente cuando se crea el modelo Post
        private PostResourceModel $postResourceModel
    )
    {}

    public function getById(int $id): PostInterface
    {
        $post = $this->postFactory->create();
        $this->postResourceModel->load($post, $id);

        if (!$post->getId()) {
            throw new NoSuchEntityException(
                __('Post with id "%1" does not exist.', $id)
            );
        }
        return $post;
    }


    public function save(PostInterface $post): PostInterface
    {
        try {
            $this->postResourceModel->save($post);
            return $post;
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(
                __('Could not save the post: %1', $exception->getMessage())
            );
        }
    }


    public function deleteById(int $id): bool
    {
        try {
            $post = $this->getById($id);
            $this->postResourceModel->delete($post);
            return true;
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(
                __('Could not delete the post: %1', $exception->getMessage())
            );
        }
    }
}