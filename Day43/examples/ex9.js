// Write a Node JS program to input basic salary of an employee and calculate its Gross salary according to following:
// Basic Salary <= 10000 : HRA = 20%, DA = 80%
// Basic Salary <= 20000 : HRA = 25%, DA = 90%
// Basic Salary > 20000 : HRA = 30%, DA = 95%

import readline from "readline-sync";
const b_s = readline.question("Enter Basic Salary: ");
const calSalary = (basic) => {
  if (basic <= 10000) {
    let hra = basic * 0.2;
    let da = basic * 0.8;
    return Number(basic) + Number(hra) + Number(da);
  } else if (basic <= 20000) {
    let hra = basic * 0.25;
    let da = basic * 0.9;
    return Number(basic) + Number(hra) + Number(da);
  } else {
    let hra = basic * 0.3;
    let da = basic * 0.95;
    return Number(basic) + Number(hra) + Number(da);
  }
};

console.log(calSalary(b_s));
