import React, { Component } from "react";

// ----------SCSS--------------
import "./LoginCard.scss";
// ----------SCSS--------------

// ----------BOOTSTRAP MODULES--------------
import { Form, Button } from "react-bootstrap";
// ----------BOOTSTRAP MODULES--------------

class LogInCard extends Component {
  constructor(props) {
    super(props);
    this.state = {
      username: "",
      password: ""
    };
  }

  handleChange = async e => {
    this.setState({ [e.target.name]: e.target.value });
  };

  submitForm = async e => {
    e.preventDefault();
    const { loginFunc } = this.props;
    const { username, password } = this.state;
    await loginFunc(username, password);
    
  };

  render() {
    return (
      <div className="SignInCard-container">
        <Form onSubmit={this.submitForm}>
          <h2>Sign In</h2>
          <Form.Row>
            <Form.Label>UserName</Form.Label>
            <Form.Control
              name="username"
              onChange={this.handleChange}
              type="text"
              required
            />

            <Form.Label>Password</Form.Label>
            <Form.Control
              name="password"
              onChange={this.handleChange}
              type="password"
              required
            />
            <Form.Row />
            <Button variant="primary" type="submit">
              Sign In
            </Button>
          </Form.Row>
        </Form>
      </div>
    );
  }
}

export default LogInCard;
