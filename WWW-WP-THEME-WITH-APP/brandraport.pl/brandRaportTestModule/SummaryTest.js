class SummaryTest extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      mailValue: "",
      agreeIsChecked: false,
      formError: false
      // errorMsg: "",
      // emailError: false,
      // agreeCheckError: false
    };
  }

  handleChange = e => {
    this.setState({
      mailValue: e.target.value
    });
  };

  handleAgreeChecked = e => {
    this.setState({
      agreeIsChecked: !this.agreeIsChecked
    });
  };

  handleSubmit = e => {
    const { mailValue, agreeIsChecked, formError } = this.state;
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const mailValidationOK = re.test(String(mailValue).toLowerCase());
    if (mailValue !== "" && mailValidationOK && agreeIsChecked) {
      return true;
    } else {
      e.preventDefault();
      this.setState({
        formError: true
      });
    }
    // if (mailValue || mailValidationOK) {
    //   this.setState({
    //     emailError: true,
    //     formError: true,
    //     errorMsg: " Wpisz poprawny adres e-mail "
    //   });
    // }
    // if (!agreeIsChecked) {
    //   this.setState({
    //     agreeCheckError: true,
    //     formError: true,
    //     errorMsg: this.state.errorMsg + " Zapoznaj się i zaakceptuj regulamin "
    //   });
    // }
  };

  render() {
    const summaryTestArray = this.props.archetypeSummaryPoints.filter(
      archetype => archetype
    );

    const summaryTestArrayJSON = JSON.stringify(summaryTestArray);

    let actionURL = "https://brandraport.pl/test-podziekowanie";

    // if (window.location.href.indexOf("localhost") !== -1) {
    //   console.log("=====================================");
    //   console.log("LOCALHOST MODE");
    //   console.log("=====================================");
    //   console.log(window.location.href.indexOf("localhost"));
    //   actionURL =
    //     "http://localhost/progremo_dev/brandraport/test-podziekowanie";
    // }

    window.scrollTo(500, 0);

    // console.log(actionURL);

    return (
      <div className="center-box">
        <h2>Podaj swój adres e-mail</h2>
        <p>
          Twój test został zakończony. Dziękujemy za udzielenie odpowiedzi.
          Wpisz swój adres email, a wyniki wyślemy Ci na skrzynkę.
        </p>

        <div className="col-md-12 standard_tamplate_content testAppResumeContainer">
          <div className="formContainer mt-2 ">
            <form
              onSubmit={this.handleSubmit}
              id="reservation_form"
              name="reservation_form"
              action={actionURL}
              method="post"
            >
              <input
                type="hidden"
                name="summaryTestArray"
                value={summaryTestArrayJSON}
              />

              <input
                onChange={this.handleChange}
                placeholder="Adres e-mail"
                id="mailField"
                type="text"
                name="mail"
                // className={this.state.emailError ? "noValidate" : ""}
                value={this.state.mailValue}
              />

              <label>
                <input
                  onChange={this.handleAgreeChecked}
                  // className={this.state.agreeCheckError ? "noValidate" : ""}
                  type="checkbox"
                  id="agree"
                  name="agree"
                  checked={this.state.agreeIsChecked}
                />
                Potwierdzam, że zapoznałem(am) się z treścią
                <a
                  className="agreeLink"
                  target="blank"
                  href="https://brandraport.pl/regulamin/"
                >
                  Regulaminu
                </a>{" "}
                i akceptuję jego warunki.
              </label>
              <p className="agree_error error hidden"></p>

              <input
                className="fornButtonSubmin"
                id="fornButtonSubmin"
                type="submit"
                form="reservation_form"
                value="Wyślij wynik"
              />
            </form>
          </div>
          {this.state.formError ? (
            <p className="error">
              Wpisz poprawny adres e-mail i zaakceptuj regulamin
            </p>
          ) : null}
        </div>
      </div>
    );
  }
}
