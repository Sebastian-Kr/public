const ListAnswers = props => {
  // console.log(props.questionId);

  const questionAnswers = props.questionAnswers.map(answer => (
    <Answer
      key={answer.id}
      answerId={answer.id}
      content={answer.content}
      plusDisable={answer.plusDisable}
      minusDisable={answer.minusDisable}
      value={answer.value}
      changeValue={props.changeValue}
      questionId={props.questionId}
      // upadateSummaryTest={props.upadateSummaryTest}
    />
  ));

  // console.log(questionAnswers);

  return (
    <div className="brand_raport_test_available_answer_container">
      {questionAnswers}
    </div>
  );
};
