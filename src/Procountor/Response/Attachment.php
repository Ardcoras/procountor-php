<?php
namespace Procountor\Response;

use Procountor\Interfaces\AttachmentInterface;
use stdClass;

class Attachment implements AttachmentInterface {
    private $data;

    public function __construct(stdClass $data) {
        $this->data = $data;
    }

    //Unique identifier of the attachment. Generated by Procountor and present in the object returned. ,
    public function getId(): int
    {
        return $this->data->id;
    }

    //Attachment name. Include a correct file extension to the value. ,
    public function getName(): string
    {
        return $this->data->name;
    }

    //Reference type of the attachment. Indicates what object is the owner of the attachment. Exception: for JOURNAL type ledger receipts, use type INVOICE. = ['INVOICE', 'LEDGERRECEIPT', 'BANKSTATEMENTEVENT', 'SALES_PRODUCT_REGISTER', 'PURCHASE_PRODUCT_REGISTER', 'CUSTOMER_BUSINESS_PARTNER_REGISTER', 'SUPPLIER_BUSINESS_PARTNER_REGISTER', 'PERSON_BUSINESS_PARTNER_REGISTER', 'EMPLOYEE_INFO', 'ENVIRONMENT', 'FINANCIAL_STATEMENT', 'NETS_COLLECTION'],
    public function getReferenceType(): string
    {
        return $this->data->referenceType;
    }
    //Unique identifier of the referenced object. Exception: for JOURNAL type ledger receipts, use the value of invoiceId referring to the associated invoice. ,
    public function getReferenceId(): string
    {
        return $this->data->referenceId;
    }
    //Mime type of the attachment. Determined from the file extension. For more info, see for example: http://www.freeformatter.com/mime-types-list.html.
    public function getMimeType(): string
    {
        return $this->data->mimeType;
    }
}
