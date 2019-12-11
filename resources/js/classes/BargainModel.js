var self;
export default class {
    constructor()
    {
        this.Error = new Error ();
        this.Success = new Success();
        this.Product = null;
        this.visible = false;
        this.isLoading = false;
        this.quotation_file =  {
            url: null,
            visible:false,
        };
        self = this;
    }

    setBargainForProduct(product)
    {
        self.Product = product;
    }
    showBargainModel()
    {
        self.visible = true;
    }
    resetBargainModel()
    {
        self.Error = new Error ();
        self.Success = new Success();
        self.Product = null;
        self.visible = false;
        self.quotation_file =  {
            url: null,
            visible:false,
        };
    }
    QuotationRequestSuccess(data)
    {
        if(data[0])
            data = data[0];
        self.quotation_file.url = data['pdf_file'];
        self.quotation_file.visible = true;
        self.Success.showSuccessModal('Successfully generated and sent quotation.');
        self.isLoading = false;
    }
    RequestError(error)
    {
        self.Error.showErrorModal(error);
        self.isLoading = false;
    }

}