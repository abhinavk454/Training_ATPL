// Print below Pattern
// 1
// 1 2
// 2 3 4
// 4 5 6 7
// 7 8 9 10 11

const sum_m = (str_arr, adder) => {
  let ans = "";
  for (let i = 0; i < str_arr; i++) {
    ans += " " + String(i + adder);
  }

  return ans;
};

const pattern = (n) => {
  let ptr_l = 1;
  for (let i = 1; i <= n; i++) {
    let ptr_n = sum_m(i, ptr_l);
    ptr_l = ptr_n.split(" ").map(function (item) {
      return parseInt(item, 10);
    });
    ptr_l = ptr_l[ptr_l.length - 1];
    console.log(ptr_n);
  }
};

pattern(5);
