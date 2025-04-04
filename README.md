🏢 Refer to the original package documentation: https://www.veritrans.co.jp/docs/
### ⚠️ 
> VeriTrans4G  
> MDK for PHP 8  
> Version 2.0.1  
> Copyright(c) 2024 DG Financial Technology, Inc.  
> README.md

### Install package
```cmd
composer require thangit93/veritrans-mdk-tgmdk
```


This MDK is a Composer package compatible with PHP 7.4 or higher, or PHP 8.0 and above.

## Revision History

2024/11 MDK for PHP 8 ver 2.0.1 Released

    Credit Card Payment / Identity Authentication Service:
      ・PCI 3DS Support
        ・Fixed masking of dddCavv, req3dCavv, and res3dCavv in logs
    Carrier Billing:
      ・Corrected comments for the following fields in the payment request:
        ・Item information (itemInfo)
      ・Corrected comments for various URL fields in payment and recurring termination requests
    Merpay:
      ・Corrected comments for various URL fields in payment requests
    PayPay:
      ・Supported Smart Payment, Barcode Payment (partial refund), and authStartUrl
    Eternal Point Payment:
      ・Discontinued support for Eternal Point Payment
    E-Money Payment:
      ・Discontinued support for nanaco payment

2024/03 MDK for PHP 8 ver 2.0.0 Released

    Updated connection domain to new environment (api3.veritrans.co.jp)
    Corrected comments for merchant authentication keys

2023/11 MDK for PHP 8 ver 1.3.3 Released

    Carrier Billing:
      ・Added the following fields to re-authorization responses:
        ・Transaction-specific ID (custTxn)
    Rakuten Pay:
      ・Supported ad-hoc payments

2023/08 MDK for PHP 8 ver 1.3.2 Released

    Common:
      ・Removed "status" from log masking targets
      ・Added result code mapping based on HTTP status codes
    Credit Card Payment / Identity Authentication Service:
      ・Added the following fields to authorization and re-transaction responses:
        ・Authentication start URL (authStartUrl)
      ・Added the following field to identity authentication result responses:
        ・Transaction type (txnType)
    PayPay:
      ・Added the following fields to payment requests:
        ・Transition type (transitionType)
        ・Extended parameter flag (extendParameterType)
      ・Corrected comments for the following field in payment requests:
        ・Authorization with capture flag (withCapture)
      ・Corrected comments for the following fields in payment and re-authorization responses:
        ・Payment center transaction ID (paypayOrderId)
      ・Corrected comments for the following fields in cancellation, sales, and refund responses:
        ・Payment service type (serviceType)
      ・Corrected comments for various URL fields in payment, re-authorization, and cancellation requests
    Bank Payment:
      ・Added the following field to payment requests:
        ・Push parameter expansion flag (pushExpantionFlag)

2023/05 MDK for PHP 8 ver 1.3.1 Released

    Common:
      ・Changed default CA certificate reference path
      ・Improved stream handling during communication
    Search:
      ・Added fraud detection results (fdResult) to payment-specific transaction information in search results
    Merpay:
      ・Corrected comments for the following fields in payment and refund requests:
        ・Payment amount (amount)
        ・Refund amount (amount)

2022/12 MDK for PHP 8 ver 1.3.0 Released

    BankPay:
      ・Newly added

2022/11 MDK for PHP 8 ver 1.2.2 Released

    Carrier Billing:
      ・Supported auPay app authentication method
      ・Supported barcode and scan code payments
    Added exception handling for when stream_socket_client returns false
    Updated cert.pem

2022/09 MDK for PHP 8 ver 1.2.0 Released

    Credit Card Payment / Identity Authentication Service:
      ・Added the following field to authorization and re-transaction responses:
        ・Ticket type code (kindCode)
    Fixed a bug where SearchRange class set incorrect JSON property names
        ・3D CAVV (dddCavv)

2022/08 MDK for PHP 8 ver 1.1.9 Released

    Credit Card Payment:
      ・Supported Fraud Detection V2
    Credit Card Payment / Identity Authentication Service:
      ・Supported Fraud Detection V2
      ・Added the following field to authorization and re-transaction requests:
        ・Address match indicator (addressMatchIndicator)
      ・Corrected comments for the following fields in authorization and re-transaction requests:
        ・Billing postal code (billingPostalCode)
        ・Shipping postal code (shippingPostalCode)
      ・Corrected comments for the following fields in identity authentication result responses:
        ・3D transaction ID (dddTransactionId)
        ・3D DS transaction ID (dddDsTransactionId)
        ・3D server transaction ID (dddServerTransactionId)
        ・3D CAVV (dddCavv)

2022/06 MDK for PHP 8 ver 1.1.8 Released

    Improved CA_CERT_FILE specification in 3GPSMDK.properties to support 3 patterns:
      ・Relative path from tgMdk directory
      ・Absolute path
      ・Unspecified (does not overwrite cafile in SSL context options)
    Credit Card Payment:
      ・Added the following field to authorization, sales, and cancellation requests:
        ・Extended slip information (exSlipInfo)
    Credit Card Payment / Identity Authentication Service:
      ・Added the following fields to authorization and re-transaction requests:
        ・Identity authentication acquirer code (mpiAcquirerCode)
        ・Extended slip information (exSlipInfo)

2021/11 MDK for PHP 8 ver 1.1.7 Released

    Rakuten ID Payment:
      ・Supported online payment (V2)
    Amazon Pay:
      ・Supported cases using merchant's payment confirmation screen
    Score@Payment:
      ・Added the following field to payment and payment modification responses:
        ・Merchant order ID (shopTransactionId)
    Search:
      ・Added the following field to Amazon Pay search parameters:
        ・Payment confirmation screen type (payConfirmScreenType)
      ・Added the following field to search result payment order information:
        ・Payment confirmation screen type (payConfirmScreenType)

2021/11 MDK for PHP 8 ver 1.1.6 Released  
2021/09 MDK for PHP 8 ver 1.1.5 Released  
2021/04 MDK for PHP 8 ver 1.1.4 Released  
2020/12 MDK for PHP 8 ver 1.1.3 Released  
2020/11 MDK for PHP 7 ver 1.1.2 Released  
2019/09 MDK for PHP 7 ver 1.1.1 Released  

### Operating Environment
> Refer to the verified environments on our website or download site.



## MDK File Structure and Usage
> Refer to the separately provided 4G Development Guide and Installation Guide.


## Dependency Composer Packages
> psr/log          version:1.1.4          license:MIT

## MDK Implementation Support
```
For support regarding MDK implementation and operation, please contact the following email address:

 Mail : tech-support@veritrans.jp

Note that support may not be available for implementations in environments other than our verified environments or for environment-dependent issues. Additionally, telephone support is not available except for emergencies.

```
*・Copyright 2024 DG Financial Technology, Inc.*  
*Other names or product names used within the MDK may be registered trademarks or trademarks of their respective companies.*