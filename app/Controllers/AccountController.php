<?php
/**
 * Created by PhpStorm.
 * User: hans
 * Date: 5-8-15
 * Time: 0:14
 */

namespace YouDesigner\Controllers;

use YouDesigner\Helpers\Block;

class AccountController extends AbstractController
{
    private $layout;

    /**
     * Show the account upgrade page
     *
     * @return string
     * @throws \Exception
     */
    public function actionUpgrade()
    {
        $this->layout = "inner";
        $this->setBlock("meta:title", Block::TYPE_TEXT, "Upgrade");
        $this->setBlock("block:content", Block::TYPE_THEME, "upgrade");
        return $this->render();
    }

    /**
     * Show the new account page
     *
     * @return string
     * @throws \Exception
     */
    public function actionCreate()
    {
        $this->layout = "profile";
        $this->setBlock("meta:title", Block::TYPE_TEXT, "New Hosting Account");
        $this->setBlock("block:content", Block::TYPE_THEME, "newaccount");
        return $this->render();
    }

    public function getLayout()
    {
        return $this->layout;
    }
}