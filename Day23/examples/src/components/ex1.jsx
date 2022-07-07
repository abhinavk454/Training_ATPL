const example1 = () => {
  const name = ["alpha", "beta", "gamma", "delta", "omega"];
  return (
    <div>
      <hr />
      <ol>
        {name.map((item) => (
          <li>{item}</li>
        ))}
      </ol>
      <hr />
    </div>
  );
};

export default example1;
