var config = {
    map: {
        '*': {
            'Magento_Checkout/js/model/place-order':'Brunoetap_Gateway/js/model/place-order',
            'Magento_Checkout/js/action/select-payment-method':
                'Brunoetap_Gateway/js/action/select-payment-method'
        }
    },
    config: {
        mixins: {
            'Brunoetap_Gateway/js/validation': {
                'Brunoetap_Gateway/js/validation-mixin': true
            }
        }
    }
};