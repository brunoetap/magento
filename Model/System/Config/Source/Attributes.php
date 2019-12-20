<?php
namespace Brunoetap\Gateway\Model\System\Config\Source;

/**
 * Class Attributes
 *
 * @see        Official Website
 * @author    Sixbank (and others) 
 * @copyright 2018-2019 Sixbank
 * @license   https://www.gnu.org/licenses/gpl-3.0.pt-br.html GNU GPL, version 3
 * @package   Brunoetap\Gateway\Model\System\Config\Source
 */
class Attributes implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var \Brunoetap\Gateway\Helper\Internal
     */
    protected $gatewayHelper;

    /**
     * @param \Brunoetap\Gateway\Helper\Internal $gatewayHelper
     */
    public function __construct(
            \Brunoetap\Gateway\Helper\Internal $gatewayHelper
    ){
        $this->gatewayHelper = $gatewayHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $fields = $this->gatewayHelper->getFields('customer_address');
         $options = array();

        foreach ($fields as $key => $value) {
            if (!is_null($value['frontend_label'])) {
                //in multiline cases, it allows to specify what each line means (i.e.: street, number)
                if ($value['attribute_code'] == 'street') {
                    $streetLines = $this->gatewayHelper->getStoreConfig('customer/address/street_lines');
                    for ($i = 1; $i <= $streetLines; $i++) {
                        $options[] = array('value' => 'street_'.$i, 'label' => 'Street Line '.$i);
                    }
                } else {
                    $options[] = array(
                        'value' => $value['attribute_code'],
                        'label' => $value['frontend_label'] . ' (' . $value['attribute_code'] . ')'
                    );
                }
            }
        }
        return $options;
    }
}