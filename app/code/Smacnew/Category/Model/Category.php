<?php

use Magento\Framework\DataObject\IdentityInterface;
use Smacnew\Category\Api\Data\CategoryInterface;
use Magento\Framework\Model\AbstractModel;

class Category extends AbstractModel implements CategoryInterface, IdentityInterface
{

    const CACHE_TAG = 'category';
    /**
     * Initial ResourceModel
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Smacnew\Category\Model\ResourceModel\Category');
    }

    /**
     * GET category id
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->getData(self::CATEGORY_ID);
    }

    /**
     * GET Category Name
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->getData(self::CATEGORY_NAME);
    }
    /**
     * GET Parent id
     *
     * @return string|null
     */
    public function getParentid()
    {
        return $this->getData(self::PARENT_ID);
    }
    /**
     * SET category id
     *
     * @param int $id
     * @return CategoryInterface
     */
    public function setCategoryId($id)
    {
        return $this->setData(self::CATEGORY_ID, $id);
    }

    /**
     * SET Category Name
     *
     * @param string $cat_name
     * @return CategoryInterface
     */
    public function setCategoryName($cat_name)
    {
        return $this->setData(self::CATEGORY_NAME, $cat_name);
    }

    /**
     * SET Parent id
     *
     * @param int $p_id
     * @return CategoryInterface
     */
    public function setParentId($p_id)
    {
        return $this->setData(self::PARENT_ID, $p_id);
    }

    /**
     * Return unique ID(s) for each object in system
     *
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getCategoryId()];
    }
}