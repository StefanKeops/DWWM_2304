class Jucator {
    constructor(_eRepublikFromJson, index) {
        this.rank = index + 1; // Adaugă 1 pentru a începe clasamentul de la 1 în loc de 0
        this.id = _eRepublikFromJson.id;
        this.nume = _eRepublikFromJson.nume;
        this.tara = _eRepublikFromJson.tara;
        this.medalii = _eRepublikFromJson.medalii;
        this.zile = _eRepublikFromJson.zile;
    }

    static getUniqueCountries(jucatori) {
        const uniqueCountries = [...new Set(jucatori.map(jucator => jucator.tara))];
        return uniqueCountries;
    }
}

export { Jucator };
