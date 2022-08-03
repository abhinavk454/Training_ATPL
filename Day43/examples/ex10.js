// Decimal to binary conversion

const dec_to_bin = (dec) => {
  let bin = "";
  while (dec > 0) {
    bin = (dec % 2) + bin;
    dec = Math.floor(dec / 2);
  }
  return bin;
};

console.log(dec_to_bin(10));
