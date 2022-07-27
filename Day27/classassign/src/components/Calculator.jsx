import React from "react";
import "../styles/Calculator.css";

export default class Calculator extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      count: 0,
    };
    this.incrementCount = this.incrementCount.bind(this);
    this.decrementCount = this.decrementCount.bind(this);
  }
  incrementCount = (e) => {
    this.setState({
      count: this.state.count + 1,
    });
  };
  decrementCount = (e) => {
    this.setState({
      count: this.state.count - 1,
    });
  };
  render() {
    return (
      <div className="main">
        <h2>{this.state.count}</h2>
        <div className="buttons">
          <button onClick={this.incrementCount}>
            <span>+</span>
          </button>
          <button onClick={this.decrementCount}>
            <span>-</span>
          </button>
        </div>
      </div>
    );
  }
}
