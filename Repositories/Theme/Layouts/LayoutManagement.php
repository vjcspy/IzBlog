<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 16:40
 */

namespace Modules\IzBlog\Repositories\Theme\Layouts;


use Modules\IzCore\Repositories\Object\IzObject;

class LayoutManagement extends IzObject {

    private $_layouts;
    /**
     * @var \Pingpong\Modules\Repository
     */
    private $module;
    /**
     * @var \Modules\IzCore\Repositories\Theme
     */
    private $izTheme;

    public function __construct(
        \Pingpong\Modules\Repository $modules,
        array $data = []
    ) {
        $this->module  = $modules;
        $this->izTheme = app()['izTheme'];
        parent::__construct($data);
    }

    /**
     * Retrieve layout file from all module but just in current theme
     *
     * @return mixed
     */
    public function scanLayout() {
        $key = $this->getKey(['scan', 'all-layout', 'in', 'all-modules', 'but', 'in', 'current-theme']);
        if (is_null($this->getData($key))) {
            $pathModules       = $this->module->getPath();
            $moduleDirectories = scandir($pathModules);

            foreach ($moduleDirectories as $moduleDir) {
                if (!in_array($moduleDir, [".", ".."])) {
                    /*Layouts path  của module hiện tại*/
                    $currentFolderLayoutsPathInModule = $pathModules .
                        '/' .
                        $moduleDir .
                        '/themes/' .
                        $this->izTheme->getCurrentThemeName() .
                        '/layouts';

                    /*Check layouts path file exist*/
                    if (!file_exists($currentFolderLayoutsPathInModule))
                        continue;

                    $layoutFiles = scandir($currentFolderLayoutsPathInModule);

                    foreach ($layoutFiles as $layoutFile) {
                        if (!in_array($layoutFile, [".", ".."])) {

                            if (pathinfo($layoutFile, PATHINFO_EXTENSION) !== 'php')
                                continue;

                            $layoutFileNameWithoutExt = preg_replace('/(blade\.php)$/', '', $layoutFile);
                            $this->_layouts[]         = $layoutFileNameWithoutExt;
                        }
                    }
                }
            }
            $this->setData($key, $this->_layouts);
        }

        return $this->getData($key);
    }
}