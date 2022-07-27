const example2 = () => {
  const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  return (
    <div>
      <ol>
        {numbers.map((item) => (
          <h3>{item * item}</h3>
        ))}
      </ol>
      <hr />
    </div>
  );
};

export default example2;
