<?php
namespace Smacnew\Category\Api\Data;

interface CategoryInterface{
    /**
     * Define key name in upper snake case
     */
    const CATEGORY_ID = 'category_id';
    const CATEGORY_NAME = 'category_name';
    const PARENT_ID = 'parent_id';

    /**
     * GET category id
     *
     * @return int|null
     */
    public function getCategoryId();

    /**
     * GET Category Name
     *
     * @return string|null
     */
    public function getCategoryName();

    /**
     * GET Parent id
     *
     * @return string|null
     */
    public function getParentid();

    /**
     * SET category id
     *
     * @param int $id
     * @return CategoryInterface
     */
    public function setCategoryId($id);

    /**
     * SET Category Name
     *
     * @param string $cat_name
     * @return CategoryInterface
     */
    public function setCategoryName($cat_name);

    /**
     * SET Parent id
     *
     * @param int $p_id
     * @return CategoryInterface
     */
    public function setParentId($p_id);

}
