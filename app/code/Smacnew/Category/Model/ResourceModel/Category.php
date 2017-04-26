<?php
namespace Smacnew\Category\Model\ResourceModel\Category;
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Category extends AbstractDb
{

    /**
     * Construct
     *
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param string|null $resourcePrefix
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        $resourcePrefix = null
    )
    {
        parent::_init($context, $resourcePrefix);
    }
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('category', 'category_id');
    }

    /**
     * Retrieve category by category id
     *
     * @param int $cat_id
     * @return \Magento\Framework\DB\Select
     */
    protected function _getLoadByCategoryId($cat_id)
    {
        $select = $this->getConnection()->select()->from(
            ['cat' => $this->getMainTable()]
        )->where(
            'cat.category_id = ?',
            $cat_id
        );

        return $select;
    }
}

