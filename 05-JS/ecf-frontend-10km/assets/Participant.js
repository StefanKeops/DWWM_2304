class Participant {
    constructor(_participantFromJson) {
        this.pays = '';
        this.nom = '';
        this.prenom = '';
        this.tempsFinal(_participantFromJson.temps);
    }

    tempsFinal() {
        const temp = _temps;
        console.log(temp)
        const minutes = Math.floor(temp / 60);
        console.log(minutes)
        const seconds = Math.floor(temp % 60);
        return  minutes + "min" + seconds + "s";
       }
}

export { Participant }