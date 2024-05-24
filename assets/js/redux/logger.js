export default function logger(reducer) {
  return (prevState, action, args) => {
    console.group(action);
    console.log("PrevState: ", prevState);
    console.log("Action Arguments: ", args);
    const nextState = reducer(prevState, action, args);
    console.log("Next state: ", nextState);
    console.groupEnd();
    return nextState;
  };
}
