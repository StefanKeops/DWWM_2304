<?php
function stringLength($chaine) {
    $longueur = strlen($chaine);
    return $longueur >= 9;
}

function passwordCheck($motDePasse) {
    // Verifica lungimea parolei
    $lengthCheck = stringLength($motDePasse);

    // Verifica daca contine cifre
    $numericCheck = preg_match('/\d/', $motDePasse);

    // Verifica daca exista majuscule si litere normale
    $caseCheck = preg_match('/[a-z]/', $motDePasse) && preg_match('/[A-Z]/', $motDePasse);

    // Verifica daca exista caractere speciale
    $specialCharCheck = preg_match('/[^a-zA-Z\d]/', $motDePasse);

    // True daca toate conditiile sunt indeplinite, false daca nu
    return $lengthCheck && $numericCheck && $caseCheck && $specialCharCheck;
}

function findUser($username, $usersArray) {
    foreach ($usersArray as $user) {
        if ($user['username'] === $username) {
            return $user;
        }
    }
    return null; // Returneaza null daca utilizatorul nu este gasit
}

function userLogin($username, $password, $usersArray) {
    // Gaseste utilizatorul in array
    $user = findUser($username, $usersArray);

    // Verifica daca utilizatorul a fost gasit
    if ($user !== null) {
        // Valideaza parola
        $isValidPassword = passwordCheck($password);

        // Returneaza true daca parola este valida, false altfel
        return $isValidPassword;
    }

    // Returneaza false daca utilizatorul nu este gasit
    return false;
}

$users = [
    ['username' => 'john_doe', 'hashedPassword' => 'hashed_password_123'],
    ['username' => 'jane_doe', 'hashedPassword' => 'hashed_password_456']
];

$loginResult = userLogin('john_doe', 'MotDePasse1!', $users);
var_dump($loginResult); // Va afisa true daca parola este valida, altfel false
?>
