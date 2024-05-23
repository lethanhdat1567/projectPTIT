const init = {
  cards: [],
};

export default function reducer(state = init, action, args) {
  switch (action) {
    case "ADD":
      const [newCar] = args;
      return {
        ...state,
        cars: [...state.cards, newCar],
      };
    default:
      return state;
  }
}
