<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 10:08
 */

namespace Modules\IzBlog\Repositories\Theme\Views\Contract;

use Modules\IzCore\Repositories\Object\IzObject;


/**
 * Class ViewAbstract
 * Bây giờ, tất cả các view truyền vào theme đều là 1 instance của class View
 *
 * @package Modules\IzBlog\Repositories\Theme\Views
 */
class ViewAbstract extends IzObject implements ViewInterface {


    /**
     * Tên file trong thư mục view
     *
     * @var string
     */
    protected $fileName;

    /**
     * Chỉ ra view này có share layout hay không.
     * Nếu không share layout thì view sẽ nằm trong thư mục views/layout_name/view_file.blade.php
     * Ngược lại,nếu view có thể là của bất kỳ layout nào, tức là sharelayout thì nằm trong thư mục views/view_file.blade.php
     *
     * @var bool
     */
    protected $shareLayout = true;

    /**
     * Mảng layout của view.
     *
     * @var []
     */
    protected $layoutName = ['*'];

    /**
     * View này có config lúc chọn trong menu hay không
     *
     * @var bool
     */
    protected $hasConfig = false;

    /**
     * @var string
     */
    protected $themeName;

    /**
     * @var \Modules\IzBlog\Entities\Theme\View
     */
    private $viewModel;
    /**
     * @var \Modules\IzCore\Entities\Theme
     */
    private $themeModel;

    /**
     * ViewAbstract constructor.
     *
     * @param \Modules\IzBlog\Entities\Theme\View $viewModel
     * @param array                               $data
     */
    public function __construct(
        \Modules\IzBlog\Entities\Theme\View $viewModel,
        \Modules\IzCore\Entities\Theme $themeModel,
        array $data = []
    ) {
        $this->themeModel = $themeModel;
        $this->viewModel  = $viewModel;
        parent::__construct($data);
    }


    /**
     * Mỗi một view sẽ có config trong phần quản lý menu để tạo ra 1 page. Bao gồm 1 layout + 1 view
     * Phần này sẽ render ra config của view
     *
     * @return string
     */
    public function renderConfigForCustomPage() {
        if ($this->hasConfig)
            return '';
        else
            return false;
    }

    /**
     * @return boolean
     */
    public function isHasConfig() {
        return $this->hasConfig;
    }

    /**
     * @return string
     */
    public function getFileName() {
        return $this->fileName;
    }

    /**
     * @return boolean
     */
    public function isShareLayout() {
        return $this->shareLayout;
    }

    /**
     * @return mixed
     */
    public function getLayoutName() {
        return $this->layoutName;
    }

    /**
     * @return string
     */
    public function getThemeName() {
        return $this->themeName;
    }

    /**
     * @return \Modules\IzBlog\Entities\Theme\View
     */
    public function getViewModel() {
        return $this->viewModel;
    }

    /**
     * @return \Modules\IzCore\Entities\Theme
     */
    public function getThemeModel() {
        return $this->themeModel;
    }


}