import React from "react";
export default class onkeyup_e extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      value: "",
    };
    this.handleKeyUp = this.handleKeyUp.bind(this);
  }
  handleKeyUp(event) {
    const keyValue = event.key;
    this.setState(({ value }) => ({
      value: value + keyValue,
    }));
  }
  render() {
    return (
      <form>
        <h2>onKeyup event example</h2>
        <label>
          Enter your markdown here:
          <br />
          <textarea
            value={this.state.value}
            onKeyUp={this.handleKeyUp}
            id="editor"
          />
          <br />
        </label>
        <label>
          Your markup will be previewed here:
          <p id="preview">{this.state.value}</p>
        </label>
        <hr />
      </form>
    );
  }
}
