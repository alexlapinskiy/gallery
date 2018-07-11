<?php
/**
 * Created by PhpStorm.
 * User: olexs
 * Date: 07.07.2018
 * Time: 15:18
 */

class Controller
{
    /** @var Page  */
    public $page;

    /**
     * Controller constructor.
     * @param Page $page
     */
    public function __construct(Page $page)
    {
        $this->page = $page;
    }
    /**
     * This calls other methods based on page GET requests
     */
    public function process()
    {
        $pageAction = $this->page->getPath() . "Action";
        if (method_exists($this, $pageAction)) {
            $this->$pageAction();
        } else {
            $this->notFoundAction();
        }
    }
    /**
     * render index page
     */
    private function indexAction()
    {
        $this->_render('view/index.php', [
            'title' => 'Image Gallery',
            'image' => new Image(),
            'pagination' => new Pagination(),
        ]);
    }
    /**
     * render image upload page
     */
    private function formAction()
    {
        $this->_render('view/form.php', [
            'errors' => Application::get('session')->messages()
        ]);
    }
    /**
     * Render user login page
     */
    private function loginAction()
    {
        $this->_render('view/login.php', [
            'errors' => Application::get('session')->messages()
        ]);
    }
    /**
     * Render register page
     */
    private function registerAction()
    {
        $this->_render('view/register.php', [
            'errors' => Application::get('session')->messages()
        ]);
    }
    /**
     * validate and save image
     *
     * @throws Exception
     */
    private function submitAction()
    {
        $request = $_REQUEST;
        if (($valid = Application::get('validate')->validateForm($request)) === true) {
            if (Application::get('image')->save()) {
                header('Location: /');
            } else {
                header('Location: /form');
            }
        } else {
            header('Location: /');
        }
    }
    /**
     * authorization process
     */
    private function processLoginAction()
    {
        $post = $_POST;
        if (Application::get('validate')->validateLogin($post) && Application::get('user')->auth($post['login'], $post['pass'])) {
            header('Location: /');
        } else {
            header('Location: /login');
        }
    }
    /**
     * Logout user
     */
    private function logoutAction()
    {
        Application::get('user')->logout();
        Application::get('session')->setMessage('You have been logged out');
        $this->page->redirect('/');
    }
    /**
     * Registration process
     */
    private function processRegisterAction()
    {
        $post = $_POST;
        $user=new User();
        if (Validate::validateRegistration($post) && $user->create($post['login'], $post['pass'])) {
            header('Location: /');
        } else {
            header('Location: /register');
        }
    }
    /**
     * Remove image
     */
    private function removeImageAction()
    {
        $id = $_REQUEST['image_id'];
        Application::get('image')->delete($id);
        $this->page->redirect('/');
    }
    private function notFoundAction()
    {
       $this->_render('view/404.php');
    }

    public function _render($template, $params = [])
    {
        extract($params);
        include($template);
    }

}