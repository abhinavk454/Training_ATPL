import React from "react";

export default class example4 extends React.Component {
  constructor(props) {
    super(props);
    //binding the methods with constructor
    this.handleSubmit = this.handleSubmit.bind(this);
    this.input = React.createRef();
  }

  handleSubmit(e) {
    alert("You have successfully added data's.");
    e.preventDefault();
  }
  render() {
    return (
      <div>
        <form onSubmit={this.handleSubmit}>
          <h1>Uncontrolled form examples</h1>
          <label htmlFor="name">
            <input type="text" ref={this.input} />
          </label>
          <label htmlFor="company_name">
            <input type="text" ref={this.input} />
          </label>
          <input type="submit" value="Submit" />
        </form>
        <hr />
      </div>
    );
  }
}
