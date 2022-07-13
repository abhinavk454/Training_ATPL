import "../styles/BMICalculator.css";
import { useState } from "react";

const BmiCalculator = () => {
  const [weight, setWeight] = useState(0);
  const [height, setHeight] = useState(0);
  const [bmi, setBmi] = useState(0);
  const [bmiResult, setBmiResult] = useState("");
  const [bmiResultClass, setBmiResultClass] = useState("");

  const calculateBmi = () => {
    const bmi = weight / (height / 100) ** 2;
    setBmi(bmi);
    setBmiResult(bmi.toFixed(2));
    setBmiResultClass(
      bmi < 18.5
        ? "underweight"
        : bmi < 25
        ? "normal"
        : bmi < 30
        ? "overweight"
        : "obese"
    );
  };

  const handleWeightChange = (event) => {
    setWeight(event.target.value);
  };

  const handleHeightChange = (event) => {
    setHeight(event.target.value);
  };

  return (
    <div className="bmi-calculator">
      <h1>BMI Calculator</h1>
      <div className="bmi-calculator-inputs">
        <label htmlFor="weight">Weight (kg)</label>
        <input
          type="number"
          id="weight"
          value={weight}
          onChange={handleWeightChange}
        />
        <label htmlFor="height">Height (cm)</label>
        <input
          type="number"
          id="height"
          value={height}
          onChange={handleHeightChange}
        />
      </div>
      <button onClick={calculateBmi}>Calculate</button>
      <div className="bmi-calculator-result">
        <p>Your BMI is: {bmiResult}</p>
        <p className={bmiResultClass}>You are {bmiResultClass}</p>
      </div>
    </div>
  );
};

export default BmiCalculator;
