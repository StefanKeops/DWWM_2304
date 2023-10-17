class Employee
{
    constructor(_employeeFromJason)
    {
        Object.assign(this, _employeeFromJason);
    }
}

export { Employee }