import withLogger from "./logger.js";
import reducer from "./reducer.js";
import { createStore } from "./core.js";

const { attach, connect, dispatch } = createStore(withLogger(reducer));

window.dispatch = dispatch;
export { attach, connect };
