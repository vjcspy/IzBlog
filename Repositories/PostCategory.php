<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 6/23/16
 * Time: 9:55 PM
 */

namespace Modules\IzBlog\Repositories;


use Modules\IzCore\Repositories\Object\IzObject;

class PostCategory extends IzObject {

    /**
     * @var \Modules\IzBlog\Entities\PostCategory
     */
    private $postCategoryModel;

    /**
     * Name of root category in database
     */
    const ROOT_CATEGORY_NAME = 'ROOT_CATEGORY';

    public function __construct(
        \Modules\IzBlog\Entities\PostCategory $postCategory,
        array $data = []
    ) {
        $this->postCategoryModel = $postCategory;
        parent::__construct($data);
    }

    /**
     * @return \Modules\IzBlog\Entities\PostCategory
     */
    public function getPostCategoryModel() {
        return $this->postCategoryModel;
    }

    /**
     * @return \Modules\IzBlog\Entities\PostCategory
     */
    public function getRoot() {
        try {
            return $this->postCategoryModel->query()->where(
                [
                    'name' => self::ROOT_CATEGORY_NAME
                ]
            )->firstOrFail();
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->createRoot();
        }
    }

    /**
     * @return $this
     */
    protected function createRoot() {
        $this->postCategoryModel->create(
            [
                'name' => self::ROOT_CATEGORY_NAME
            ])->makeRoot();
        return $this;
    }

    public function dummyCategory() {
        $categories = [
            ['name' => 'TV & Home Theather'],
            ['name' => 'Tablets & E-Readers'],
            [
                'name' => 'Computers',
                'children' => [
                    [
                        'name' => 'Laptops',
                        'children' => [
                            ['name' => 'PC Laptops'],
                            ['name' => 'Macbooks (Air/Pro)']
                        ]],
                    [
                        'name' => 'Desktops',
                        'children' => [
                            // These will be created
                            ['name' => 'Towers Only'],
                            ['name' => 'Desktop Packages'],
                            ['name' => 'All-in-One Computers'],
                            ['name' => 'Gaming Desktops']
                        ]],
                    ['name' => 'Monitors'],
                ]],
            ['id' => 9, 'name' => 'Cell Phones']
        ];
        $this->getRoot()->makeTree($categories);
    }

}