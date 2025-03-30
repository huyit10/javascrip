import { createStore } from "./core";
import reducer from "./reducer";
const { attach, connect, dispatch } = createStore(reducer)
window.dispatch = dispatch
export {
    attach,
    connect
}