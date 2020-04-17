class TestApp extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      error: null,
      isRestContentLoaded: false,
      questions: [],
      activeQuestsionId: 1
    };
  }

  componentDidMount() {
    let actionURL = "https://brandraport.pl/wp-json/acf/v3/pages/1025";

    // if (window.location.href.indexOf("localhost") != -1) {
    //   actionURL =
    //     "http://localhost/progremo_dev/brandraport/wp-json/acf/v3/pages/1025";
    // }
    // console.log(actionURL);

    fetch(actionURL)
      .then(res => res.json())
      .then(
        result => {
          const instructionText = result.acf.instructionText;
          const wpData = result.acf.test_questions;
          const ApiQuestion = [];
          // console.log(wpData);

          for (var i = 0; i < wpData.length; i++) {
            const currentQuestion = wpData[i];
            // console.log(currentQuestion);
            ApiQuestion.push(this.questionObjectGenerator(currentQuestion, i));
          }

          this.setState({
            isRestContentLoaded: true,
            instructionText: instructionText,
            questions: ApiQuestion
          });
        },
        // Note: it's important to handle errors here
        // instead of a catch() block so that we don't swallow
        // exceptions from actual bugs in components.
        error => {
          this.setState({
            isLoaded: true,
            error
          });
        }
      );
  }

  questionObjectGenerator(currentQuestion, id) {
    const currentID = Number(id + 1);
    let questionObject = { questionPoints: 10 };
    questionObject.questionId = currentID;
    questionObject.questionTitle = currentQuestion.test_questions_item_title;
    // console.log(currentQuestion.test_questions_item);

    // Answers object generate
    let questionAnswers = [];
    for (var i = 0; i < currentQuestion.test_questions_item.length; i++) {
      const currentAnswer = currentQuestion.test_questions_item[i];
      questionAnswers.push(this.answerObjectGenerator(currentAnswer, i));
    }
    // console.log(questionAnswers);

    // RANDOM ORDER ANSWER
    questionObject.questionAnswers = questionAnswers.sort(function() {
      return Math.random() - 0.5;
    });

    // console.log(ApiQuestions);
    // console.log(questionObject);

    return questionObject;
  }

  answerObjectGenerator(currentAnswer, id) {
    // console.log(currentAnswer);
    var answerID = id++;
    var newCurrentAnswer = {
      id: answerID,
      content: currentAnswer.test_questions_item_content,
      value: 0,
      plusDisable: false,
      minusDisable: true,
      archetypeId: currentAnswer.test_questions_item_archetype
    };
    // console.log(newCurrentAnswer);
    return newCurrentAnswer;
  }

  handleChangeAnswerValue = (questionId, answerId, action) => {
    // console.log(this.props);
    const questions = this.state.questions.map(question => {
      // console.log(question.questionId);
      if (questionId === question.questionId) {
        // console.log('Active question finded');
        const questionAnswers = question.questionAnswers.map(answer => {
          if ((action === "minus") & (answerId === answer.id)) {
            answer.value--;
            // console.log(answerId);
            this.props.upadateSummaryTest(answerId, action);

            if (answer.value == 0) {
              answer.minusDisable = true;
            }
          }

          if ((action === "plus") & (answerId === answer.id)) {
            answer.value++;
            // console.log('Value update (plus)');
            this.props.upadateSummaryTest(answerId, action);

            if (answer.value > 0) {
              answer.minusDisable = false;
            }
          }
          return answer;
        });
      }

      return question;
    });

    this.setState({
      questions: questions
    });

    this.handleChangeQuestionPoints(questionId, action);
  };

  handleChangeQuestionPoints = (questionId, action) => {
    // console.log('handleChangeQuestionPoins start');
    const questions = this.state.questions.map(question => {
      if (questionId === question.questionId) {
        if (action === "minus") {
          // console.log('Question score minus 1');
          question.questionPoints = question.questionPoints + 1;
        }

        if (action === "plus") {
          // console.log('Question score plus 1');
          question.questionPoints = question.questionPoints - 1;
        }

        if (question.questionPoints === 0) {
          const questionAnswers = question.questionAnswers.map(answer => {
            answer.plusDisable = true;
            return answer;
          });
        } else {
          const questionAnswers = question.questionAnswers.map(answer => {
            answer.plusDisable = false;
            return answer;
          });
        }
      }
      return question;
    });

    this.setState({
      questions: questions
    });
  };

  handleNextQuestion = questionId => {
    // console.log(this.state.activeQuestsionId);
    // console.log("Scroll window");
    window.scrollTo(500, 0);

    this.setState({
      activeQuestsionId: this.state.activeQuestsionId + 1
      // isInstructionActvie: false
    });
    // debugger;
  };
  handlePreviousQuestion = questionId => {
    // console.log('test prev');

    if (questionId >= 0) {
      // console.log(this.state.activeQuestsionId);
      this.setState({
        activeQuestsionId: this.state.activeQuestsionId - 1
        // isInstructionActvie: false
      });
    }
  };

  activeQuestsionsCheck = () => {
    const activeQuestion = this.state.questions.filter(
      question => question.questionId === this.state.activeQuestsionId
    );
    return activeQuestion[0];
  };

  render() {
    // console.log(this.state.questions);
    const { error, isRestContentLoaded } = this.state;
    if (error) {
      return <div>Error: {error.message}</div>;
    } else if (!isRestContentLoaded) {
      return <div>Loading...</div>;
    } else {
      const activeQuestsion = this.activeQuestsionsCheck();
      // console.log(activeQuestsion);
      // console.log("Active Question = " + activeQuestsion.questionId);

      return (
        <React.Fragment>
          <Header
            questionTitle={activeQuestsion.questionTitle}
            questionPoints={activeQuestsion.questionPoints}
            questionId={activeQuestsion.questionId}
          />
          <ListAnswers
            questionAnswers={activeQuestsion.questionAnswers}
            changeValue={this.handleChangeAnswerValue}
            questionId={activeQuestsion.questionId}
            // upadateSummaryTest={this.props.upadateSummaryTest}
          />
          <Navigation
            nextQuestion={this.handleNextQuestion}
            previousQuestion={this.handlePreviousQuestion}
            // questionPoints={activeQuestsion.questionPoints}
            // questionId={activeQuestsion.questionId}
            activeQuestsion={activeQuestsion}
            instructionText={this.state.instructionText}
            finishTest={this.props.finishTest}
          />
        </React.Fragment>
      );
    }
  }
}

// export default TestApp;
