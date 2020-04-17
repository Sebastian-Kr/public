const FinishButton = props => {
  return (
    <button
      className="button btn-v6 btn-icon btn-icon-right btn-icon-arrow1"
      onClick={props.finishTest}
    >
      <span>Zakończ test</span>
    </button>
  );
};

const NextQuestionButton = props => {
  // console.log(props);

  return (
    <button
      onClick={props.handleCheckClick}
      className="button btn-v6 btn-icon btn-icon-right btn-icon-arrow1"
    >
      <span>Następne pytanie</span>
    </button>
  );
};

const BlockInfo = () => {
  return (
    <div className="BlockInfo mb-2 red-info">
      Wykorzystaj wszystkie punkty, żeby przejść dalej
    </div>
  );
};

class NextButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      dispalyBlockInfo: false
    };
  }

  handleCheckClick = () => {
    if (this.props.questionPoints == 0) {
      this.setState({
        dispalyBlockInfo: false
      });

      this.props.questionId == 6
        ? this.props.finishTest()
        : this.props.nextQuestion(this.props.questionId);
    } else {
      this.setState({
        dispalyBlockInfo: true
      });
    }
  };

  render() {
    return (
      <>
        {this.props.questionId == 6 ? (
          <FinishButton finishTest={this.handleCheckClick} />
        ) : (
          <NextQuestionButton handleCheckClick={this.handleCheckClick} />
        )}

        {this.state.dispalyBlockInfo ? <BlockInfo /> : ""}
      </>
    );
  }
}
