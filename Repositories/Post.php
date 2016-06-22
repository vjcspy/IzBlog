<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 22/06/2016
 * Time: 15:16
 */

namespace Modules\IzBlog\Repositories;


use Modules\IzCore\Repositories\Entity\EntityRepositoryInterface;
use Modules\IzCore\Repositories\Object\IzObject;
use Modules\IzCore\Repositories\Object\SearchCriteria;
use Modules\IzCore\Repositories\Object\SearchCriteriaInterface;

class Post extends IzObject implements EntityRepositoryInterface {

    /**
     * @var \Modules\IzBlog\Entities\Post
     */
    protected $post;

    /**
     * Post constructor.
     *
     * @param \Modules\IzBlog\Entities\Post $post
     * @param array                         $data
     */
    public function __construct(
        \Modules\IzBlog\Entities\Post $post,
        array $data = []
    ) {
        $this->post = $post;
        parent::__construct($data);
    }

    /**
     * @return \Modules\IzBlog\Entities\Post
     */
    public function getPost() {
        return $this->post;
    }

    /**
     * @param integer $id
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getById($id) {
        // TODO: Implement getById() method.
        return $this->post->query()->where('id', $id)->firstOrFail();
    }

    /**
     * @param $id
     *
     * @return boolean
     */
    public function deleteById($id) {
        // TODO: Implement deleteById() method.
    }

    /**
     * @param [] $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function save($data) {
        // TODO: Implement save() method.
    }

    /**
     * @param \modules\IzCore\Repositories\Object\SearchCriteriaInterface $criteriaInterface
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getList(SearchCriteriaInterface $criteriaInterface) {
        $builder = $this->getPost()->query();
        foreach ($criteriaInterface->getData() as $searchName => $searchValue) {
            if (in_array($searchName, [SearchCriteria::CURRENT_PAGE, SearchCriteria::PAGE_SIZE]))
                continue;
            $builder->where($searchName, 'like', '%' . $searchValue . '%');
        }

        return $builder->get();
    }
}