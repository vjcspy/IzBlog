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

    protected $_nestedCategoryJs;

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
     * @return \Illuminate\Database\Eloquent\Builder|\Modules\IzBlog\Entities\PostCategory
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
                'name'     => 'Computers',
                'children' => [
                    [
                        'name'     => 'Laptops',
                        'children' => [
                            ['name' => 'PC Laptops'],
                            ['name' => 'Macbooks (Air/Pro)']
                        ]],
                    [
                        'name'     => 'Desktops',
                        'children' => [
                            ['name' => 'Towers Only'],
                            ['name' => 'Desktop Packages'],
                            ['name' => 'All-in-One Computers'],
                            ['name' => 'Gaming Desktops']
                        ]],
                    ['name' => 'Monitors'],
                ]],
            ['name' => 'Cell Phones']
        ];
        $this->getRoot()->makeTree($categories);
    }

    /**
     * @return array
     */
    public function getNestedCategoryJs() {
        if (is_null($this->_nestedCategoryJs)) {
            $this->_nestedCategoryJs = $this->getChildNode($this->getRoot()->children());
        }

        return $this->_nestedCategoryJs;
    }

    /**
     * Retrieve nested child node
     *
     * @param $nodes
     *
     * @return array
     */
    private function getChildNode($nodes) {
        return array_map(
            function ($node) {
                $node['children'] = $this->getChildNode($node->children());
                $node['label']    = $node->name;

                return $node;
            },
            $this->getNodeCollectionAsArray($nodes));
    }

    /**
     * Convert node collection to array
     *
     * @param $nodeCollection
     *
     * @return array
     */
    private function getNodeCollectionAsArray($nodeCollection) {
        $arrNodes = [];
        foreach ($nodeCollection->get() as $node) {
            $arrNodes[] = $node;
        }

        return $arrNodes;
    }

    /**
     * Create new node of category
     *
     * @param $arrData
     *
     * @return \Illuminate\Database\Eloquent\Model|string
     */
    public function createNewCat($arrData) {
        if ($arrData['parentId'] == 'ROOT') {
            return $this->getRoot()->children()->create(
                [
                    'name'   => $arrData['name'],
                    'enable' => isset($arData['enable']) ? $arData['enable'] : 1
                ]);
        }
        else {
            try {
                $node = $this->postCategoryModel->query()->where(
                    [
                        'id' => $arrData['parentId']
                    ]
                )->firstOrFail();

                return $node->children()->create(
                    [
                        'name'   => $arrData['name'],
                        'enable' => isset($arData['enable']) ? $arData['enable'] : 1
                    ]);
            }
            catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                return $e->getMessage();
            }
        }
    }

    public function saveDataCategory($arrData) {
        if ($arrData['id'] == 'ROOT')
            return true;
        else {
            try {
                $node = $this->postCategoryModel->query()->where(
                    [
                        'id' => $arrData['id']
                    ]
                )->firstOrFail();

                $node->enable = $arrData['enable'];
                $node->save();
            }
            catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                return $e->getMessage();
            }
        }
    }
}