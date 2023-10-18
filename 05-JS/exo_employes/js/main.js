import { Db } from "./db.js";
import { Employee } from "./employee.js";
import { createEmail } from "./email.js";

const apiUrl = "https://arfp.github.io/tp/web/html-css-js/05-employees/employees.json"

const { createApp } = Vue;

const employeesApp = {
    data () {
        return {
            employees: []
        }
    },
    async mounted() {
        let json = await Db.fetchJson(apiUrl);
         console.log(json)

        for(let item of json.data) {
            let c = new Employee(item);

            c.email = createEmail(c.employee_name);
        
            this.employees.push(c);
        }

        console.log(this.employees);
    },
    methods: {
         monthlySalary(employee) {
            return (employee.employee_salary / 12) .toFixed(2)
        },
    }
}

createApp(employeesApp).mount('#app');