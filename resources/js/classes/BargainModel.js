export default class {
    constructor()
    {
        this.Error = new Error ();
        this.Success = new Success();
        this.Product = null;
        this.visible = false;
    }

    setBargainForProduct(product)
    {
        this.Product = product;
    }
    showBargainModel()
    {
        this.visible = true;
    }
    resetBargainModel()
    {
        this.Error = new Error ();
        this.Success = new Success();
        this.Product = null;
        this.visible = false;
    }

}