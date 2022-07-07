import React from "react";

export default class forms extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      f_name: "",
      l_name: "",
      company: "",
      email: "",
      area_code: "",
      phone_no: "",
      subject: "",
      existing_customer: "",
      f_nameError: "",
      l_nameError: "",
      emailError: "",
      area_codeError: "",
      phoneError: "",
      companyError: "",
      subjectError: "",
      existingError: "",
    };
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  isValid(e) {
    if (!this.state.f_name) {
      this.setState({ f_nameError: "First name is required" });
      return false;
    }
    if (!this.state.l_name) {
      this.setState({ l_nameError: "Last name is required" });
      return false;
    }
    if (!this.state.email) {
      this.setState({ emailError: "Email is required" });
      return false;
    }
    if (!this.state.area_code) {
      this.setState({ area_codeError: "Area code is required" });
      return false;
    }
    if (!this.state.phone_no) {
      this.setState({ phoneError: "Phone number is required" });
      return false;
    }
    if (!this.state.company) {
      this.setState({ companyError: "Company is required" });
      return false;
    }
    if (!this.state.subject) {
      this.setState({ subjectError: "Subject is required" });
      return false;
    }
    if (!this.state.existing_customer) {
      this.setState({ existingError: "Existing customer is required" });
      return false;
    } else {
      return true;
    }
  }

  handleSubmit(e) {
    if (this.isValid()) {
      alert("Form submitted successfully");
      this.setState({
        f_name: "",
        l_name: "",
        company: "",
        email: "",
        area_code: "",
        phone_no: "",
        subject: "",
        existing_customer: "",
        f_nameError: "",
        l_nameError: "",
        emailError: "",
        area_codeError: "",
        phoneError: "",
        companyError: "",
        subjectError: "",
        existingError: "",
      });
    }
    e.preventDefault();
  }

  render() {
    return (
      <div className="right">
        <form>
          <div className="form-group">
            <label htmlFor="name">Name</label>
            <input
              type="text"
              className="form-control"
              id="name"
              placeholder="First name"
              onChange={(e) => this.setState({ f_name: e.target.value })}
            />
            <p style={{ color: "red" }}> {this.state.f_nameError} </p>
            <input
              type="text"
              className="form-control"
              id="name"
              placeholder="Last name"
              onChange={(e) => this.setState({ l_name: e.target.value })}
            />
            <p style={{ color: "red" }}> {this.state.l_nameError} </p>
          </div>
          <div className="form-group">
            <label htmlFor="company">Company</label>
            <input
              type="text"
              className="form-control"
              id="company"
              placeholder="Company"
              onChange={(e) => this.setState({ company: e.target.value })}
            />
            <p style={{ color: "red" }}> {this.state.companyError} </p>
          </div>
          <div className="form-group">
            <label htmlFor="email">Email</label>
            <input
              type="email"
              className="form-control"
              id="email"
              placeholder="Email"
              onChange={(e) => this.setState({ email: e.target.value })}
            />
            <p style={{ color: "red" }}> {this.state.emailError} </p>
          </div>
          <div className="form-group">
            <label htmlFor="phone">Phone</label>
            <input
              type="text"
              className="form-control"
              id="area_code"
              placeholder="Area code"
              onChange={(e) => this.setState({ area_code: e.target.value })}
            />
            <p style={{ color: "red" }}> {this.state.area_codeError} </p>
            <input
              type="text"
              className="form-control"
              id="phone_no"
              placeholder="Phone no"
              onChange={(e) => this.setState({ phone_no: e.target.value })}
            />
            <p style={{ color: "red" }}> {this.state.phoneError} </p>
          </div>
          <div className="form-group">
            <label htmlFor="subject">Subject</label>
            <select
              name="subject"
              id="subject"
              onChange={(e) => this.setState({ subject: e.target.value })}
            >
              <option value="">Select</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <p style={{ color: "red" }}> {this.state.subjectError} </p>
          </div>
          <div className="form-group">
            <label htmlFor="existing_customer">
              Are you an existing customer
            </label>
            <input
              type="radio"
              name="existing_c"
              id=""
              value="yes"
              onChange={(e) =>
                this.setState({ existing_customer: e.target.value })
              }
            />
            Yes
            <input
              type="radio"
              name="existing_c"
              id=""
              value="no"
              onChange={(e) =>
                this.setState({ existing_customer: e.target.value })
              }
            />
            No
            <p style={{ color: "red" }}> {this.state.existingError} </p>
          </div>
          <button
            type="submit"
            className="btn btn-primary"
            onClick={(e) => this.handleSubmit(e)}
          >
            Register
          </button>
        </form>
      </div>
    );
  }
}
