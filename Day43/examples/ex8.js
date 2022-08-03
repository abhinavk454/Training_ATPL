// palindrome number
const palindrome = (num) => {
  let str = num.toString();
  let rev = str.split("").reverse().join("");
  return str === rev;
};

console.log(palindrome(121));
