<?php
namespace Smacnew\Category\Model\ResourceModel;
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'category_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Smacnew\Category\Model\Category',
            'Smacnew\Category\Model\ResourceModel\Category');
    }

}