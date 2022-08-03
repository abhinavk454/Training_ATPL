import chalk from "chalk";
// check prime number
const cp = (n) => {
  if (n < 2) return false;
  for (let i = 2; i < n; i++) {
    if (n % i === 0) return false;
  }
  return true;
};

for (let i = 1; i <= 100; i++) {
  console.log(chalk.red(i), chalk.bgBlue.bold.underline(cp(i)));
}
