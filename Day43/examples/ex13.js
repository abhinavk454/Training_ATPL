// sum pattern

const sum_pattern = (n) => {
  for (let i = 1; i <= n; i++) {
    let str = "";
    for (let j = 1; j <= i; j++) {
      str += j;
    }
    console.log(str);
  }
};

sum_pattern(6);
