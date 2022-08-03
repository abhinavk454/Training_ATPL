const fn = (n) => {
  return n <= 0 ? 1 : n * fn(n - 1);
};

console.log(fn(10));
