<?php


namespace Louise\FirstModule\Block;


class ProductList extends \Magento\Framework\View\Element\Template
{
    public $scopeConfig;
    protected $_categoryFactory;
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Louise\FirstModule\Model\ObjetFactory $objetFactory,
        \Louise\FirstModule\Model\ResourceModel\Objet\CollectionFactory $objetCollectionFactory,
    \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
)
    {
        $this->scopeConfig = $scopeConfig;
        $this->_categoryFactory = $categoryFactory;
        parent::__construct($context, $data);

        $this->productFactory = $productFactory;
        $this->productCollectionFactory = $productCollectionFactory;

        $this->objetFactory = $objetFactory;
        $this->objetCollectionFactory = $objetCollectionFactory;
    }

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getProduct($id)
    {
        $product = $this->productFactory->create();

        $product->load($id);
        return $product;
    }

    public function getCategoryLouise(){
        $category = $this->_categoryFactory->create();

    }

    public function getAllProductsLouiseCat(){

        $produits = $this->productCollectionFactory->create();
        $produits->addAttributeToSelect('*');
        $produits->addCategoriesFilter(array('in' => array(6)));
        return $produits;
    }

    public function getAllObject(){

        $objects = $this->objetCollectionFactory->create();
        return $objects;
    }
}