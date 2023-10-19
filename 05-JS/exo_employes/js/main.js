import { Db } from "./db.js";
import { Employee } from "./employee.js";
import { createEmail } from "./email.js";

const apiUrl = "https://arfp.github.io/tp/web/html-css-js/05-employees/employees.json"

const { createApp } = Vue;

const employeesApp = {
    data () {
        return {
            employees: [],
            employeeCount: 0,
            totalMonthlySalary: 0,
            sortBy: 'asc',
            lastEmployeeId: 0,
        }
    },
    async mounted() {
        let json = await Db.fetchJson(apiUrl);
         
        for(let item of json.data) {
            let c = new Employee(item);

            c.email = createEmail(c.employee_name);

            this.totalMonthlySalary += parseFloat(this.monthlySalary(c));

            if (c.id > this.lastEmployeeId) {
                this.lastEmployeeId = c.id;
            }
        
            this.employees.push(c);
        }

        this.employeeCount = this.employees.lenght
    },
    methods: {
         monthlySalary(employee) {
            return (employee.employee_salary / 12) .toFixed(2)
        },

        yearOfBirth(employee) {
            const curentYear = new Date().getFullYear();
            return curentYear - employee.employee_age;
        },
        
        toggleSort() {
            this.sortBy = this.sortBy === 'asc' ? 'desc' : 'asc';
            this.employees.sort((a, b) => {
              if (this.sortBy === 'asc') {
                return a.employee_salary - b.employee_salary;
              } else {
                return b.employee_salary - a.employee_salary;
              }
            });
        },

        duplicateEmployee(employee) {
            const duplicate = Object.assign({}, employee);
            this.lastEmployeeId++;
            duplicate.id = this.lastEmployeeId;
            this.employees.push(duplicate);
        },

        deleteEmployee(employee) {
            const index = this.employees.indexOf(employee);

            if (index !== -1) {
                this.employees.splice(index, 1)
            }
        }
    }
  };

createApp(employeesApp).mount('#app');