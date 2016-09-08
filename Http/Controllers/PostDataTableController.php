<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 06/09/2016
 * Time: 15:39
 */

namespace Modules\IzBlog\Http\Controllers;


use Modules\IzCore\Http\Controllers\ImageUpload;
use Response;
use Modules\IzAdmin\Http\Controllers\DataTable\Contract\DataTableAbstract;
use Modules\IzAdmin\Http\Controllers\DataTable\Contract\DataTableInterface;

/**
 * Class PostDataTableController
 *
 * @package Modules\IzBlog\Http\Controllers
 */
class PostDataTableController extends DataTableAbstract implements DataTableInterface {

    use ImageUpload;

    /**
     * PostDataTableController constructor.
     */
    public function __construct() {
        /*override image folder*/
        $this->setModel(app()->make('\Modules\IzBlog\Entities\Post'));
    }

}