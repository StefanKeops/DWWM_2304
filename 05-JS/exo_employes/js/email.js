const createEmail = (fullName) => {
    const names = fullName.split(' ');

    if (names.length < 2) {
        return 'invalid name';
    }

    const firstName = names[0].toLowerCase();

    const lastName = names[1].toLowerCase();

    const email =  `${firstName[0]}.${lastName}@email.com`;

    return email;
};

export { createEmail }

