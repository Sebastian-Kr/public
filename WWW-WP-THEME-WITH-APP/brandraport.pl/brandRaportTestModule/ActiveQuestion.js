const ActiveQuestion = props => {
  const allQuestions = props.Questions;
  // console.log(allQuestions);

  const activeQuestsionsCheck = allQuestions.filter(
    question => question.questionId === props.activeQuestsionId
  );
  // const activeQuestsionsCheck = allQuestions;
  // const activeQuestsion = props.Questions[1];
  // console.log(activeQuestsionsCheck);

  return (
    <React.Fragment>
      ACTIVE QUESTION COMPONENT
      {/* <Header
          questionTitle={activeQuestsions.questionTitle}
          questionPoints={activeQuestsions.questionPoints}
          questionId={activeQuestsions.questionId}
        /> */}
      {/* 
         
        <ListAnswers
          questionAnswers={activeQuestsions.questionAnswers}
          changeValue={this.handleChangeAnswerValue}
          questionId={activeQuestsions.questionId}
        />
        <Navigation
          nextQuestion={this.handleNextQuestion}
          previousQuestion={this.handlePreviousQuestion}
          questionPoints={activeQuestsions.questionPoints}
          questionId={activeQuestsions.questionId}
          toogleInstruction={this.toogleInstruction}
          isInstructionActvie={this.state.isInstructionActvie}
        /> */}
    </React.Fragment>
  );
};
