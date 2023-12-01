class Mensualite {
    private $capital;
    private $taux;
    private $annees;

    public function __construct($capital, $taux, $annees) {
        $this->capital = $capital;
        $this->taux = $taux;
        $this->annees = $annees;
    }

    public function CalculerMensualite() {
        // ... existing calculation code ...

        // Generate amortization table
        $tableauAmortissement = $this->generateAmortizationTable();

        // Return both the monthly payment and the amortization table
        return [
            'mensualite' => $mensualite,
            'tableauAmortissement' => $tableauAmortissement,
        ];
    }

    private function generateAmortizationTable() {
        // ... generate amortization table logic ...
        return $amortizationTable;
    }
}
