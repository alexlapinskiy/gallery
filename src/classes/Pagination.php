<?php
/**
 * Created by PhpStorm.
 * User: olexs
 * Date: 06.07.2018
 * Time: 16:41
 */

class Pagination
{

    const IMAGE_COUNT=9;
    private $pageCount = false;

    /** Return qty of pages
     *
     * @return float|int
     */
    public function getPageCount()///MUST BE FIXED
    {
        $database = new Connect();
        $result = $database->request('SELECT COUNT(image_id) FROM images', []);
        return ceil($result->fetchColumn(0) / self::IMAGE_COUNT);

    }

    /** Get last page number
     *
     * @return int
     */
    public function getLastPage() //private
    {
        return $this->getPageCount();
    }


    /** Get first page, first page is 1
     *
     * @return int
     */
    function getFirstPage()
    {
        return 1;
    }

    /** Get next page number
     *
     * @return bool|int
     */
    public function getNextPage()
    {
        if (isset($_REQUEST['p']) && $this->getPageCount() <= $_REQUEST['p']) {
            return false;
        } elseif (isset($_REQUEST['p'])) {
            return $_REQUEST['p'] + 1;
        } else {
            return 2;
        }
    }

    /** Get previous page number
     *
     * @return bool|int
     */
    public function getPrevPage()
    {
        return isset($_REQUEST['p']) && $_REQUEST['p'] > 1 ? $_REQUEST['p'] - 1 : false;
    }

    /** Get current page number
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return isset($_REQUEST['p']) ? $_REQUEST['p'] : 1;
    }

    /** Generate pagination HTML
     *
     * @return string
     */
    /** Generate pagination HTML
     *
     * @return string
     */
    public function render()
    {
        $html = '';
        if ($this->getPageCount() > 1) {
            $html .= "<li class='page-item'><a class='page-link' href='/?p=" . $this->getFirstPage() . "'>Go to first page</a></li>";
            if ($prevPage = $this->getPrevPage()) {
                $html .= "<li class='page-item'><a class='page-link' href='/?p=" . $prevPage . "'>" . $prevPage . "</a></li>";
            }
            $html .= "<li class='page-item active'><a class='page-link' href='#'>" . $this->getCurrentPage() . "</a></li>";
            if ($nextPage = $this->getNextPage()) {
                $html .= "<li class='page-item'><a class='page-link' href='/?p=" . $nextPage . "'>" . $nextPage . "</a></li>";
            }
            $html .= "<li class='page-item'><a class='page-link' href='/?p=" . $this->getLastPage() . "'>Go to last page</a></li>";
        }
        return $html;
    }

}