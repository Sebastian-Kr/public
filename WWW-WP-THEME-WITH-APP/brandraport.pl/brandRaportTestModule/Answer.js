const Answer = props => {
  return (
    <div className="brand_raport_test_available_answer">
      <div className="brand_raport_test_available_answer_title">
        {props.content}
      </div>
      <div className="counter-box">
        <button
          onClick={() =>
            props.changeValue(props.questionId, props.answerId, "minus")
          }
          disabled={props.minusDisable}
          className={props.minusDisable ? "disable" : "active"}
        >
          -
        </button>
        <div className="counter-value">{props.value}</div>
        <button
          onClick={() =>
            props.changeValue(props.questionId, props.answerId, "plus")
          }
          disabled={props.plusDisable}
          className={props.plusDisable ? "disable" : "active"}
        >
          +
        </button>
      </div>
    </div>
  );
};
