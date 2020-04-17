class App4 extends React.Component {
  state = {
    finishTest: false,
    archetypeSummaryPoints: [
      {
        archetypeId: 0,
        archetypeTotalValue: 0,
        archetypeName: "Władca"
      },
      {
        archetypeId: 1,
        archetypeTotalValue: 0,
        archetypeName: "Mędrzec"
      },
      {
        archetypeId: 2,
        archetypeTotalValue: 0,
        archetypeName: "Mag"
      },
      {
        archetypeId: 3,
        archetypeTotalValue: 0,
        archetypeName: "Bohater"
      },
      {
        archetypeId: 4,
        archetypeTotalValue: 0,
        archetypeName: "Stwórca"
      },
      {
        archetypeId: 5,
        archetypeTotalValue: 0,
        archetypeName: "Odkrywca"
      },
      {
        archetypeId: 6,
        archetypeTotalValue: 0,
        archetypeName: "Buntownik"
      },
      {
        archetypeId: 7,
        archetypeTotalValue: 0,
        archetypeName: "Błazen"
      },
      {
        archetypeId: 8,
        archetypeTotalValue: 0,
        archetypeName: "Kochanek"
      },
      {
        archetypeId: 9,
        archetypeTotalValue: 0,
        archetypeName: "Opiekun"
      },
      {
        archetypeId: 10,
        archetypeTotalValue: 0,
        archetypeName: "Towarzysz"
      },
      {
        archetypeId: 11,
        archetypeTotalValue: 0,
        archetypeName: "Niewinna"
      }
    ]
  };

  handleFinishTest = () => {
    console.log("Finish test metod start");
    this.setState({
      finishTest: true
    });
  };

  handleArchetypeSummaryPointsUpadate = (id, action) => {
    // console.log("handleArchetypeSummaryPointsUpadate start");
    // console.log(id, action);
    const newSummaryPoint = this.state.archetypeSummaryPoints.map(archetype => {
      if (archetype.archetypeId == id) {
        if (action == "plus") {
          archetype.archetypeTotalValue++;
        } else if (action == "minus") {
          archetype.archetypeTotalValue--;
        }
        // console.log(archetype);
      }
      return archetype;
    });

    // console.log(newSummaryPoint);
    this.setState({
      archetypeSummaryPoints: newSummaryPoint
    });
  };

  render() {
    return (
      <>
        {this.state.finishTest ? (
          <SummaryTest
            archetypeSummaryPoints={this.state.archetypeSummaryPoints}
          />
        ) : (
          <TestApp
            finishTest={this.handleFinishTest}
            upadateSummaryTest={this.handleArchetypeSummaryPointsUpadate}
          />
        )}
      </>
    );
  }
}

// export default App4;
