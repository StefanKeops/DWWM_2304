import { Db } from "./db.js";
import { Employee } from "./employee.js";
import { Email } from "./email.js";

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
            this.employees.push(c);
        }

        console.log(this.employees);
    },
    methods: {

    }
}

createApp(employeesApp).mount('#app');