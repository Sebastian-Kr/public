const Header = props => {
  return (
    <div>
      <div className="standard_tamplate_content_header ">
        <h6>Pytanie {props.questionId} z 6</h6>
        <h3>{props.questionTitle}</h3>
      </div>

      <div className="button header_bar">
        Punkty do wykorzystania: <span>{props.questionPoints}</span>
      </div>
    </div>
  );
};
