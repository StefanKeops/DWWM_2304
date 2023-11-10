class Participant {
    constructor(_clasamentFromJson) {
        this.pays = '';
        this.numero = '';
        this.nom = '';
        this.prenom = '';
        this.team = '';
        this.tempsFinal = this.calculateTemps(_clasamentFromJson.temp);
    }

    calculateTemps(temp) {
        const hours = Math.floor(temp / 3600);
        const minutes = Math.floor((temp % 3600) / 60);
        const seconds = temp % 60;

        return {
            hours,
            minutes,
            seconds,
            formatted: `${hours}h ${minutes}m ${seconds}s`
        };
    }
}

export { Participant };
