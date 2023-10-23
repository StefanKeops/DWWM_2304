class Produit
{
    constructor(_produitFromJson)
    {
        Object.assign(this, _produitFromJson);
    }
}

export { Produit }