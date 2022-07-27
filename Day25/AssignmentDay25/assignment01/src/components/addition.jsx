import React from "react";

export default class addition extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      number1: 0,
      number2: 0,
    };
    this.handleKeyUp1 = this.handleKeyUp1.bind(this);
    this.handleKeyUp2 = this.handleKeyUp2.bind(this);
  }
  handleKeyUp1(event) {
    this.setState({
      number1: event.target.value,
    });
  }
  handleKeyUp2(event) {
    this.setState({
      number2: event.target.value,
    });
  }
  render() {
    return (
      <div className="main">
        <h4>Adding Two Numbers</h4>
        <div className="i_fields">
          <input
            type="text"
            name="number1"
            id="n1"
            onKeyUp={this.handleKeyUp1}
            placeholder="Number 1"
            required
          />
          <input
            type="text"
            name="number2"
            id="n2"
            onKeyUp={this.handleKeyUp2}
            placeholder="Number 2"
            required
          />
        </div>
        <div className="out">
          <h3>
            {parseFloat(this.state.number1) + parseFloat(this.state.number2)}
          </h3>
        </div>
      </div>
    );
  }
}
