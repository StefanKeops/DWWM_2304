class Match {
    constructor(_championsLeague2023FromJson) {
        this.matchNumber = _championsLeague2023FromJson.MatchNumber;
        this.roundNumber = _championsLeague2023FromJson.RoundNumber;
        this.dateUtc = _championsLeague2023FromJson.DateUtc;
        this.homeTeam = _championsLeague2023FromJson.HomeTeam;
        this.awayTeam = _championsLeague2023FromJson.AwayTeam;
        this.group = _championsLeague2023FromJson.Group;
        this.homeTeamScore = _championsLeague2023FromJson.HomeTeamScore;
        this.awayTeamScore = _championsLeague2023FromJson.AwayTeamScore;
        this.difference = this.calculateDifference(_championsLeague2023FromJson.HomeTeamScore, _championsLeague2023FromJson.AwayTeamScore);
    }

    calculateDifference(homeTeamScore, awayTeamScore) {
         homeTeamScore = this.HomeTeamScore;
         awayTeamScore = this.AwayTeamSc;

        if (homeTeamScore > awayTeamScore) {
            let difference = homeTeamScore - awayTeamScore;
            return difference;
        }
        else if (awayTeamScore > homeTeamScore) {
            let difference = awayTeamScore - homeTeamScore;
            return difference;
        }
        else {
            return 0;
        }
    }
}

export { Match };