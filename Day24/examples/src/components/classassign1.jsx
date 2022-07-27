import React from "react";

export default class Assign1 extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      num1: "",
      num2: "",
      result: "",
    };
  }
  add = () => {
    this.setState({
      result: parseInt(this.state.num1) + parseInt(this.state.num2),
    });
  };
  multiply = () => {
    this.setState({
      result: parseInt(this.state.num1) * parseInt(this.state.num2),
    });
  };

  render() {
    return (
      <div className="cal">
        <h3>Calculation</h3>
        <div className="upper">
          <input
            type="text"
            placeholder="Number 1"
            value={this.state.num1}
            onChange={(e) => {
              this.setState({ num1: e.target.value });
            }}
          />
          <input
            type="text"
            placeholder="Number 2"
            value={this.state.num2}
            onChange={(e) => {
              this.setState({ num2: e.target.value });
            }}
          />
        </div>
        <div className="middle">
          <button onClick={() => this.add()}>Add</button>
          <button onClick={() => this.multiply()}>Multiply</button>
        </div>
        <input type="text" placeholder="Result" value={this.state.result} />
      </div>
    );
  }
}
