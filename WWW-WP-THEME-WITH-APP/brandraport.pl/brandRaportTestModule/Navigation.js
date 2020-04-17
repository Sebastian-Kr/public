class Navigation extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      isInstructionActvie: false
    };
  }

  toogleInstruction = () => {
    console.log(this.state);
    this.setState({
      isInstructionActvie: !this.state.isInstructionActvie
    });
    // console.log(this.state.isInstructionActvie);
  };

  render() {
    history.pushState(null, null, location.href);
    history.back();
    history.forward();
    window.onpopstate = function() {
      history.go(1);
    };
    // console.log(this.state.isInstructionActvie);
    // console.log(this.props.activeQuestsion);
    let { questionId, questionPoints } = this.props.activeQuestsion;

    return (
      <React.Fragment>
        <div className="mt-3 brand_raport_test_navigation">
          <div>
            <a
              onClick={() => this.props.previousQuestion(questionId)}
              // style={props.questionId === 1 ? "display:none" : ""}
              style={
                questionId === 1
                  ? { transform: "scale(0)", display: "none" }
                  : {}
              }
              className="button btn-small btn-v11 btn-icon btn-icon-left btn-icon-arrow3"
            >
              <span>Poprzednie pytanie</span>
            </a>
            <div
              onClick={() => this.toogleInstruction()}
              className="button btn-small btn-v11"
            >
              <span>Instrukcja</span>
            </div>
          </div>

          <NextButton
            nextQuestion={this.props.nextQuestion}
            questionId={questionId}
            questionPoints={questionPoints}
            finishTest={this.props.finishTest}
          />
        </div>

        <div
          className={
            this.state.isInstructionActvie
              ? "mt-3 prgrm-hide-show-item__hide-box active"
              : "mt-3 prgrm-hide-show-item__hide-box "
          }
        >
          {this.props.instructionText}
        </div>
      </React.Fragment>
    );
  }
}
